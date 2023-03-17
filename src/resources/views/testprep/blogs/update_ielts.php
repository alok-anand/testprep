<?php
//  echo '<pre>';
//  print_r($_REQUEST); //exit;

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

// header('location:login.php');

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


$atitle=htmlentities(stripslashes($_REQUEST['title']),ENT_QUOTES);
$slug=$_REQUEST['slug'];
$scriptname=$_REQUEST['scriptname'];
$content = htmlentities(stripslashes($_REQUEST['content']),ENT_QUOTES);
$type=$_REQUEST['type'];
$shortdescription = htmlentities(stripslashes($_REQUEST['shortdescription']),ENT_QUOTES);
$h1tag=htmlentities(stripslashes($_REQUEST['h1tag']),ENT_QUOTES);
$faqtitle=htmlentities(stripslashes($_REQUEST['faqtitle']),ENT_QUOTES);
$status = $_REQUEST['status'];
$metatitle     = htmlentities(stripslashes($_REQUEST['metatitle']),ENT_QUOTES);
$metadescription   = $_REQUEST['metadescription'];
$metakeywords   = $_REQUEST['metakeywords'];
/* Check Slug */
$slug=trim($_REQUEST['slug']);
$slug=str_replace('/', '_', trim($slug));
$slug=preg_replace('/[^a-zA-Z0-9_ -]/s','',trim($slug));
$slug=str_replace(' ', '-', trim($slug));




try{
    
    
  $com="update pagemeta set slug='$slug',atitle='$atitle',metatitle='$metatitle',metadescription='$metadescription',metakeywords='$metakeywords', active = '$status',faqtitle = '$faqtitle',modified=NOW() where id='$aid'";

 $qr=mysqli_query($cn,$com) or die(mysqli_error($cn));

 $pq="update cms_page set type='$type',h1tag='$h1tag',shortdescription='$shortdescription',content='$content',page_id='$aid',active='$status' where page_id='$aid'";
 $qr=mysqli_query($cn,$pq) or die(mysqli_error($cn));




$msg=base64_encode('PageContent Updated Successfully!');
}catch(Exception $exception){
    $msg=base64_encode("Error:".$e->getMessage());
}


// echo $msg;

// die;
header("location: ielts_manage.php?msg=$msg");

?>