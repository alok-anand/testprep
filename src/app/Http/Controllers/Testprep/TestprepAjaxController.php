<?php
 
namespace App\Http\Controllers\Testprep;
 
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use App\Models\Testprep\ZoomDemoClass;
use App\Models\Testprep\CourseMaster;
use App\Models\Testprep\StudentPackageTransaction;
use App\Models\Testprep\StudentCourse;
use App\Models\Testprep\MultiStepLogin;
use App\Traits\Testprep\CallTrait;

use DB;


 
class TestprepAjaxController extends Controller
{
    use CallTrait;

    public function direct_call($telephone)
    {
        //defined in Call Trait
        return $this->call($telephone);

    }
    public function multisteplogin(Request $request)
    {
          //dd($request->toArray());
         $data = $request->only('purpose', 'country','intake','persue','education','cgpa','passing','passport','test_taken','cusname','mobile','email');
         // $data = $request->except(['id']);
         // dd($data);
         $multy_step_login = new MultiStepLogin();

       $saved = MultiStepLogin::firstOrCreate(
        ['mobile' =>  $data['mobile']],
        ['name' => $data['cusname'], 
         'email' => $data['email'],
         'mobile'=> $data['mobile'],
         'purpose'=> $data['purpose'],
         'country'=> $data['country'],
         'intake'=> $data['intake'],
         'persue'=> $data['persue'],
         'education'=>$data['education'],
         'cgpa' =>$data['cgpa'],
        'passing' =>$data['passing'],
        'passport'=>$data['passport'],
        'test_taken'=>$data['test_taken']]
);

       if($saved)
       {
        return 'success';
       }
       else
       {
        return 'fail';
       }
        
    }
    public function leadFormSubmit(Request $request)
    {
        $data = $request->only('name', 'mobile','email','program','page_name','appdate','apptime');
        

        $otp = $this->generateNumericOTP(4);    
        
        $smsmessage = 'Your verification code is '.$otp.'. -The iApply Team by Canam';
        $otpResult = $this->sendMobileOtp($data['mobile'],$smsmessage);
        $otpMailResult=0;
        if(isset($data['email']) && $data['email'] != '' && !empty($data['email'])){
            if($data['page_name'] == 'zoom_lead'){
                $mail_template = "Dear Candidate, <br/>".$otp." is your OTP to register for a Zoom call with our expert counsellors. Kindly keep this OTP to yourself for account safety.<br/>Best Wishes!<br/>Team Canamprep";
                $otpMailResult = $this->sendOtpMail($data['email'],$mail_template,'OTP for Zoom Registration');
            }else if($data['page_name'] == 'appointment_lead'){
                $mail_template = "Dear Candidate, <br/>".$otp." is your OTP to register for a virtual counselling session on Zoom call with our expert counsellors. Kindly keep this OTP to yourself for account safety.<br/>Best Wishes!<br/>Team Canamprep";
                $otpMailResult = $this->sendOtpMail($data['email'],$mail_template,'OTP for Virtual counselling');
            }else{
                $mail_template = "Hi ".$data['name'].", <br/>Thank you for choosing us to answer your study abroad query.".$otp." is your OTP to register with us. Kindly keep this OTP to yourself for account safety.<br/>Best Wishes!<br/>Team Canamprep";
                $otpMailResult = $this->sendOtpMail($data['email'],$mail_template,'Canam OTP to register for study abroad query');
            }
        }
        $functionResponse='';
        if($otpResult || $otpMailResult==1)
        {   
            session(['otp' => $otp,'name'=>$data['name'],'email'=>$data['email'],'mobile'=>$data['mobile'],'program'=>$data['program'],'page_name'=>$data['page_name'],'appdate'=>isset($data['appdate'])?$data['appdate']:'','apptime'=>isset($data['apptime'])?$data['apptime']:'']);
            $functionResponse=1;    
        }
        else
        {
            $functionResponse=0;
        }       
        return $functionResponse;
    }

