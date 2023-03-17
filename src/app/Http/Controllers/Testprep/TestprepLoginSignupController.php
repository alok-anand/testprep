<?php
 
namespace App\Http\Controllers\Testprep;
 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
// use App\Models\Student\StudentRegistration;
// use App\Models\Student\StudentProgramWishlist;
// use App\Models\Student\StudentUniversityWishlist;
use App\Models\Testprep\PasswordResets;
// use App\Models\Programshortlist;
// use App\Models\Universityshortlist;
// use App\Models\Studentdocument;


use App\Models\Testprep\Student as TestprepStudent;

use App\Models\Advisor\Staff;

use File;
use DB;
use Illuminate\Support\Facades\Storage;
 
class TestprepLoginSignupController extends Controller
{
	 /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

   // use AuthenticatesUsers;

	public function studentSignupFormSubmit(Request $request)
    {
		$this->validate(request(), [
            'mobile' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:8'
        ]);
		
			
		$functionResponse=0;
        $data = $request->only('mobile','email','password','page_name','company_name');
		
		$students = new TestprepStudent;
		$stuData = $students->where('mobile',$data['mobile'])->orWhere('email',$data['email'])->get(['id']);
		
		
		if($stuData->count() == 0){
			$otp = $this->generateNumericOTP(4);	
			$smsmessage = 'Your verification code is '.$otp.'. -The iApply Team by Canam';
			$otpResult = $this->sendMobileOtp($data['mobile'],$smsmessage);
			$otpResult = 1;
			$otpMailResult=0;
			
			$mail_template = "Hi Student, <br/>Your verification code is-".$otp;
			$otpMailResult = $this->sendOtpMail($data['email'],$mail_template,'Otp from icanam for verification');
			
				

			if($otpResult || $otpMailResult==1)
			{	
				$students->email = $data['email'];
				$students->mobile = $data['mobile'];
				$students->OTP = $otp;
				$students->token = Hash::make($data['password']);
				$students->password = Hash::make($data['password']);
				//$students->company_name = ($data['company_name'] == 'iapply' ) ? 1 : 0;
				if($students->save() ){
					session(['otp' => $otp]);
					$functionResponse=1;
				}	
			}	
		}else{
			$functionResponse=2;
		}
		return $functionResponse;
    }
	

	/* student login */

