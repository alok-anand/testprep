<?php
// @session_start();
// session_cache_expire( 1200 );
@session_start(); // NEVER FORGET TO START THE SESSION!!!
$inactive = 1200;
if(isset($_SESSION['start']) ) {
$session_life = time() - $_SESSION['start'];
if($session_life > $inactive){
@session_destroy();
header("Location:login.php");
}
}
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
$catid=$_REQUEST['catid'];
$cname=$_POST['name'];
$cat_desc = $_POST['cat_desc'];
$status=$_REQUEST['status'];

$com="update blog_category set cat_name='$cname', cat_desc = '$cat_desc', status='$status' where cat_id='$catid'";

$qr=mysqli_query($cn,$com) or die(mysqli_error($cn));
$msg=base64_encode('Category Updated Successfully!');
header("location:manage_blog_cat.php?msg=$msg");
?>