    protected function saveZoomDemoClass($data)
    {

        // dd($data);
        // die;
        //DB::enableQueryLog();
        $zoom_demo_class = new ZoomDemoClass();

        // $zoom_demo_class->name = $data['name'];
        // $zoom_demo_class->email = $data['email'];
        // $zoom_demo_class->moblle = $data['mobile'];
        // $zoom_demo_class->program_type = $data['program'];
        // $zoom_demo_class->demo_type = 'online-demo';
        // $zoom_demo_class->branch_name = 'Test Branch';

        $flight = ZoomDemoClass::firstOrCreate(
        ['moblle' =>  $data['mobile']],
        ['name' => $data['name'], 
         'email' => $data['email'],
         'moblle'=> $data['mobile'],
         'program_type'=> $data['program'],
         'demo_type'=> 'online-demo',
         'branch_name'=> 'Test Branch',
         'meetingtime'=> $data['appdate'].' '.$data['apptime']]
);
      //  dd($flight);
       // dd(DB::getQueryLog());

       // $zoom_demo_class->save();
       // dd(DB::getQueryLog());
        

    }

public function paymentpopup(Request $request) {
    //dd($request);
   // dd($request->course_details);
     $course_alias = $request->input('course_alias');
        // dd($course_alias);
        // die;
        $course_details = CourseMaster::where('course_master.alias',$course_alias)->first();
        //dd($course_details);
        return view('testprep.ajax.paymentpopup',['course_details'=> $course_details]); 
    }
// if(isset($_REQUEST['action']) && $_REQUEST['action'] == "course_payment"){
//     extract($_POST);
//     // print_r($_SESSION['user_datails']); 
//     // echo 'abc';
//      $userid = $_SESSION['user_datails']->id;   
//     $sql = "INSERT INTO  student_package_transaction (student_id, transaction_id, course_id, course_fees, paid_amnt)
//             VALUES ($userid ,'$razorpay_payment_id', $cid, '$coursefee' , $paid_amnt )";
//   //  echo $sql ;  exit;
//     if (mysqli_query($db, $sql)) {
//          $transaction_id = mysqli_insert_id($db);
//         // $start_date = date('Y-m-d');
//         // $end_date = date('d-m-Y H:m:s', strtotime("+".$course_duration." days"));
//         $duration = explode(' ',$course_duration);
//         $dur = (int)$duration[0];
//         $start_date = date('Y-m-d');
//         $end_date = date('Y-m-d', strtotime("+".$duration[0]." days"));
//         $sql2 = "INSERT INTO student_course (student_id, course_id,transaction_id, start_date, end_date) VALUES ($userid , $cid,$transaction_id, '$start_date', '$end_date')";
//         //echo $sql2; exit;
//         if(mysqli_query($db, $sql2)){
//           $error = 0;   
//         }
//       //  $error = 0;  
//      }else{
//           $error = 1;
//      }


//     echo $error;
//     exit;
// }
public function course_payment(Request $request)
    { 
        $input = $request->only(['razorpay_payment_id', 'cid','coursefee','paid_amnt','course_duration']);

        //dd($input);
        $spt = new StudentPackageTransaction;
        $spt->student_id = 1;
        $spt->transaction_id = $input['razorpay_payment_id'];
        $spt->course_id = $input['cid'];
        $spt->course_fees = $input['coursefee'];
        $spt->paid_amnt = $input['paid_amnt'];
        $spt->save();

        $duration = explode(' ', $input['course_duration']);
        $start_date = date('Y-m-d');
        $end_date = date('Y-m-d', strtotime("+".$duration[0]." days"));

       
        $sc  = new StudentCourse();
        $sc->student_id = 1;
        $sc->course_id = $input['cid'];
        $sc->transaction_id = $spt->id;
        $sc->start_date = $start_date;
        $sc->end_date = $end_date;
        $sc->save();
        
        if($sc->id)
        {
            return 0;
        }
        else
          {
            return 1;
          }  

    }
public function generateNumericOTP($n) {
        $generator = "1357902468";
        $result = "";
        for ($i = 1; $i <= $n; $i++) {
            $result .= substr($generator, (rand()%(strlen($generator))), 1);
        }
        return $result;
    }
    