	public function studentLogin(Request $request)
    {

		
		// $staff = new Staff;
		
		// $staff_data = $staff->find(3);
		
		
		
        if ($request->isMethod('post')) {
			
            $credentials = $request->validate([
                'email' => ['required', 'email'],
                'password' => ['required'],
            ]);

			$remeber = false;
			
			if (Auth::guard('testprepwebstudent')->attempt($credentials,$remeber)) {
			//	die('herdees');
				 $user =Auth::guard('testprepwebstudent')->user();
              
				if($user->student_verify != 1){ 
					return view('testprep.login')->withErrors([
						'error' => 'Student is not Verified. To Login please verify.',
					]);
				}

				return redirect()->intended('testprep/dashboard');
			}else{

                return view('testprep.login')->withErrors([
    				'error' => 'The provided credentials do not match our records.',
    			]);
            }
    		
        }else{
			if(Auth::guard('testprepwebstudent')->check()){ 
				//$user =Auth::guard('webstudent')->user();
				
				$user =Auth::guard('testprepwebstudent')->user();

				if($user->profile_status == 1){
				return redirect()->intended('testprep/dashboard')->withSuccess('Signed in');
			}
			}
            return view('testprep.login');
        }
    }
	
	
	public function studentLoginOtp(Request $request){
		$this->validate(request(), [
            'gen_phone' => 'required'
        ]);
		$functionResponse=0;
        $data = $request->only('gen_phone');
		
		
		$students = new TestprepStudent;
		$stuData = $students->where('mobile',$data['gen_phone'])->get(['id','email']);
		
		if($stuData->count()==0){
			$functionResponse=2;
		}else{
			$otp = $this->generateNumericOTP(4);

			$students->where('mobile',$data['gen_phone'])->update(['OTP'=> $otp]);
				
			$smsmessage = 'Your verification code is '.$otp.'. -The iApply Team by Canam';
			$otpResult = $this->sendMobileOtp($data['gen_phone'],$smsmessage);
			$otpMailResult=0;
			
			$mail_template = "Hi Student, <br/>Your verification code is-".$otp;
			$otpMailResult = $this->sendOtpMail($stuData[0]->email,$mail_template,'Otp from icanam for verification');
			if($otpResult || $otpMailResult==1)
			{		
				session(['login_otp' => $otp]);
				$functionResponse=1;	
			}
		}
		return $functionResponse;
	}
	public function loginResendOtp(Request $request)
	{
		$data = $request->only('mobile','page_name');
		$otp = $this->generateNumericOTP(4);	
		$html=0;
		$students = new TestprepStudent;
		$studentd=$students->where('mobile',$data['mobile']);
		$stuData = $studentd->get(['id','email']);
		if(!empty($stuData) && $stuData->count() > 0){
			$studentd->update(['OTP'=> $otp]);
			$smsmessage = 'Your verification code is '.$otp.'. -The iApply Team by Canam';
			$otpResult = $this->sendMobileOtp($data['mobile'],$smsmessage);
			
			$otpMailResult=0;
			if($stuData[0]->email != '' && !empty($stuData[0]->email)){
				$mail_template = "Hi Student, <br/>Your verification code is-".$otp;
				$otpMailResult = $this->sendOtpMail($stuData[0]->email,$mail_template,'Otp from icanam for verification');
			}
			if(($otpResult != '' && $otpResult == 'Sent.') || $otpMailResult!=0)
			{
				session(['login_otp' => $otp]);
				$html=1;	
			}else{
				$html=0;
			}
		}else{
			$html=2;
		}
		return $html;	
	}
	
	public function studentOtpLogin(Request $request) {
		DB::connection('mysql_testprep')->enableQueryLog();	
		$data = $request->only('otpsub0', 'otpsub1','otpsub2','otpsub3','page_name','company_name','otpmobile','otpemail');
		$html=0;
		$otpnumber=$data['otpsub0'].$data['otpsub1'].$data['otpsub2'].$data['otpsub3'];
		
		if(strval(session('login_otp')) == strval($otpnumber))
		{
			

			$students = new TestprepStudent;
			$studentd = $students->where('mobile',$data['otpmobile']);
			$stuData = $studentd->get(['id','student_verify']);
			
			//dd($stuData[0]);
			if($stuData->count() > 0 ){ 
				$students1 = new TestprepStudent;
					//dd($stuData->toArray());
					// $there = $students1->Where('id',$stuData[0]->id)->update(['student_verify'=> 1]);
					// dd($there);
					// dd(DB::connection('mysql_testprep')->getQueryLog());
				//dd($stuData);
				if($stuData[0]->student_verify ==1)
				{
					Session::forget('login_otp');
					Auth::guard('testprepwebstudent')->loginUsingId($stuData[0]->id);
					return $html=1;
				}
// 				DB::connection('mysql_testprep')->enableQueryLog();
// dd($students1->Where('id',$stuData[0]->id)->update(['student_verify'=> 1]));
// dd(DB::connection('mysql_testprep')->getQueryLog());


				if($students1->Where('id',$stuData[0]->id)->update(['student_verify'=> 1])){
					//dd('here');
					// dd($students1);
					// die;
					Session::forget('login_otp');
					//$request->session()->regenerate();
					Auth::guard('testprepwebstudent')->loginUsingId($stuData[0]->id);
					$html=1;
				}
			}
		}
		
		return $html;
	}
	
	function generateNumericOTP($n) {
		$generator = "1357902468";
		$result = "";
		for ($i = 1; $i <= $n; $i++) {
			$result .= substr($generator, (rand()%(strlen($generator))), 1);
		}
		return $result;
	}
    
