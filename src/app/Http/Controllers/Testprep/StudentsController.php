<?php

namespace App\Http\Controllers\Testprep;

use Illuminate\Http\Request;

use App\Models\Testprep\Student;
use App\Models\Testprep\StudentResult;



use App\Http\Controllers\Controller;

use App\Models\Testprep\Batch;

use Illuminate\Support\Facades\Http;


use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Session;

class StudentsController extends Controller
{
    
  //   "id" => 5256
  //   "OTP" => "8013"
  //   "programe_id" => 10
  //   "test_module_id" => 1
  //   "oauth_uid" => ""
  //   "oauth_provider" => ""
  //   "time_zone" => 619
  //   "active" => 1
  //   "token" => "12582e9b532e3de843cec5806c692548"
  //   "dtoken" => ""
  //   "dtype" => ""
  //   "country_code" => "+91"
  //   "mobile" => "8968885533"
  //   "email" => "support2.it@canamgroup.com"
  //   "fname" => "ALOK"
  //   "lname" => "KUMAR"
  //   "username" => "support2.it@canamgroup.com"
  //   "gender" => 0
  //   "dob" => ""
  //   "profile_pic" => "https://api.masterprep.in/newV1/./uploads/profile_pic/default_profile_pic.png"
  //   "residential_address" => "Canam Consultants - Study in Canada, Study Abroad Consultants, Shopping Plaza, 17D, Sector 17, Chandigarh, India"
  //   "country_id" => 99
  //   "mobile_notification" => 1
  //   "email_notification" => 1
  //   "Goal_l" => "6.0"
  //   "Goal_r" => "7.0"
  //   "Goal_w" => "7.0"
  //   "Goal_s" => "8.0"
  //   "Goal_avg" => "7.0"
  //   "targateDate" => "03/16/2023"
  //   "by_user" => 1
  //   "batch_id" => 119
  //   "created" => "2022-08-24 10:24:08"
  //   "modified" => "2023-03-10 21:08:41"
  // ]
  /*
    * Dashboard for free user
    */
    public function index()
    {

       //  //DB::connection('mysql_testprep')->enableQueryLog();
       // // $batch = new Batch;
       //  // $onlineBatches = $batch->select('batches.title','batches.classstarttime','classsendtime','users.fname','users.lname')->where('batch_name','like','Online - Demo%')->with('User')->get();
       //  $onlineBatches = Batch::where('batch_name','like','Online - Demo%')->with('User')->get();
       //  //dd($onlineBatches);
       //  //$onlineBatches = Batch::find(1)->toSQL();
       //  $blog_section =  $this->getAllLatestArticles(20); //latest events
       //  //new Pagemeta();
       // $Pagemeta = new Pagemeta();

       //  $pagemeta = $Pagemeta->getpagemeta('/');

       //  //dd($onlineBatches);

       //   //dd(DB::connection('mysql_testprep')->getQueryLog());



        //return view('testprep.index_v2',['blog_section'=> $blog_section,'onlineBatches' =>$onlineBatches,'pagemeta'=> $pagemeta]);
       $onlineBatches = Batch::where('batch_name','like','Online - Demo%')->with('User')->get();

        return view('testprep.dashboard.student-dashboard',compact('onlineBatches'));
    }

   

    /*
    * Dashboard for paid user
    */
    public function student_dashboard()
    {
       //   //$user = Auth::guard('webstudent')->user();
       // // dd($user->toArray());
       //  // dd(session()->all());
       //  // die;
       //  //DB::connection('mysql_testprep')->enableQueryLog();
       // // $batch = new Batch;
       //  // $onlineBatches = $batch->select('batches.title','batches.classstarttime','classsendtime','users.fname','users.lname')->where('batch_name','like','Online - Demo%')->with('User')->get();
       //  $onlineBatches = Batch::where('batch_name','like','Online - Demo%')->with('User')->get();
       //  //dd($onlineBatches);
       //  //$onlineBatches = Batch::find(1)->toSQL();
       //  $blog_section =  $this->getAllLatestArticles(20); //latest events
       //  //new Pagemeta();
       // $Pagemeta = new Pagemeta();

       //  $pagemeta = $Pagemeta->getpagemeta('/');

       //  //dd($onlineBatches);

       //   //dd(DB::connection('mysql_testprep')->getQueryLog());

       // return view('testprep.index_v1',['blog_section'=> $blog_section,'onlineBatches' =>$onlineBatches,'pagemeta'=> $pagemeta]);
      DB::connection('mysql_testprep')->enableQueryLog();

        $authstudent =Auth::guard('testprepwebstudent')->user();
     
       $student = Student::where('id',$authstudent->id)->first();

       $batch  = Batch::where('batch_id',$authstudent->batch_id)->first();
      

        $student_result = new StudentResult();

        $practice_result =  $student_result->getStudentResultsDatewise($student->id,'Practice');

        $mock_result = $student_result->getStudentResultsDatewise($student->id,'Mock');


         $student_performance = $student_result->getStudentResultsDatewise($student->id,'Mock','desc');

         $all_mock_tests = $student_result->getStudentResultsQuery($student->id,NULL,2,'desc')->toArray();
         $onlineBatches = Batch::where('batch_name','like','Online - Demo%')->with('User')->get();
        //dd($student);
        return view('testprep.dashboard.student-dashboard-pro',compact('student','batch','student_performance', 'practice_result','mock_result','all_mock_tests','onlineBatches'));
    }

   
    public function set_goal(Request $request)
    {
      // print_r($request->input('listening'));
      // die;
      //dd($request->input());
      $student = Student::where('id',5256)->first();
       $request->validate(['listening'=> 'required','reading'=> 'required','writing'=> 'required','speaking'=> 'required','targateDate'=>'required']);
      $overall = round(($request->input('listening')+ $request->input('reading') + $request->input('writing') +$request->input('speaking'))/4*2)/2 ;
      $student->Goal_l =$request->input('listening');
      $student->Goal_r =$request->input('reading');
      $student->Goal_w =$request->input('writing');
      $student->Goal_s =$request->input('speaking');
       $student->targateDate = $request->input('targateDate');
      $student->Goal_avg = $overall;
      $student->save();
      return back()->with('message','Goal Updated');
      // $request->validate(['name'=> 'required','email'=>'required|email','phone'=>'required|digits_between:10,12','city'=>'required','course'=>'required'] );

      //   $request->merge(['university' => '']);

      //   DemoForm::create($request->all());

      //   return view('testprep.thank-you');
    } 

    public function band_predictor()
    {
       return view('testprep.dashboard.band-predictor');
    }

     public function instruction()
    {
       return view('testprep.dashboard.instruction');
    }
    


}