    public function commonOtpFormSubmit(Request $request) {
        $data = $request->only('otpsub0', 'otpsub1','otpsub2','otpsub3','page_name','otp_mobile_number','otp_page_name');
        $html=0;
        if(session('page_name') ==  $data['otp_page_name'] && session('mobile') == $data['otp_mobile_number'] ) {
            $otpnumber=$data['otpsub0'].$data['otpsub1'].$data['otpsub2'].$data['otpsub3'];
            if(session('otp') == $otpnumber)
            {
                // $pref='Canada';
                // if(session('prefference') == 2)
                // {
                    // $pref='Usa';
                // }
                // if(session('prefference') == 3)
                // {
                    // $pref='Uk';
                // }
                //$enquirybranch = 'TestBranch';
                 

                $email = (session('email') != '') ? session('email') : trim(session('mobile')).'@noemail.com';
                $enquirysource = "Book Demo Class";
                $enquirybranch = env('TESTPREP_LEAD_BRANCH');

                if(session('nearestlocation')!= ''){
                    $enquirybranch = session('nearestlocation');
                }
                if($data['otp_page_name'] == 'zoom_lead'){
                    // $enquirysource = "Zoom Meeting Leads";
                    // $enquirybranch = "New Delhi";
                    $enquirysource = "book demo class";
                    //$enquirybranch = 'TestBranch';
                    $enquirybranch = env('TESTPREP_LEAD_BRANCH');
                    //$enquirybranch = 'TestBranch';


                    if(session('email') != '' && !empty(session('email'))){
                        $mail_template = "Hi ".session('name').",                       
                        <p>You have successfully registered for a virtual counselling session on Zoom.</p><p> Kindly click on the link below to interact LIVE with Canamprep experts.</p> <p><a href='".env('ZOOM_LINK')."' target='_blank' style='text_decoration :none; font-size:25px; color:#1F497D;'>Zoom Link</a></p>
                        ";
                        $otpMailResult = $this->sendOtpMail(session('email'),$mail_template,'Canam Zoom link for Virtual counselling');
                        $admin_mail_template = "Hi Admin,                       
                        <p>Zoom Session details given below.</p>    
                        <p>
                            <strong>Name:-&nbsp;</strong>".session('name')."<br />
                            <strong>Email:-&nbsp;</strong>".session('email')."<br />
                            <strong>Mobile:-&nbsp;</strong>".session('moble')."<br />
                        </p>
                        ";
                        $otpMailResult = $this->sendOtpMail(env('TESTPREP_ADMIN_EMAIL'),$admin_mail_template,'Request for Zoom Virtual Counselling');
                    }
                }else if($data['otp_page_name'] == 'appointment_lead'){
                     $enquirysource = "book demo class";
                     $enquirybranch = env('TESTPREP_LEAD_BRANCH');
                    
                    $mail_template = "Hi ".session('name').",                       
                        <p>Thanks for showing interest for Schedule an Online Appointment.</p>          <p>Please click on the below mentioned zoom link to meet the Canamprep experts.</p>
                        ";
                        $otpMailResult = $this->sendOtpMail(session('email'),$mail_template,'Request for Schedule an Online Appointment');
                    $admin_mail_template = "Hi Admin,                       
                        <p>Online Appointment details given below.</p>  
                        <p>
                            <strong>Name:-&nbsp;</strong>".session('name')."<br />
                            <strong>Email:-&nbsp;</strong>".session('email')."<br />
                            <strong>Mobile:-&nbsp;</strong>".session('moble')."<br />
                            <strong>Demo Time:-&nbsp;</strong>".session('appdate').' '.session('apptime')."<br />

                        </p>
                        ";
                        $otpMailResult = $this->sendOtpMail(env('TESTPREP_ADMIN_EMAIL'),$admin_mail_template,'Request for Schedule an Online Appointment');
                    
                }
                    $response = Http::post('https://devmprep.canamcorp.com/LeadStudentsApi/addLeadstudentapi', [
                        'branchname' => $enquirybranch,
                        'name' => session('name'),
                        'mobileno' => session('mobile'),
                        'email' => $email,
                        // 'countrypref1' => session('prefference'),
                        // 'prefintake' => session('pref_intake'),
                        // 'counselingmode' => session('counseling_mode'),
                        "enquerysource"=> $enquirysource
                    ]);
                    
                    $data = array();
                    $data['name'] = session('name');
                    $data['email'] = session('email');
                    $data['mobile'] = session('mobile');
                    $data['program'] = session('program');
                    $data['appdate'] = session('appdate');
                    $data['apptime'] = session('apptime');
                    $data['demo_type'] = 'online-demo';
                    $data['branch_name'] = $enquirybranch;
                    // print_r($data); 
                    // die;
                    $this->saveZoomDemoClass($data);
                    // print_r($response); 
                    // die;
                    
                /* }else{
                    if(session('email') != '' && !empty(session('email'))){
                        $mail_template = "Hi ".session('name').",                       
                        <p>Thanks for showing interest to attend the iApply Virtual Office.</p>         <p>Please click on the below mentioned zoom link to meet the iApply smart advisor.</p> <p><a href='".env('ZOOM_LINK')."' target='_blank' style='text_decoration :none; font-size:25px; color:#1F497D;'>Zoom Link</a></p>
                        ";
                        $otpMailResult = $this->sendOtpMail(session('email'),$mail_template,'Zoom link from icanam for Counselling');
                    }
                } */
                
                session(['storesession' =>session()->getId()]);
                Session::forget('otp');
                Session::forget('name');
                Session::forget('email');
                Session::forget('mobile');
                // Session::forget('message');
                // Session::forget('prefference');
                // Session::forget('nearestlocation');
                // Session::forget('counseling_mode');
                Session::save();
                $html=1;
            }   
        }
        else
        {
            $html=2;    
        }       
        return $html;
    }

    
    public function commonResendOtp(Request $request)
    {
        $data = $request->only('mobile','page_name');
        $otp = $this->generateNumericOTP(4);    
        $html=0;
        if(session('page_name') ==  $data['page_name'] && session('mobile') == $data['mobile'] ){
        $smsmessage = 'Your verification code is '.$otp.'. -The iApply Team by Canam';
        $otpResult = $this->sendMobileOtp($data['mobile'],$smsmessage);
        
        $otpMailResult=0;
        if(session('email') != '' && !empty(session('email'))){
            $mail_template = "Hi ".session('name').", <br/>Your verification code is-".$otp;
            $otpMailResult = $this->sendOtpMail(session('email'),$mail_template,'Otp from icanam for verification');
        }
        if(($otpResult != '' && $otpResult == 'Sent.') || $otpMailResult!=0)
        {
            session(['otp' => $otp]);
            $html=1;    
        }else{
            $html=0;
        }
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


    
    
}