<?php

namespace App\Http\Controllers\Testprep;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use App\Models\Testprep\CmsPage;
use App\Models\Testprep\Pagemeta;
use App\Models\Testprep\RecordedLecturesLink;

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\DB;

use App\Traits\BlogTrait;



class ExamsController extends Controller
{
   
    //private static $apiContext = '';
    use BlogTrait;


   // private static $apiContext = '';

    // public function index($type)
    // {
    //     $cms_page =  $this->getPageTabs($type);

    //     $examblade = 'testprep.'.'exams-'.$type;

    //     return view($examblade,compact('cms_page'));
    //     //  $q="SELECT atitle,slug FROM ".$db_prefix."cms_page as p
    //     //  LEFT JOIN pagemeta as pm ON (p.page_id=pm.id)
    //     //  where p.type = '$slug'  and pm.active = 1 order by p.displayorder";
    //     // $st = $dbh->prepare($q);
    //     // $st->execute();
    //     // return $this->pageinfo = $st->fetchAll(PDO::FETCH_ASSOC);

    //     //$cms = DB::connection('mysql_testprep')->select('Select * from cms_page');

    //      // $cms = CmsPage::find(1)->getPagemeta;
    //     //   $cms = CmsPage::with('getPagemeta')->get();

    //     //   return $cms;
    //         // echo('<pre>');
    //         // dd($cms);
    //         // die;

    //     // DB::enableQueryLog();
    //     // $cmspage =  Cmspage::with(['Pagemeta']);
    //     // dd(DB::getQueryLog());

    //     // $cmsPage = CmsPage::Select(
    //     //                // DB::Raw('distinct(master_university.u_id)'),
    //     //                 DB::Raw('atitle'),
    //     //                 DB::Raw('slug'),
    //     //                )->where('cms_page.active',1)->join('pagemeta', 'pagemeta.id','cms_page.page_id')->where(function ($query) use ($type) {
    //     // $query->where('cms_page.type', '=', $type);
    //     // })->orderBy('cms_page.displayorder')->toArray();


    //     // dd($cmsPage);
    //     // $query = DB::getQueryLog();
    //     // $query = end($query);
    //     // dd($query);

    //     // echo('<pre>');
    //     // foreach($cmsPage as $cmsPage)
    //     // {
    //     //     print_r($cmsPage);
    //     //     //echo $cmsPage->cms_page->atitle;
    //     // }
    //    // dd($cmsPage);
    //     // $univDatascholar= $univ::Select(
    //     //                 DB::Raw('distinct(master_university.u_id)'),
    //     //                 DB::Raw('master_university.*'),
    //     //                 DB::Raw('c_name'),
    //     //                 DB::Raw('p_name'),
    //     //                 DB::Raw('banner_name'))
    //     //             ->join('uni_banner', 'u_id','uni_banner.banner_uni_id')
    //     //             ->Join('country', 'u_c_id','country.c_id')
    //     //             ->Join('master_prgm', 'master_prgm.prgm_uni_id', 'u_id')
    //     //             ->Join('master_level','master_prgm.prgm_level_id',  'master_level.level_id')
    //     //             ->leftJoin('province', 'u_p_id','province.p_id')
    //     //             ->where([['uni_status', 'active'],['country.status', 'active'],['master_prgm.status', 'active']])
    //     //             ->whereRaw("FIND_IN_SET(?, u_listing_type)", 'Express')
    //     //             ->whereRaw("FIND_IN_SET(?, prgm_listing_type)", 'Express');
    //     //     $univDatascholar->where('u_c_id',$c_id);
    //     //     $univDatascholar->where('uni_scholarships','!=','');
    //     //     $univDatascholar->whereNotNull('uni_scholarships');
    //     // echo('<pre>');
    //     // print_r($cmsPage);
    //     // die;

    //     //  $q="SELECT atitle,slug FROM ".$db_prefix."cms_page as p
    //     //  LEFT JOIN pagemeta as pm ON (p.page_id=pm.id)
    //     //  where p.type = '$slug'  and pm.active = 1 order by p.displayorder";
    //     // $st = $dbh->prepare($q);
    //     // $st->execute();
    //     // return $this->pageinfo = $st->fetchAll(PDO::FETCH_ASSOC);


    // }