	public function signupOtpFormSubmit(Request $request) {
		DB::enableQueryLog();
		$data = $request->only('otpsub0', 'otpsub1','otpsub2','otpsub3','page_name','company_name','otpmobile','otpemail');
		$html=0;
		$otpnumber=$data['otpsub0'].$data['otpsub1'].$data['otpsub2'].$data['otpsub3'];
		// echo session('otp'); 
		// echo $otpnumber;
		// die;
		if(strval(session('otp')) === strval($otpnumber))
		{
			
			$students = new TestprepStudent;
			$studentd = $students->where('mobile',$data['otpmobile'])->Where('email',$data['otpemail']);
			$stuData = $studentd->get(['id']);
			//dd($stuData->count());
			if($stuData->count() > 0){
				$students1 = new TestprepStudent;
				//$students1->where('mobile',$data['otpmobile'])->where('email',$data['otpemail'])->update(['student_verify'=> 1])

				if($students1->where('mobile',$data['otpmobile'])->where('email',$data['otpemail'])->update(['student_verify'=> 1])){
					
					Session::forget('otp');
					//$request->session()->regenerate();
					
					$user = Auth::guard('testprepwebstudent')->loginUsingId($stuData[0]->id);
					
					if(!empty($user) && $user->count() > 0){
						
						$html=1;
					}
					
				}
			}
		}
		
		return $html;
	}
	 public function logOut()
    {
        Auth::guard('testprepwebstudent')->logout();
      return redirect()->intended('testprep/login')->withSuccess('Logged Off Successfully..');
      
      }
	public function signupResendOtp(Request $request)
	{
		$data = $request->only('mobile','email','page_name');
		$otp = $this->generateNumericOTP(4);	
		$html=0;
		$students = new TestprepStudent;
		$studentsd=$students->where('student_verify',0)->where('telephone',$data['mobile'])->Where('email',$data['email']);
		$stuData = $studentsd->get(['id']);
		if($stuData->count() > 0){
			$smsmessage = 'Your verification code is '.$otp.'. -The iApply Team by Canam';
			$otpResult = $this->sendMobileOtp($data['mobile'],$smsmessage);
			
			$otpMailResult=0;
			if($data['email'] != '' && !empty($data['email'])){
				$mail_template = "Hi Student, <br/>Your verification code is-".$otp;
				$otpMailResult = $this->sendOtpMail($data['email'],$mail_template,'Otp from icanam for verification');
			}
			if(($otpResult != '' && $otpResult == 'Sent.') || $otpMailResult!=0)
			{
				session(['otp' => $otp]);
				$html=1;	
			}else{
				$html=0;
			}
		}else{
			$html=2;
		}
		return $html;	
	}
	
	public function sendMobileOtp($mobile,$smsmessage)
	{
		$username='canamhtpotp';
		$password='canm0011';
		$from='CANUWS';
		$category='bulk';
		$api_params="?username=".$username."&password=".$password."&to=".$mobile."&from=".$from."&text=".urlencode($smsmessage);
		$smsGatewayUrl = "https://http.myvfirst.com/smpp/sendsms";  
		$smsgatewaydata = $smsGatewayUrl.$api_params;
		$url = $smsgatewaydata;
		$ab=file_get_contents($url);
		return $ab;
	}
	
	public function sendOtpMail($email,$mail_template,$subject){
			
		$header = "From: noreply@icanam.io\r\n";
		$header.= "MIME-Version: 1.0\r\n";
		$header.= "Content-Type: text/html; charset=ISO-8859-1\r\n";
		$header.= "X-Priority: 1\r\n";
		$email_status = mail($email ,$subject,$mail_template,$header);
		if($email_status) {
			$mail_sent = 1;
		} else {
			$mail_sent = 0;
		}
		return $mail_sent;
	}
	
