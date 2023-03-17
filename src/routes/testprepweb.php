<?php

use App\Http\Controllers\Testprep\PagesController;
use App\Http\Controllers\Testprep\CourseDetailsController;
use App\Http\Controllers\Testprep\ExamsController;
use App\Http\Controllers\Testprep\StudentsController;
use App\Http\Controllers\Testprep\TestprepAjaxController;
use App\Http\Controllers\Testprep\TestprepLoginSignupController;

  Route::group(['prefix' => 'testprep/dashboard','middleware' => ['auth:testprepwebstudent']], function () {
     Route::get('/', [StudentsController::class, 'index'])->name('testprep.student-dashboard');
  Route::get('/pro', [StudentsController::class, 'student_dashboard'])->name('testprep.student-dashboard-pro');
  Route::get('/band_predictor', [StudentsController::class, 'band_predictor'])->name('testprep.band_predictor');
   Route::get('/instruction', [StudentsController::class, 'instruction'])->name('testprep.instruction');
   Route::post('/set_goal', [StudentsController::class, 'set_goal']);

   

 });
/* Test prep Route */
// Route::group(['namespace' => '\Testprep', 'prefix' => 'testprep'], function () {

  Route::group(['prefix' => 'testprep'], function () {
  /**** testprep signup/login ****/  
	Route::get('/signup', function () {return view('testprep.signup');});
  Route::get('/forgot', function () { return view('testprep.forgot'); })->name('testprep.forgot');
	Route::post('/signup', [TestprepLoginSignupController::class, 'studentSignupFormSubmit']);
	Route::get('/logout', [TestprepLoginSignupController::class, 'logOut']);
  Route::match(['get', 'post'],'/login', [TestprepLoginSignupController::class, 'studentLogin'])->name('testprep.login');
  Route::post('/signup-otp-form', [TestprepLoginSignupController::class, 'signupOtpFormSubmit']);
	Route::post('/signup-resend', [TestprepLoginSignupController::class, 'signupResendOtp']);
  Route::match(['get', 'post'],'/login', [TestprepLoginSignupController::class, 'studentLogin'])->name('testprep.login');
	Route::post('/genLoginOtp', [TestprepLoginSignupController::class, 'studentLoginOtp'])->name('testprep.genloginotp');
	Route::post('/login-resend', [TestprepLoginSignupController::class, 'loginResendOtp']);
	Route::post('/otplogin', [TestprepLoginSignupController::class, 'studentOtpLogin']);
	Route::post('/genresetpassLink', [TestprepLoginSignupController::class, 'resetPassLink'])->name('testprep.resetPassLink');
	Route::get('/password/reset/{token}', [TestprepLoginSignupController::class, 'resetPassword'])->name('testprep.resetPassword');
	Route::post('/savepassword', [TestprepLoginSignupController::class, 'saveResetPassword']);

    Route::get('/v1', [PagesController::class, 'index_v2'])->name('testprep.v2.index');

    Route::get('/', [PagesController::class, 'index_v1'])->name('testprep.v1.index');

    Route::get('/terms-and-conditions', [PagesController::class, 'terms_and_conditions'])->name('testprep.terms_and_conditions');

     Route::get('/disclaimer', [PagesController::class, 'disclaimer'])->name('testprep.terms_and_conditions');

      Route::get('/privacy-policy', [PagesController::class, 'privacy_policy'])->name('testprep.privacy_policy');

      Route::get('/contact-us', [PagesController::class, 'contact_us'])->name('testprep.contact_us');

    Route::post('/demoform', [PagesController::class, 'demoform']);
     

    

    Route::get('/routes', [PagesController::class, 'routes']);
    //Route::get('/thank-you', [PagesController::class, 'routes']);

    Route::get('/course-detail/{alias}', [CourseDetailsController::class, 'index']);
    Route::get('/multisteplogin', [PagesController::class, 'multisteplogin']);

    

    Route::post('store-testprep-data', [TestprepAjaxController::class, 'leadFormSubmit'])->name('testprep.ajax.store-testprep-data');

    Route::post('/paymentpopup', [TestprepAjaxController::class, 'paymentpopup'])->name('testprep.ajax.store-testprep-data');

    Route::post('/course_payment', [TestprepAjaxController::class, 'course_payment'])->name('testprep.ajax.course_payment');

    Route::post('commone-otp-form-submit', [TestprepAjaxController::class, 'commonOtpFormSubmit']);

    Route::post('commone-resend', [TestprepAjaxController::class, 'commonResendOtp']);

    Route::post('send-otp', [TestprepAjaxController::class, 'sendOtp']);

     Route::post('multisteplogin', [TestprepAjaxController::class, 'multisteplogin'])->name('testprep.ajax.multisteplogin');

     Route::get('direct_call/{telephone}', [TestprepAjaxController::class, 'direct_call']);
     
     Route::get('/{type}/{alias?}', [ExamsController::class, 'index'])->name('testprep.exams');

 });
