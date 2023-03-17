<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProgramController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\UniversityController;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\BlogsController;

//Student COntrollers
use App\Http\Controllers\LoginSignupController;
use App\Http\Controllers\Student\StudentController;
use App\Http\Controllers\Student\AllProgramController;
use App\Http\Controllers\Student\StudentUniversityController;
use App\Http\Controllers\Student\ApplicationController;

//Advisor Controllers
use App\Http\Controllers\Advisor\AdvisorController;
use App\Http\Controllers\Advisor\AdvisorLeadController;

//Admin Controllers
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ManageEventController;

//Testprep Controllers
// use App\Http\Controllers\Testprep\HomeController;
// use App\Http\Controllers\Testprep\CourseDetailsController;
// use App\Http\Controllers\Testprep\ExamsController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::group(['middleware' => ['lowercase']], function () {
	Route::get('/', [MasterController::class, 'getActiveCountries']);
	/*Route::get('/home', [MasterController::class, 'getActiveEvents']);
	Route::get('/events', [MasterController::class, 'getActiveEvents']);*/

	Route::get('/about-us', [MasterController::class, 'about']);


	Route::get('/services', function () {
		return view('services');
	});

	Route::get('/contact-us', function () {
		return view('contact');
	});
	Route::get('/quick-query', function () {
		return view('quick-query');
	});

	Route::get('/signup', function () {
		return view('signup');
	});

	Route::get('/search-eligibility', function () {
		return view('eligibilitys');
	});

	Route::get('/blog-detail', function () {
		return view('blog-detail');
	});



	/**** program ****/

	Route::match(['get', 'post'], 'programs', [ProgramController::class, 'getAllPrograms2']);
	Route::match(['get', 'post'], 'programs/{id}', [ProgramController::class, 'getAllPrograms2']);
	Route::match(['get', 'post'], 'programs/{country}/{id}', [ProgramController::class, 'getAllPrograms2']);

	Route::match(['get', 'post'], 'programs2', [ProgramController::class, 'getAllPrograms']);
	Route::match(['get', 'post'], 'programs2/{id}', [ProgramController::class, 'getAllPrograms']);
	Route::match(['get', 'post'], 'programs2/{country}/{id}', [ProgramController::class, 'getAllPrograms']);

	Route::match(['get', 'post'], 'moreprogram', [ProgramController::class, 'getMorePrograms']);
	Route::match(['get', 'post'], 'program/{country}/{university}/{id}', [ProgramController::class, 'getProgramDetails']);
	Route::post('getotherfilteredprograms', [ProgramController::class, 'getOtherfilteredPrograms']);
	Route::get('updateprgmslug', [ProgramController::class, 'updateProgramSlug']);

	/**** program ****/

	/**** check eligibility ****/

	Route::match(['get', 'post'], 'programeligibilty', [ProgramController::class, 'checkProgramEligiblity']);

	/**** check eligibility ****/

	/**** university/intsitute ****/

	Route::match(['get', 'post'], 'universities', [UniversityController::class, 'getAllUniversityData']);
	Route::match(['get', 'post'], 'universities/{id}', [UniversityController::class, 'getAllUniversityData']);
	/*Route::match(['get', 'post'], 'universities/{country}/{id}', [UniversityController::class, 'getAllUniversityData']);
	Route::match(['get', 'post'],'/university/{country}/{uname}', [UniversityController::class, 'getUniversityDetails']);
	*/
	Route::match(['post'], 'universities/{country}/{id}', [UniversityController::class, 'getAllUniversityData']);
	Route::match(['get'],'/universities/{country}/{uname}', [UniversityController::class, 'getUniversityDetails']);
	Route::match(['get'],'/universities/{country}/{filtername}/{filterperm}', [UniversityController::class, 'getAllUniversityData']);
	Route::post('getunivfilteredprograms', [UniversityController::class, 'getUniversityfilteredPrograms']);

	/**** university/intsitute ****/

	Route::get('/programsexplore', [MasterController::class, 'getexplorefilter']);
	Route::get('/programsexplorer', [MasterController::class, 'getActiveCountriestest']);

	Route::get('/career', [CareerController::class, 'alljobs']);
	Route::post('/careerfilter', [CareerController::class, 'alljobsFilter']);
	Route::get('/job-detail/{id}', [CareerController::class, 'detailjob']);
	Route::post('/job-form-submit', [CareerController::class, 'jobFormSubmit']); 

	/*Route::get('/study-in-canada', function () {
		return view('study');
	});

	Route::get('/study-in-usa', function () {
		return view('study-in-usa');
	});

	Route::get('/study-in-uk', function () {
		return view('study-in-uk');
	});

	Route::get('/study-in-australia', function () {
		return view('study-in-australia');
	});

	Route::get('/study-in-newzealand', function () {
		return view('study-in-newzealand');
	});
	*/
	
	Route::get('/author', [BlogsController::class, 'authorallblogs']);
	Route::get('/study-in-canada', [MasterController::class, 'studyincanada']); 
	Route::get('/study-in-newzealand', [MasterController::class, 'studyinnewzealand']); 
	Route::get('/study-in-usa', [MasterController::class, 'studyinusa']); 
	Route::get('/study-in-uk', [MasterController::class, 'studyinuk']); 
	Route::get('/study-in-australia', [MasterController::class, 'studyinaustralia']); 
	
	Route::get('/thank', function () {
		return view('thank');
	});

	Route::get('/faq', function () {
		return view('faq');
	});

	Route::get('/privacy-policy', function () {
		return view('privacy');
	});

	Route::get('/disclaimer', function () {
		return view('disclaimer');
	});

	Route::get('/terms-and-conditions', function () {
		return view('terms');
	});
	Route::get('/test', function () {
		return view('test');
	});

	Route::get('/forgot', function () {
		return view('forgot');
	});


	/****Event****/

	Route::get('events', [EventsController::class, 'allEvents']);
	Route::match(['get', 'post'], 'event-reg', [EventsController::class, 'reg']);
	Route::post('event-otp-form-submit', [EventsController::class, 'eventOtpFormSubmit']);
	Route::post('event-otp-resend', [EventsController::class, 'eventResendOtp']);
	Route::get('event-detail/{id}', [EventsController::class, 'eventDetails']);
	//Route::get('similar-events', [EventsController::class, 'similarEvents']);
	Route::post('events-search/{type}', [EventsController::class, 'searchEvents']);
	Route::get('event/{param}', [EventsController::class, 'eventDetails']);
	Route::get('view-pdf', [EventsController::class, 'viewPdf']);
	/****Event****/

	/*contact*/

	Route::post('contact-email', [ContactController::class, 'contact_email'])->name('contact_email');
	Route::post('contact-otp-form-submit', [ContactController::class, 'contactOtpFormSubmit']);
	Route::post('contact-resend', [ContactController::class, 'contactResendOtp']);
	Route::post('contact-institute-submit', [ContactController::class, 'contactInstituteSubmit']);
	Route::post('newsletterformsubmit', [AjaxController::class, 'newsLetterFormSubmit']);

	 
	/*contact*/


	/*blogs*/

	//Route::get('blogs', [BlogsController::class, 'allBlogs']);
	Route::match(['get', 'post'],'blog', [BlogsController::class, 'allBlogs']);
	Route::match(['get', 'post'],'blog/category/{slug}', [BlogsController::class, 'allBlogs']);
	Route::post('categorybyarticle', [BlogsController::class, 'getBlogsByCategory']);
	Route::post('loadmorearticle', [BlogsController::class, 'getMoreBlogs']);
	Route::post('loadauthormorearticle', [BlogsController::class, 'getAuthorMoreBlogs']);
	Route::get('/blog/{slug}', [BlogsController::class, 'getBlogdetails']);
	/*blogs*/

	/**** ajax ****/

	Route::post('store-data', [AjaxController::class, 'leadFormSubmit']);
	Route::post('commone-otp-form-submit', [AjaxController::class, 'commonOtpFormSubmit']);
	Route::post('commone-resend', [AjaxController::class, 'commonResendOtp']);
	Route::post('send-otp', [AjaxController::class, 'sendOtp']);
	Route::get('search-keyword', [AjaxController::class, 'keywordSearch']);
	Route::post('countriesuniversity', [AjaxController::class, 'getCountryUniversity']);
	Route::post('countriesprovince', [AjaxController::class, 'getCountriesProvince']);
	Route::post('countriestutionfee', [AjaxController::class, 'getCountriesTutionfee']);
	Route::post('countrieslevel', [AjaxController::class, 'getCountriesLevel']);
	Route::post('loadsubjects', [AjaxController::class, 'getLoadSubjects']);
	Route::post('loadprovuniversity', [AjaxController::class, 'getLoadProvinceUniversity']);
	Route::post('loadprovtown', [AjaxController::class, 'getLoadProvinceTown']);
	Route::post('loadsearchparam', [AjaxController::class, 'getLoadDisciplineId']);
	Route::post('loadcountryrandomuni', [AjaxController::class, 'getLoadCountryRandomUni']);
	Route::post('loadcountryrandomdisc', [AjaxController::class, 'getCountryRandomDisc']);
	Route::post('loadcheckeligibity', [AjaxController::class, 'checkEligibilty']);
	Route::post('geteducountry', [AjaxController::class, 'loadCountryofEdu']);
	Route::post('getqualificationlevel', [AjaxController::class, 'getQualificationlevel']);
	Route::post('loadgradescheme', [AjaxController::class, 'loadGradeScheme']);
	Route::post('loadgradeaverage', [AjaxController::class, 'loadGradeAverage']);
	Route::post('loadgradeequivalent', [AjaxController::class, 'loadGradeEquivalent']);
	Route::post('loadactivecountries', [AjaxController::class, 'getActiveCountry']);
	Route::post('loadcountriesdisc', [AjaxController::class, 'getCountryDisc']);
	Route::post('loadcountriestest', [AjaxController::class, 'getCountryTest']);
	Route::post('loadcountriestestscore', [AjaxController::class, 'getCountryTestScore']);
	Route::get('resetsession', [AjaxController::class, 'makeSessionReset']);
	Route::post('prgm-shortlist', [AjaxController::class, 'createShortlist']);
	Route::post('prgm-apply-shortlist', [AjaxController::class, 'createApplyShortlist']);
	Route::post('uni-shortlist', [AjaxController::class, 'createUnivShortlist']);
	Route::post('nzflevels', [AjaxController::class, 'getNZFLevel']);
	Route::post('levelsbynzf', [AjaxController::class, 'getLevelByNzf']);

	/**** ajax ****/


	/**** signup/login ****/

	Route::post('/signup', [LoginSignupController::class, 'studentSignupFormSubmit']);
	Route::post('/signup-otp-form', [LoginSignupController::class, 'signupOtpFormSubmit']);
	Route::post('/signup-resend', [LoginSignupController::class, 'signupResendOtp']);
	Route::match(['get', 'post'],'/login', [LoginSignupController::class, 'studentLogin'])->name('login');
	Route::post('/genLoginOtp', [LoginSignupController::class, 'studentLoginOtp'])->name('genloginotp');
	Route::post('/login-resend', [LoginSignupController::class, 'loginResendOtp']);
	Route::post('/otplogin', [LoginSignupController::class, 'studentOtpLogin']);
	Route::post('/genresetpassLink', [LoginSignupController::class, 'resetPassLink']);
	Route::get('/password/reset/{token}', [LoginSignupController::class, 'resetPassword']);
	Route::post('/savepassword', [LoginSignupController::class, 'saveResetPassword']);

	/**** signup/login ****/

	/**** advisor signup/login ****/
	
	Route::match(['get', 'post'],'/advisor-login', [LoginSignupController::class, 'advisorLogin'])->name('advisor');
	
	/**** advisor signup/login ****/

 Route::group(['middleware' => ['auth:webstudent'],'namespace' => '\Student', 'prefix' => 'student'], function () {
    Route::get('dashboard', [StudentController::class, 'dashboard']);
	Route::get('search-program', [StudentController::class, 'program']);
	Route::get('search-university', [StudentUniversityController::class, 'getAllUniversityData']);
	Route::match(['get'],'/universities/{country}/{uname}', [StudentUniversityController::class, 'getUniversityDetails']);
	Route::post('getunivfilteredprograms', [StudentUniversityController::class, 'getUniversityfilteredPrograms']);
	
	Route::get('documents', [StudentController::class, 'documents']);
	Route::get('chat', [StudentController::class, 'chat']);
	Route::get('shortlist', [StudentController::class, 'shortlist']);
	Route::post('prgm-shortlist', [StudentController::class, 'createShortlist']);
	Route::get('prgmShortlist', [StudentController::class, 'prgmShortlist']);
	Route::get('uniShortlist', [StudentController::class, 'uniShortlist']);
	Route::post('uni-shortlist', [StudentController::class, 'createUnivShortlist']);
	Route::get('application', [StudentController::class, 'application']);
	Route::get('apply', [StudentController::class, 'apply']);
	Route::get('my-profile/{id}', [StudentController::class, 'userProfile']);
	Route::get('profile', [StudentController::class, 'userinitial']);
	Route::post('primaryinfosave', [StudentController::class, 'storeStudentPrimaryInfo']);
	Route::post('educationinfosave', [StudentController::class, 'storeStudentEducationInfo']);
	Route::post('testinfosave', [StudentController::class, 'storeStudentTestInfo']);
	Route::post('prefrenceinfosave', [StudentController::class, 'storeStudentPrefInfo']);
	//Route::get('draft', [StudentController::class, 'draft']);
	Route::get('draft', [ApplicationController::class, 'draftApplication']);
	Route::get('visa', [StudentController::class, 'visa']);
	Route::get('session', [StudentController::class, 'session']);
	Route::get('session-history', [StudentController::class, 'sessionHistory']);
	Route::get('program-detail', [StudentController::class, 'programDetail']);
	Route::post('countriesstatelist', [StudentController::class, 'countriesStateList1']);
	Route::get('loadgradescheme', [StudentController::class, 'loadGradeScheme']);
	Route::match(['get', 'post'],'loadgrade/{id}', [StudentController::class, 'loadGradeAverage']);
	
	Route::get('search-keyword', [StudentController::class, 'keywordSearch']);
	
	Route::get('logout', [StudentController::class, 'logOut']);
	
	/**** Programs function On Student Panel - Start ****/
	Route::match(['get', 'post'], 'programeligibilty', [AllProgramController::class, 'checkProgramEligiblity']);
    Route::match(['get', 'post'], 'programs', [AllProgramController::class, 'getAllPrograms']);
    Route::match(['get', 'post'], 'programs/{id}', [AllProgramController::class, 'getAllPrograms']);
    Route::match(['get', 'post'], 'programs/{country}/{id}', [AllProgramController::class, 'getAllPrograms']);
    Route::match(['get', 'post'], 'moreprogram', [AllProgramController::class, 'getMorePrograms']);
    Route::match(['get', 'post'], 'program/{country}/{university}/{id}', [AllProgramController::class, 'getProgramDetails']);
    Route::post('getotherfilteredprograms', [AllProgramController::class, 'getOtherfilteredPrograms']);
    Route::get('updateprgmslug', [AllProgramController::class, 'updateProgramSlug']);
	Route::post('loadsearchparam', [AllProgramController::class, 'getLoadDisciplineId']);
    
	/**** Application function On Student Panel - Start ****/
    Route::post('application-apply', [ApplicationController::class, 'applyApplication']);
    //Route::get('application-draft', [ApplicationController::class, 'draftApplication']);
    Route::get('application-draft', [StudentController::class, 'draft']);
    Route::get('active-applications', [ApplicationController::class, 'allActiveApplication']);
    Route::get('common-application-form/{id}', [ApplicationController::class, 'commonApplicationForm']);
    Route::post('saveccinfo', [ApplicationController::class, 'savedCardInfo']);
    Route::get('viewccinfo', [ApplicationController::class, 'viewCardInfo']);
    Route::get('sendtoadvisor/{id}', [ApplicationController::class, 'sendToAdvisor']);
    Route::get('ajax-active-intake/{id}', [ApplicationController::class, 'ajaxCallIntake']);
    Route::post('ajax-open-appform', [ApplicationController::class, 'ajaxOpenAppForm']);
    Route::get('retained-application/{id}', [ApplicationController::class, 'retainedApplication']);
    
      /**** Documents Route for Student ****/
    Route::post('upload-document', [ApplicationController::class, 'uploadDocument']); //doc upload
    Route::delete('remove-document/{id}', [ApplicationController::class, 'removeDocument']); //remove upload doc
    
    /**** Application function On Student Panel - End ****/
}); 

