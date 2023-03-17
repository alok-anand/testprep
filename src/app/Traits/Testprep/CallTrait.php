<?php

namespace App\Traits\Testprep;

use Illuminate\Support\Facades\Auth;
use App\Models\Testprep\Enquiry;

use DB;

trait CallTrait
{
	public function api_conf()
	{
		$api_conf = array();
		$api_conf['call_url']= 'https://kommuno.com/v1/kcrm/schedule/detail';
		$api_conf['accountSid'] = 'IND-BLR-WRINGG';
		$api_conf['smeId'] = 10001036;
		$api_conf['pilotNumber'] = '+918035018945';
		$api_conf['callMode'] = 1;
		$api_conf['from'] = '+918035018945';
		$api_conf['countryCode'] = 'IND';
		return $api_conf;
	}

	public function call($telephone)
	{
		$data['phone'] = $telephone;
			$newEnquiry = new Enquiry();
			$newEnquiry->new_enquiry($data,'counselling-form');
			die('here');
		//$user = Auth::guard('webstudent')->user();
// debug($_SESSION);
// die;
	//	global $dbh;
		try{
		$api_conf = $this->api_conf();
		//echo  $this->Auth->user()['telephone']; 

$data = array (
				//'Authorization' => $api_conf['token'],
				'accountSid' => $api_conf['accountSid'],
				'agentGroup' => 1,
				'agentNumber' => '+918968885533',
				'callMode' => $api_conf['callMode'],
				'callPriority' => 22,
				'customDtmf' => 0,
				'customDtmfFlag' => 0,
				'from' => $api_conf['pilotNumber'],
				'liveEvent' => '0',
				'liveEventFlag' => 0,
				'mediaFileFlag' => 0,
				'mediaFileId' => '0',
				'nameFileFlag' => 0,
				'nameFileId' => '0',
				'optionalField' => '0',
				'pilotNumber' => $api_conf['pilotNumber'],
				'recordingFlag' => 1,
				'scheduleDateTime' => '2022-05-25T12:57:19',
				'sessionId' => 'mpr'.uniqid() ,
				'smeId' => $api_conf['smeId'],
				'timeLimit' => 0,
				'countryCode'=> $api_conf['countryCode'],
				'to' => $telephone
			);


$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://kommuno.com/v1/kcrm/schedule/detail',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => json_encode($data),

  CURLOPT_HTTPHEADER => array(
    'token: MjAyMjkxMw==ee',
    'accesskey: eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VybmFtZSI6IjIwMDAyMDA0IiwidXNlcl90b2tlbiI6ImV5SmhiR2NpT2lKSVV6STFOaUlzSW5SNWNDSTZJa3BYVkNKOS5leUoxYzJWeWJtRnRaU0k2SWpJd01EQXlNREEwSWl3aVVrOU1SU0k2SWtOc2FXVnVkQ0lzSW5WelpYSmZjbTlzWlY5cFpDSTZOU3dpYVdGMElqb3hOall6TVRRek56RXlMQ0psZUhBaU9qRTJOak14TlRBNU1USjkua2FMU1F1TE1BcHExYTVadTk3R05EcUc4VG5rOG83QjdwLWxLbGhVc3B2RSIsImlhdCI6MTY2MzE0NDAyNSwiZXhwIjoxNjc4Njk2MDI1fQ.jSoJ1r8lNqg4KB91E_l8OA47N3nXTgNaj2DSWc6mmmo',
    'accesstoken: eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VybmFtZSI6IjIwMDAyMDA0IiwiUk9MRSI6IkNsaWVudCIsInVzZXJfcm9sZV9pZCI6NSwiaWF0IjoxNjYzMTQzNzEyLCJleHAiOjE2NjMxNTA5MTJ9.kaLSQuLMApq1a5Zu97GNDqG8Tnk8o7B7p-lKlhUspvE',
    'Content-Type: application/json'
  ),
  // CURLOPT_HTTPHEADER => array(
  //   'token: MjAyMjkxMw==ee',
  //   'accesskey: eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VybmFtZSI6IjEwMDAxMDM2IiwidXNlcl90b2tlbiI6ImV5SmhiR2NpT2lKSVV6STFOaUlzSW5SNWNDSTZJa3BYVkNKOS5leUoxYzJWeWJtRnRaU0k2SWpFd01EQXhNRE0ySWl3aVVrOU1SU0k2SWtOc2FXVnVkQ0lzSW5WelpYSmZjbTlzWlY5cFpDSTZOVElzSW1saGRDSTZNVFkyTXpVM056QTFOeXdpWlhod0lqb3hOall6TlRnME1qVTNmUS4xZFo1cEktQmNnLXczSGE0WTN2TlpDZXJkdzAtSW9lMWxucVNZRTZMLTUwIiwiaWF0IjoxNjYzNTc3MDkzLCJleHAiOjE2OTUxMTMwOTN9.q3dVWed3TZeTXK-18k8JoW0s_t_L-1GVFA671zfTgiM',
  //   'accesstoken: eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VybmFtZSI6IjEwMDAxMDM2IiwiUk9MRSI6IkNsaWVudCIsInVzZXJfcm9sZV9pZCI6NTIsImlhdCI6MTY2MzY2MDUwMiwiZXhwIjoxNjYzNjY3NzAyfQ.t52Z1FB9qIyiWbqdDzSApzIUknvIenstjzW0cdJFfhw',
  //   'Content-Type: application/json'
  // ),
)); 
			$response = curl_exec($curl);
			$message = '';
			$data['phone'] = $telephone;
			$newEnquiry = new Enuiry();
			$newEnquiry->new_enquiry($data,'counselling-form');
			return $response;
		// 	if(!empty($response))
		// 	{ 
		// // 		 $query = "INSERT INTO calls (student_id,telephone,response)
        // //         VALUES (".$_SESSION['user_datails']->id.",".$_SESSION['user_datails']->mobile.",'".$response."')";
                  