    public function index($type,$palias ='')
    {
       if($palias==''){$palias ='about-'.strtolower($type); }
       //dd($palias);
        $cmsPage =   new CmsPage();
        $getPagetabs =   $cmsPage->getPagetabs($type);
        //dd($getPagetabs);
        $getPageInfo =   $cmsPage->getPageInfo($palias);
        $getJsonTestData =   $this->getJsonTestData();
        $blog_section =  $this->getAllLatestArticles(20);
        $left_blog_section  =  $this->gettestprepAllLatestArticlesByCat(20,6);
        $Pagemeta = new Pagemeta();
        $pagemeta =  $Pagemeta->getpagemeta($palias);
        //$examblade = 'testprep.'.'exams-'.$type;


       $breadcrumSchema =  $this->breadcrumSchema();



        return view('testprep.exams',compact('getPagetabs','getPageInfo','palias','getJsonTestData','blog_section','pagemeta','breadcrumSchema','left_blog_section'));
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
    "item": "'.url('/testprep').'"  
  },{
    "@type": "ListItem", 
    "position": 2, 
    "name": "IELTS",
    "item": "'.url('/testprep/exams/ielts').'" 
  }]
}
</script>';

    }
    public function getJsonTestData()
    {
        $api_name = 'test_seriese';
        $headers = array(
            'subTest' => '',
            'token' =>'c32ca0d84c6f062436efd11b1d76baa4'

		);
        $resp = json_decode($this->callgetApi($api_name,$headers));

      $result  = $resp->error_message->data;

       //dd($resp);
       //die;
        foreach($result as $key => $value){
            $apiname = "test_seriese_cat";
            $tsid = $value->test_seriese_id;
            $head = array(
            'tsid' => $tsid,
            'token' =>'c32ca0d84c6f062436efd11b1d76baa4'
            );
        $cat = json_decode($this->callgetApi($apiname,$head));
        foreach($cat->error_message->data as $catkey => $catvalue){
            $catvalue->tsid =$value->test_seriese_id ;
                 if($catvalue->category_name == 'Listening'){

                     $listening[] = $catvalue;

                 }
                 if($catvalue->category_name == 'Reading'){
                     $reading[] = $catvalue;
                 }
                 if($catvalue->category_name == 'Writing'){
                     $writing[] = $catvalue;
                 }
                 if($catvalue->category_name == 'Speaking'){
                     $speaking[] = $catvalue;
                 }

                }


    }
    return ['listening'=> $listening,'reading'=> $reading,'writing'=> $writing,'speaking'=> $speaking];
    // print_r($listening);
    //     die();


        //         $token = $user_detail->token;
//     if(isset($user_detail->token)){
//         $token = $user_detail->token;
//     }else{
//       // $token = '51c64c338152bae0bac3167ff85d706a';
//        $token = 'c32ca0d84c6f062436efd11b1d76baa4';
//     }

// //	echo $token ;
// 	 $apiname = "test_seriese";
// 		$headers = array(
// 			"Accept: application/json",
// 			"subTest: ",
// 			"token: $token ",

// 		);
// 		$resp = json_decode(callgetApi($apiname,$headers));
// 		$result = $resp->error_message->data;

        // $response = Http::dd()->get('http://example.com');
        // dd($response->body());
    }



    protected function callgetApi($apiname,$headers)
    {

        $url = "https://www.masterprep.in/admtest/newV1/MP-API-V7/".$apiname;

        return  $response =  Http::withHeaders($headers)->acceptJson()->get($url);


        // $apiname = "test_seriese";

    //     $url = "https://www.masterprep.in/admtest/newV1/MP-API-V7/".$apiname;

    //  return  $response =  Http::withHeaders([
    //         'subTest' => '',
    //         'token' =>'c32ca0d84c6f062436efd11b1d76baa4'
    //     ])->acceptJson()->get($url);

        //dd($response->body());
    }


    // function callgetApi($apiname,$header,$data = false ){
    //     $url = "https://www.masterprep.in/admtest/newV1/MP-API-V7/".$apiname;
    // //	$url = "https://demo1.masterprep.in/admtest/newV1/MP-API-V7/".$apiname;

    //     $curl = curl_init($url);
    //     curl_setopt($curl, CURLOPT_URL, $url);
    //     curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    //     curl_setopt($curl, CURLOPT_HTTPHEADER, $header);

    //     if($data){
    //         curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
    //     }
    //     //for debug only!
    //     curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    //     curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

    //     $resp = curl_exec($curl);
    //     if($e = curl_error($curl)){
    //          echo $e;
    //     }else{
    //     //	print_r($resp);
    //         $decodes = json_decode($resp);

    //         //print_r($decodes->error_message->data);
    //     //
    //     //print_r($decodes->error_message->data);
    //     }
    //     curl_close($curl);
    //     return $resp;
    // }

    // function callputApi($apiname,$headers,$data = false ){
    //    // echo '<pre>';
    //   // print_r($data); exit;
    //     $url = "https://www.masterprep.in/admtest/newV1/MP-API-V7/".$apiname;

    //     $ch = curl_init();
    //     curl_setopt($ch, CURLOPT_URL, $url);
    //     curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
    //     curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    //     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    //     curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    //     $result = curl_exec($ch);
    //     if($e = curl_error($ch)){
    //         $result =  $e;
    //     }else{
    //     //	$decodes = json_decode($resp);

    //         //print_r($decodes->error_message->data)
    //     }

    //    // $result = json_decode($result);
    //     curl_close($ch);


    //     return $result;
    // }


}