/* Student Route */

 Route::group(['prefix' => 'admin'], function () {
    Route::get('login', [AdminController::class, 'login'])->name('admin-login');
    Route::post('login', [AdminController::class, 'postLogin']);
    Route::get('logout', [AdminController::class, 'logout'])->name('admin-logout');
    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('admin-dashboard');
    Route::get('manage-events', [ManageEventController::class, 'masterEventList'])->name('master-events');
    
    
    /*Route::group(['middleware' => ['auth:admin'] ], function () {
        Route::get('dashboard', [AdminController::class, 'dashboard']);
        //Route::get('login', [AdminController::class, 'login']);
    }); */
}); 



 /**** Advisor Panel - Start ****/
 Route::post('countriesstate', [AdvisorLeadController::class, 'countriesStateList']);
 Route::post('loadgradeave', [AdvisorLeadController::class, 'loadGradeAverage']);
 Route::post('loadscheme', [AdvisorLeadController::class, 'loadGradeScheme']);
Route::group(['middleware' => ['auth:webadvisor'],'namespace' => '\Advisor', 'prefix' => 'advisor'], function () {
    Route::get('dashboard', [AdvisorController::class, 'dashboard']);
    Route::get('advisor-profile/{id}', [AdvisorController::class, 'getAdvisorProfile']);
    Route::get('advisor-profile-edit/{id}', [AdvisorController::class, 'editAdvisorProfile']);
    Route::match(['get', 'post'],'update-advisor-profile', [AdvisorController::class, 'updateAdvisorProfile']);
    Route::post('upload-profile-pic', [AdvisorController::class, 'uploadProfilePic']);
	
    Route::get('advisor-performance/{id}', [AdvisorController::class, 'advisorPerformance']);
    Route::get('student-pool', [AdvisorController::class, 'advisorStudentPool']);
	
	/*leads*/
    Route::get('advisor-leadlist', [AdvisorLeadController::class, 'leadDashboard']);
    Route::post('addlead', [AdvisorLeadController::class, 'addLead']);
    Route::get('leadprofile/{id}', [AdvisorLeadController::class, 'getLeadprofile']);
	/*leads*/
    Route::get('logout', [AdvisorController::class, 'logout']);  
   
}); 
 /**** Advisor Panel - End ****/
 
 
Route::get('/route-cache', function() {
     $exitCode = Artisan::call('route:clear');
     return 'Routes cache cleared';
 });
// Clear application cache:
Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return 'Application cache has been cleared';
});

//Clear config cache:
Route::get('/config-cache', function() {
 	Artisan::call('config:cache');
 	return 'Config cache has been cleared';
}); 

// Clear view cache:
Route::get('/view-clear', function() {
    Artisan::call('view:clear');
    return 'View cache has been cleared';
});


  include_once('testprepweb.php');

Route::get('/storages', function(){
    \Artisan::call('storage:link');
    return "Se han vinculado las imágenes";
});