        // // $st = $dbh->prepare($query);
        // // $st->execute();
        // // $post_id = $dbh->lastInsertId();
        // if(!empty($post_id))
        // {
        //      $return['error'] = 0;
        // 	 $return['message'] = "Call scheduled successfully, our agent will reach out to you shorly"; 

            
        //  }else
        //  {
        //      $return['error'] = 1;
       	// 	 $return['message'] = "Unable to save";  
        //  }
		// }
		// else{
		// 	$return['error'] = 1;
       	// 	 $return['message'] = "Unable to recieve Response";  
        //  }
		
		   
	   } catch (Exception $ex){
		   // $this->message = $ex->getMessage();
		   // $this->code = $ex->getCode(); 

	   }
	//    // if($errorrLogs)
	//    // { 
	// // 	   $error = array();
	// // 	   $error['api_name'] = 'Call/schedule/detail';
	// // 	   $error['api_request'] = json_encode($data);
	// // 	   $error['api_response'] = $this->message;
	// // 	   $this->save_logs($error);
	// // 	   echo $this->message;
	// // 	   return false;
	//    // }
	//	return $return;
//	}
	
	
}
    // public function getAllLatestArticles($num)
    // {
	// 	$this->blog = new Blogs;
    //     $blogs=$this->blog->where([['status',1],['is_deleted',0]])->where('aslug','!=','n-a')->orderBy('updated_at', 'DESC')->take($num)->get();
	// 	if(!empty($blogs) && $blogs->count() > 0){
	// 		foreach($blogs as $blog){
	// 			$catname = array();
	// 			if($blog->acat != '' ){
	// 				$b_cat   = explode(',', $blog->acat);  
	// 				$this->blogcategory = new Blogscategory;					
	// 				$cats = $this->blogcategory->whereIn('cat_id', $b_cat) 
	// 						->get(['cat_name']);
	// 				if(!empty($cats)){
						
	// 					foreach($cats as $cat ){
	// 						array_push($catname,$cat->cat_name);
	// 					}
						
	// 					//$catname[]= $cats[0]->cat_name;
	// 				}
	// 			}
	// 			$blog->cat_name = $catname;
	// 			//$blog->adescr = substr_replace(preg_replace("/<img[^>]+\>/i", "  ", html_entity_decode($blog->adescr,ENT_QUOTES)),'...',150);
	// 			$blog->adescr = substr(strip_tags(html_entity_decode($blog->adescr,ENT_QUOTES),ENT_QUOTES),0,150).'...';
	// 			$blog->updated = date('d-m-Y',strtotime($blog->updated_at));
	// 			if($blog->f_image != '' && !empty($blog->f_image)){
	// 				$blog->thumb_image = $blog->f_image;
	// 			}else{
					
	// 				$blog->thumb_image = 'default-thumbnail.jpg';
	// 			}
				
	// 		}
			
	// 		$blogs_section =  view('blogs.blog-section',['blogs'=> $blogs->toArray()])->render();
	// 		return $blogs_section;
	// 	}
    // }
	// public function getAllLatestArticlesByCat($num,$cid)
    // {
	// 	$this->blog = new Blogs;
    //     $blogs=$this->blog->where([['status',1],['is_deleted',0]])->where('aslug','!=','n-a')->where('c_id',$cid)->orderBy('a_id', 'DESC')->take($num)->get();
	// 	if(!empty($blogs) && $blogs->count() > 0){
	// 		foreach($blogs as $blog){
	// 			$catname = array();
	// 			if($blog->acat != '' ){
	// 				$b_cat   = explode(',', $blog->acat);  
	// 				$this->blogcategory = new Blogscategory;					
	// 				$cats = $this->blogcategory->whereIn('cat_id', $b_cat) 
	// 						->get(['cat_name']);
	// 				if(!empty($cats)){
						
	// 					foreach($cats as $cat ){
	// 						array_push($catname,$cat->cat_name);
	// 					}
						
	// 					//$catname[]= $cats[0]->cat_name;
	// 				}
	// 			}
	// 			$blog->cat_name = $catname;
	// 			//$blog->adescr = substr_replace(preg_replace("/<img[^>]+\>/i", "  ", html_entity_decode($blog->adescr,ENT_QUOTES)),'...',150);
	// 			$blog->adescr = substr(strip_tags(html_entity_decode($blog->adescr,ENT_QUOTES),ENT_QUOTES),0,150).'...';
	// 			$blog->updated = date('d-m-Y',strtotime($blog->updated_at));
	// 			if($blog->f_image != ''){
	// 				$blog->thumb_image = $blog->f_image;
	// 			}else{
					
	// 				$blog->thumb_image = 'default-thumbnail.jpg';
	// 			}
				
	// 		}

	// 		$blogs_section =  view('blogs.category-blog-section',['blogs'=> $blogs->toArray()])->render();
	// 		return $blogs_section;
	// 	}
    // }
	
	// public function getAllLatestArticlesByCat1($id,$catids)
    // {
	// 	DB::enableQuerylog();
		
	// 	$this->blog = new Blogs;
		
    //     $blogs=$this->blog->where([['status',1],['is_deleted',0]])->where('aslug','!=','n-a')->whereIn('acat', $catids)->where('a_id','!=',$id)->orderBy('updated_at', 'DESC')->take(20)->get();
       
	// 	if(!empty($blogs)){
			
	// 		foreach($blogs as $blog){
	// 			$catname = array();
	// 			if($blog->acat != '' ){
	// 				$b_cat   = explode(',', $blog->acat);  
	// 				$this->blogcategory = new Blogscategory;					
	// 				$cats = $this->blogcategory->whereIn('cat_id', $b_cat) 
	// 						->get(['cat_name']);
	// 				if(!empty($cats)){
						
	// 					foreach($cats as $cat ){
	// 						array_push($catname,$cat->cat_name);
	// 					}
						
	// 					//$catname[]= $cats[0]->cat_name;
	// 				}
	// 			}
	// 			$blog->cat_name = $catname;
	// 			//$blog->adescr = substr_replace(preg_replace("/<img[^>]+\>/i", "  ", html_entity_decode($blog->adescr,ENT_QUOTES)),'...',150);
	// 			$blog->adescr = substr(strip_tags(html_entity_decode($blog->adescr,ENT_QUOTES),ENT_QUOTES),0,150).'...';
	// 			$blog->updated = date('d-m-Y',strtotime($blog->updated_at));
	// 			if($blog->f_image != ''){
	// 				$blog->thumb_image = $blog->f_image;
	// 			}else{
					
	// 				$blog->thumb_image = 'default-thumbnail.jpg';
	// 			}
				
	// 		}
			
	// 		//dd($bgdata);
	// 		$blogs_section =  view('blogs.related-category-blog-section',['blogs'=> $blogs->toArray()])->render();
	// 		return $blogs_section;
	// 	}
    // }
	
	
	
}