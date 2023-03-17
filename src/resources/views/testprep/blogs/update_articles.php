<?php

// @session_start();

// session_cache_expire( 1200 );

@session_start(); // NEVER FORGET TO START THE SESSION!!!

// $inactive = 12000;

// if(isset($_SESSION['start']) ) {

// $session_life = time() - $_SESSION['start'];

// if($session_life > $inactive){

// @session_destroy();

// header("Location:login.php");

// }

// }

$_SESSION['start'] = time();

if(!isset($_SESSION['']) || $_SESSION['progadm']=="")

{ 

header('location:login.php');

}

else

{

@session_start();



$ses=htmlentities(strip_tags(htmlspecialchars($_SESSION['progadm'])));

}

include"settings.php";

include "config.php";

include"functions.php";

$aid=$_REQUEST['aid'];
$author_id=$_REQUEST['author_id'];
$faqtitle=htmlentities(stripslashes($_REQUEST['faqtitle']),ENT_QUOTES);
$cname=htmlentities(stripslashes($_REQUEST['title']),ENT_QUOTES);

$pic=$_FILES['pic'][name];

$mess = htmlentities(stripslashes($_REQUEST['message']),ENT_QUOTES);
$asummery = htmlentities(stripslashes($_REQUEST['asummery']),ENT_QUOTES);

$meta_title     = htmlentities(stripslashes($_REQUEST['meta_title']),ENT_QUOTES);
$meta_message   = htmlentities(stripslashes($_REQUEST['meta_message']),ENT_QUOTES);
$meta_keyword   = htmlentities(stripslashes($_REQUEST['meta_keyword']),ENT_QUOTES);
$status=$_REQUEST['status'];
$trending_link = $_REQUEST['trending_link'];

/* Check Slug */
$slug=trim($_REQUEST['slug']);
// $slug=preg_replace('/[^a-zA-Z0-9_ -]/s','',trim($slug));
// $slug=str_replace(' ', '-', trim($slug));
// $com="select * from articles where trim(`aslug`) = '".$slug."'";
// $com_r = mysqli_query($cn, $com);
// $atitle=strtolower($slug);
// if(mysqli_num_rows($com_r) > 0)
// {
	// $atitle=strtolower($slug).'-'.mysqli_num_rows($com_r);
// }	
/* Check Slug */

$atitle=strtolower($slug);





$cat=$_REQUEST['ch'];

//$scat=implode(",",$cat);
$scat=$cat;
$tag=$_REQUEST['article_tags'];
$stag=implode(",",$tag);
$site = $_REQUEST['site'];

foreach($_POST['con'] as $val)

{

	$country_id .= $val.",";

}

$country_id = substr($country_id, 0, -1);
if(isset($_REQUEST['featured'])){
    $featured = $_REQUEST['featured'];
}else{
    $featured = 0;
}


if($pic=="")

{

//$pic="nopic.jpg";

$com="update articles set atitle='$cname',author_id='$author_id',adescr='$mess',acat='$scat',atag='$stag', c_id = '$country_id', site_type = '$site', meta_title = '$meta_title', meta_desc ='$meta_message', meta_keyword = '$meta_keyword',aslug='$atitle',status='$status',featured='$featured',trending_link='$trending_link',udate=NOW(),asummery='$asummery', faqtitle='$faqtitle' where a_id='$aid'";

}

else{

$rand=rand(100,9999);

$f2=str_replace(" ","-",$cname)."-".$rand.$pic;

$f2=$rand.$pic;
$folder_path = "uploads/blogs/_thumbs/";
$folder_path2 = "uploads/blogs/images/";
blog_resize($_FILES['pic']['tmp_name'],$f2,$folder_path);
blog_resize_big($_FILES['pic']['tmp_name'],$f2,$folder_path2);
$pic=$f2;

$com="update articles set atitle='$cname',author_id='$author_id',adescr='$mess',acat='$scat',atag='$stag',f_image='$pic', c_id = '$country_id', site_type = '$site', meta_title = '$meta_title', meta_desc ='$meta_message', meta_keyword = '$meta_keyword',aslug='$atitle',status='$status',featured='$featured',trending_link='$trending_link',udate=NOW(),asummery='$asummery', faqtitle='$faqtitle' where a_id='$aid'";



}

$qr=mysqli_query($cn,$com) or die(mysqli_error($cn));

$msg=base64_encode('Article Updated Successfully!');

header("location:manage_articles.php?msg=$msg");

?>