	public function resetPassLink(Request $request){
		
		$request->validate(['email' => 'required|email']);
		$data = $request->only('email');
		$html=0;
		$students = new TestprepStudent;
		$stuData = $students->Where('email',$data['email'])->get(['id']);
		//dd($stuData);
		$passData = new PasswordResets;
		//dd($passData);
		if($stuData->count() > 0){
			$tokenData = $passData->where('email', $data['email'])->first();
			//dd($tokenData);
			if(!empty($tokenData)){
			
				$passData->where('email', $data['email'])->delete();
			}
			$passData->insert([
					'email' => $data['email'],
					'token' => Str::random(60),
					'created_at' => Carbon::now()
				]);
			
// 			try { 
//   $passData->insert([
// 					'email' => $data['email'],
// 					'token' => Str::random(60),
// 					'created_at' => Carbon::now()
// 				]);
//     // Closures include ->first(), ->get(), ->pluck(), etc.
// } catch(Exception $e){ 
//   dd($e->getMessage()); 
//   // Note any method of class PDOException can be called on $ex.
// }
			
			$tokenData1 = $passData->where('email', $data['email'])->first();
			if(!empty($tokenData1)){
				$link = env('TESTPREP_APP_URL') . '/password/reset/' . $tokenData1->token . '?email=' . base64_encode(urlencode($data['email']));
				$mail_template = "Hi Student, <br/>Please click on the given link to reset your password.<br/><a href='".$link."'>Click Here</a>";
				$otpMailResult = $this->sendOtpMail($data['email'],$mail_template,'Reset Password');
				if($otpMailResult == 1){
					$html=1;
				}
			}
		}else{
			$html=2;
		}
		
		//Get the token just created above
		//dd($html);
		return $html;
	}
	
	public function resetPassword(Request $request, $token){
		
		if(empty($request->only('email')) || empty($token)){
			return redirect()->intended('testprep/forgot')->withErrors([
    				'error' => 'The provided credentials do not match our records.Please start the process again.',
    			]);
		}
		$email='';
		$passData = new PasswordResets;
		
		if(!empty($request->only('email')) && !empty($token)){
			
			$tokenData = $passData->where('token', $token)->first();
			//dd($tokenData);
			if(!empty($tokenData) && $tokenData->count()==0){ //die('y');
				return redirect()->intended('testprep/forgot')->withErrors([
    				'error' => 'The provided credentials do not match our records.Please start the process again.',
    			]);
			}else{
				if(!empty($request->only('email'))){ 
					$data = $request->only('email');
					// dd($data);
					$email = urldecode(base64_decode($data['email']));
					$students = new TestprepStudent;
					$stuData = $students->Where('email',$email)->first();
					if(!empty($stuData) && $stuData->count()==0){ //dd('there');
						return redirect()->intended('testprep/forgot')->withErrors([
							'error' => 'The provided credentials do not match our records.Please start the process again.',
						]);
					}else{

						$date = Carbon::now();
						$datetime = Carbon::parse($date);
						$tokentime = Carbon::parse($tokenData->created_at);
						
						$totalDuration = $datetime->diffInSeconds($tokentime);
						
						if(strtotime(gmdate('H:i:s',$totalDuration)) > strtotime('00:10:00')){ //dd('ther');
							return redirect()->intended('testprep/forgot')->withErrors([
								'error' => 'The link got expired.Please start the process again.',
							]);
						}
						
					}
				}
			}
		}
		
		$data['email'] = $email;
		$data['reset_token'] = $token;
		
		return view('testprep.reset-pass',$data);
	}
	
	public function saveResetPassword(Request $request){
		$this->validate(request(), [
            'reset_token' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:8'
        ]);
		$data = $request->only('reset_token','email','password');
		
		$email='';
		$passData = new PasswordResets;
		$email = $data['email'];
		$token = $data['reset_token'];
		
		$tokenData = $passData->where('token', $token)->where('email', $email)->first();

		if( !empty($tokenData && $tokenData->count()>0 )){
			$students = new TestprepStudent();
			if($students->Where('email',$email)->update(['password'=> Hash::make($data['password'])])){
				$passData->where('token', $token)->where('email', $email)->delete();
				return redirect()->intended('testprep/login')->with('success','Password changed successfully.');
				
			}
		}
		
		$data['email'] = $email;
		$data['reset_token'] = $token;
		
		return redirect()->intended('testprep/login')->with([
								'error' => 'The link got expired.Please start the process again.']);
	}
	
	
}