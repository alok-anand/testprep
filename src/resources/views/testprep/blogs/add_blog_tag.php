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
$tagname = trim($_POST['tag_name']);
$tag_desc = $_POST['tag_desc'];
$slug=str_replace(' ','-',strtolower(trim($_POST['tag_name'])));


$com="insert into blog_tags(tag_name, tag_desc, slug)values('$tagname', '$tag_desc','$slug')";

$qr=mysqli_query($cn,$com) or die(mysqli_error($cn));
$msg=base64_encode('Tag Added Successfully!');
header("location:manage_blog_tags.php?msg=$msg");
?>