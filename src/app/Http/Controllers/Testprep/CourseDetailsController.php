<?php

namespace App\Http\Controllers\Testprep;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Testprep\ExamsController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use App\Traits\BlogTrait;

use Illuminate\Support\Facades\Route;

use App\Models\Testprep\CourseMaster;
use App\Models\Testprep\Pagemeta;
use App\Models\Testprep\CourseCurriculum;



class CourseDetailsController extends Controller
{
    use BlogTrait;
    //private static $apiContext = '';

    public function index($alias)
    {
        $course_details = CourseMaster::where('course_master.alias',$alias)->first();


        //$course_cc = CourseCurriculum::where('status',1)->where('course_id',$course_details->id)->where('parent_id',0)->with('curriculum')->where('course_id',$course_details->id)->get();

        $course_cc_p = CourseCurriculum::where('status',1)
                    ->where('course_id',$course_details->id)
                    ->where('parent_id',0)->get();

                   // dd($course_cc_p->toArray());
                   //dd($course_cc_p->pluck('id')->toArray());
        $course_cc = CourseCurriculum::whereIn('parent_id',$course_cc_p->pluck('id'))
        ->where('course_id',$course_details->id)->where('status',1)
        ->get();
        //dd($course_cc->toArray());
        // $course_cc = array();
        // foreach($course_cc_p->toArray() as $course_cc_arr )
        // {
        //     $course_cc[] = CourseCurriculum::where('status',1)
        //     ->where('course_id',$course_details->id)
        //     ->where('parent_id',$course_cc_arr['parent_id'])->with('course')->get();
        // }
        //dd($course_cc_p);
        $blog_section =  $this->getAllLatestArticles(20);

        $examsController = new ExamsController;

        $getJsonTestData = $examsController->getJsonTestData();

        $Pagemeta = new Pagemeta();

        $pagemeta =  $Pagemeta->getpagemeta($alias);

        $breadcrumSchema = $this->breadcrumSchema();

         return view('testprep.course-details',['blog_section'=> $blog_section,'course_details'=>  $course_details,'pagemeta'=>$pagemeta,'breadcrumSchema'=>$breadcrumSchema,'course_cc_p' =>$course_cc_p,'course_cc' =>$course_cc,'getJsonTestData' =>$getJsonTestData]);
    }
    protected function breadcrumSchema()
    {
        return '<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "BreadcrumbList",
  "itemListElement": [{
    "@type": "ListItem",
    "position": 1,
    "name": "Home",
    "item": "https://demo.iapply.io/testprep"
  },{
    "@type": "ListItem",
    "position": 2,
    "name": "COURSE-DETAIL",
    "item": "https://demo.iapply.io/testprep/course-detail/10-days-crash-course"
  }]
}
</script>';

    }


}
