<?php

namespace App\Http\Controllers\Testprep;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;



use Illuminate\Support\Facades\Route;

class HomeController extends Controller
{
    //private static $apiContext = '';

    public function index()
    {
        //$routes = Route::getRoutes();
        
        
        return view('testprep.index'); 
    }
    public function demoform(Request $request)
    {
        $request->validate(['name'=> 'required','email'=>'required|email','phone'=>'required|digits_between:10,12','city'=>'required','course'=>'required'] );
        print_r($request->all());
    }
    public function routes()
    {
        $routes = Route::getRoutes();
        

        return view('testprep.routesList', compact('routes'));
        
       // return view('testprep.index'); 

    }
}
