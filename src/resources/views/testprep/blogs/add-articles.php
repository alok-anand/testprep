<?php
// echo '<pre>';
// print_r($_REQUEST); exit;
// @session_start();
// session_cache_expire( 1200 );
@session_start(); // NEVER FORGET TO START THE SESSION!!!
// $inactive = 1200;
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
$cname=htmlentities(stripslashes($_REQUEST['title']),ENT_QUOTES);
$pic=$_FILES['pic'][name];
$mess = htmlentities(stripslashes($_REQUEST['message']),ENT_QUOTES);
$asummery = htmlentities(stripslashes($_REQUEST['asummery']),ENT_QUOTES);
$cat=$_REQUEST['ch'];
$faqtitle=htmlentities(stripslashes($_REQUEST['faqtitle']),ENT_QUOTES);

$tag=$_REQUEST['article_tags'];

$site = $_REQUEST['site'];
$author_id = $_REQUEST['author_id'];
$status = $_REQUEST['status'];
$meta_title     = htmlentities(stripslashes($_REQUEST['meta_title']),ENT_QUOTES);
$meta_message   = htmlentities(stripslashes($_REQUEST['meta_message']),ENT_QUOTES);
$meta_keyword   = htmlentities(stripslashes($_REQUEST['meta_keyword']),ENT_QUOTES);
/* Check Slug */
$slug=trim($_REQUEST['slug']);
$slug=preg_replace('/[^a-zA-Z0-9_ -]/s','',trim($slug));
$slug=str_replace(' ', '-', trim($slug));
$com="select * from articles where trim(`aslug`) = '".$slug."'";
$com_r = mysqli_query($cn, $com);
$atitle=strtolower($slug);
if(mysqli_num_rows($com_r) > 0)
{
	$atitle=strtolower($slug).'-'.mysqli_num_rows($com_r);
}	
/* Check Slug */
if(isset($_REQUEST['featured'])){
    $featured = $_REQUEST['featured'];
}else{
    $featured = 0;
}

// $scat=implode(",",$cat);
$scat=$cat;
$stag=implode(",",$tag);
foreach($_POST['con'] as $val)
{
	$con .= $val.",";
}
$con = substr($con, 0, -1);

if($pic=="")
{
//$pic="nopic.jpg";,udate=NOW(),asummery='$asummery'
$com = "insert into articles(atitle,author_id,adescr,acat,atag,c_id, site_type, meta_title, meta_desc, meta_keyword,aslug,asummery,adate,status,featured,trending_link,faqtitle) values('$cname','$author_id','$mess','$scat','$stag','$con', '$site', '$meta_title', '$meta_message', '$meta_keyword','$atitle','$asummery',NOW(),'$status','$featured','$trending_link','$faqtitle')";

}
else{
$rand=rand(100,9999);
$f2=str_replace(" ","-",$cname)."-".$rand.$pic;
$f2=$rand.$pic;
$folder_path = "uploads/blogs/_thumbs/";
$folder_path2 = "uploads/blogs/images/";

/* $folder_path1 = "../pe/uploads/_thumbs/";
$folder_path3 = "../pe/uploads/images/"; */

blog_resize($_FILES['pic']['tmp_name'],$f2,$folder_path);
blog_resize_big($_FILES['pic']['tmp_name'],$f2,$folder_path2);

/* blog_resize($_FILES['pic']['tmp_name'],$f2,$folder_path1);
blog_resize_big($_FILES['pic']['tmp_name'],$f2,$folder_path3); */

$pic=$f2;
$com="insert into articles(atitle,adescr,f_image,acat,atag,c_id, site_type, meta_title, meta_desc, meta_keyword,aslug,asummery,trending_link,featured,adate,faqtitle )values('$cname','$mess','$pic','$scat','$stag','$con', '$site', '$meta_title', '$meta_message', '$meta_keyword','$atitle','$asummery',$trending_link,$featured,NOW(),'$faqtitle')";
}
$qr=mysqli_query($cn,$com) or die(mysqli_error($cn));
$last_id = mysqli_insert_id($cn);
if(!empty($_REQUEST['article_tags'])){
   foreach($_POST['article_tags'] as $tagval)
    {
        mysqli_query($cn,"insert into blog_tags_associate(blog_id,tag_id)values($last_id,$tagval)") or die(mysqli_error($cn));
    }
    
}
$msg=base64_encode('Article Added Successfully!');
header("location:manage_articles.php?msg=$msg");
?>