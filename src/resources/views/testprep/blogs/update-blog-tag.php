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
$tagid = $_REQUEST['tagid'];
$tag_name = trim($_POST['tag_name']);
$tag_desc = $_POST['tag_desc'];
$status = $_REQUEST['status'];
$slug=str_replace(' ','-',strtolower(trim($_POST['tag_name'])));

$com="update blog_tags set tag_name='$tag_name', tag_desc = '$tag_desc', slug = '$slug', status='$status' where tag_id ='$tagid'";

$qr=mysqli_query($cn,$com) or die(mysqli_error($cn));
$msg=base64_encode('Tag Updated Successfully!');
header("location:manage_blog_tags.php?msg=$msg");
?>