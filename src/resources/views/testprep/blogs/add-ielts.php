<?php
//  echo '<pre>';
//  print_r($_REQUEST); //exit;
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


$atitle=htmlentities(stripslashes($_REQUEST['atitle']),ENT_QUOTES);
$slug=$_REQUEST['slug'];
$scriptname=$_REQUEST['scriptname'];
$content = htmlentities(stripslashes($_REQUEST['content']),ENT_QUOTES);
$shortdescription = htmlentities(stripslashes($_REQUEST['shortdescription']),ENT_QUOTES);
$h1tag=htmlentities(stripslashes($_REQUEST['h1tag']),ENT_QUOTES);
$faqtitle=htmlentities(stripslashes($_REQUEST['faqtitle']),ENT_QUOTES);
$type=$_REQUEST['type'];
$status = $_REQUEST['status'];
$metatitle     = htmlentities(stripslashes($_REQUEST['metatitle']),ENT_QUOTES);
$metadescription   = htmlentities(stripslashes($_REQUEST['metadescription']),ENT_QUOTES);
$metakeyword   = htmlentities(stripslashes($_REQUEST['metakeyword']),ENT_QUOTES);
/* Check Slug */
$slug=trim($_REQUEST['slug']);
$slug=str_replace('/', '_', trim($slug));
$slug=preg_replace('/[^a-zA-Z0-9_ -]/s','',trim($slug));
$slug=str_replace(' ', '-', trim($slug));
$com="select * from pagemeta where trim(`slug`) = '".$slug."'";
$com_r = mysqli_query($cn, $com);
// $atitle=strtolower($atitle);
// if(mysqli_num_rows($com_r) > 0)
// {
// 	$atitle=strtolower($slug).'-'.mysqli_num_rows($com_r);
// }	
/* Check Slug */

// $scat=implode(",",$cat);
$scat=$cat;
foreach($_POST['con'] as $val)
{
	$con .= $val.",";
}
$con = substr($con, 0, -1);




try{
    //$pic="nopic.jpg";,udate=NOW(),asummery='$asummery'
     $com = "INSERT INTO `pagemeta` (`slug`, `scriptname`, `atitle`, `metatitle`, `metadescription`, `metakeywords`, `active`,`faqtitle`) VALUES ('$slug', '$scriptname', '$atitle', '$metatitle','$metadescription', '$metakeyword', '$status','$faqtitle')";
    
    //echo $com = "insert into pagemeta(atitle,author_id,adescr,acat,atag,c_id, site_type, meta_title, meta_desc, meta_keyword,aslug,asummery,adate,status,featured) values('$cname','$author_id','$mess','$scat','$stag','$con', '$site', '$meta_title', '$meta_message', '$meta_keyword','$atitle','$asummery',NOW(),'$status',$featured)";
    
    
    $qr=mysqli_query($cn,$com) or die(mysqli_error($cn));
    $last_id = mysqli_insert_id($cn);
    
    
     $pq = "INSERT INTO `cms_page` (`type`, `content`, `page_id`, `active`, `h1tag`, `shortdescription`) VALUES ('$type', '$content', '$last_id', '$status', '$h1tag', '$shortdescription')";
    $qr=mysqli_query($cn,$pq) or die(mysqli_error($cn));

$msg=base64_encode('PageContent Added Successfully!');
}catch(Exception $exception){
    $msg=base64_encode("Error:".$e->getMessage());
}






header("location:ielts_manage.php?msg=$msg");
?>