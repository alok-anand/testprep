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
// echo "<pre>";print_r($_REQUEST);echo "</pre>";

$aid=$_REQUEST['article'];
$pid=$_REQUEST['page'];
$display_order=$_REQUEST['display_order'];
$question=htmlentities(stripslashes($_REQUEST['question']),ENT_QUOTES);
$answer=htmlentities(stripslashes($_REQUEST['answer']),ENT_QUOTES);
$status=$_REQUEST['status'];

try{
 
    if(isset($_REQUEST['page'])){
        $qstr="?pid=".$_REQUEST['page'];
        $com = "insert into faq(question,answer,pid,display_order,status) values('$question','$answer','$pid','$display_order','$status')";
    }
    // elseif(isset($_REQUEST['article'])){
    //     $qstr="?aid=".$_REQUEST['article'];
    //     $com = "insert into faq(question,answer,aid,status) values('$question','$answer','$aid','$status')";
    // }
    else{
        $qstr="?aid=".$_REQUEST['article'];
        $com = "insert into faq(question,answer,aid,display_order,status) values('$question','$answer','$aid','$display_order','$status')";
    }

  
//  echo $com;
 
 $qr=mysqli_query($cn,$com) or die(mysqli_error($cn));

$msg=base64_encode('Faq Content Updated Successfully!');
// die('check');
header("location: manage_faq.php$qstr&msg=$msg");
}catch(Exception $exception){
    $msg=base64_encode("Error:".$e->getMessage());
}
?>