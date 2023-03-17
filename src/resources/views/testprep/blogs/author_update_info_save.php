<?php 
/*
*** Program ielts/tofel update
*/
session_start();
include "settings.php";
include "config.php";
include "functions.php";
$ARRAY_QUERIES = array();
// echo "<pre>";
// print_r($_SESSION);
// echo "</pre>";
if(!empty($_SESSION['progusername']))
{	
	$info = htmlentities(stripslashes($_POST['info']),ENT_QUOTES);
	$author=trim($_REQUEST['author']);
	
	$u = "update articles_author set a_description='".$info."' where id='".$author."'";
	mysqli_query($cn,$u) or die(mysqli_error($cn));
	
	if(!$q_exec) {
		$msg = base64_encode('Information updated successfully!');
	}
	else
	{
		$msg = base64_encode('There is some error occured for updating information!');
	}		
	header("location:author-update-info.php?msg=$msg");
}
else
{
	$msg =base64_encode('Unauthorize to access!');
	header("location:login.php?msg=$msg");
}	
?>