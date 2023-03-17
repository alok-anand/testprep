<?php

namespace App\Http\Controllers\Testprep;

use Illuminate\Http\Request;

use App\Models\Testprep\DemoForm;
use App\Models\Testprep\Batch;
use App\Models\Testprep\Pagemeta;
use App\Models\Testprep\Branch;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;


use App\Traits\BlogTrait;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
class PagesController extends Controller
{
    //private static $apiContext = '';
    use BlogTrait;
// $this->leftJoin('pagemeta','cms_page.page_id','=','pagemeta.id')
//                     ->where('pagemeta.slug',$palias)
//                     ->where('cms_page.active',$active)
//                     ->orderBy('cms_page.displayorder','desc')
//                     ->first();

public function index_v1()
    {
         //$user = Auth::guard('webstudent')->user();
       // dd($user->toArray());
        // dd(session()->all());
        // die;
        //DB::connection('mysql_testprep')->enableQueryLog();
       // $batch = new Batch;
        // $onlineBatches = $batch->select('batches.title','batches.classstarttime','classsendtime','users.fname','users.lname')->where('batch_name','like','Online - Demo%')->with('User')->get();
        $onlineBatches = Batch::where('batch_name','like','Online - Demo%')->with('User')->get();
        //dd($onlineBatches);
        //$onlineBatches = Batch::find(1)->toSQL();
        $blog_section =  $this->getAllLatestArticles(20); //latest events
        //new Pagemeta();
       $Pagemeta = new Pagemeta();

        $pagemeta = $Pagemeta->getpagemeta('/');

        //dd($onlineBatches);

         //dd(DB::connection('mysql_testprep')->getQueryLog());

        return view('testprep.index_v1',['blog_section'=> $blog_section,'onlineBatches' =>$onlineBatches,'pagemeta'=> $pagemeta]);
    }

    public function index_v2()
    {

        //DB::connection('mysql_testprep')->enableQueryLog();
       // $batch = new Batch;
        // $onlineBatches = $batch->select('batches.title','batches.classstarttime','classsendtime','users.fname','users.lname')->where('batch_name','like','Online - Demo%')->with('User')->get();
        $onlineBatches = Batch::where('batch_name','like','Online - Demo%')->with('User')->get();
        //dd($onlineBatches);
        //$onlineBatches = Batch::find(1)->toSQL();
        $blog_section =  $this->getAllLatestArticles(20); //latest events
        //new Pagemeta();
       $Pagemeta = new Pagemeta();

        $pagemeta = $Pagemeta->getpagemeta('/');

        //dd($onlineBatches);

         //dd(DB::connection('mysql_testprep')->getQueryLog());



        return view('testprep.index_v2',['blog_section'=> $blog_section,'onlineBatches' =>$onlineBatches,'pagemeta'=> $pagemeta]);
    }
    public function demoform(Request $request)
    {
        
        $request->validate(['name'=> 'required','email'=>'required|email','phone'=>'required|digits_between:10,12','city'=>'required','course'=>'required'] );

        $request->merge(['university' => '']);

        DemoForm::create($request->all());

        return view('testprep.thank-you');

        //return redirect('/testprep');
    }
     public function contact_us()
    {
      
        $branches = Branch::where('active',1)->get();
        $Pagemeta = new Pagemeta();
        $pagemeta = $Pagemeta->getpagemeta('contact-us');

      return view('testprep.contact-us',compact('branches','pagemeta'));
    }
     public function terms_and_conditions()
    {
      return view('testprep.terms-and-conditions');
    }

    public function privacy_policy()
    {
       return view('testprep.privacy-policy');
    }

    public function disclaimer()
    {
       return view('testprep.disclaimer');
    }

    public function routes(Request $request)
    {
        $routes = Route::getRoutes();
        return view('testprep.routesList', compact('routes'));

    }
    public function multisteplogin()
    {
        return view('testprep.multisteplogin');
    }



}
