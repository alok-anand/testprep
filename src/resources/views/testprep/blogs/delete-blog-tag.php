<?php
include"config.php";
include"settings.php";
$se=base64_decode($_REQUEST['search']);
//deleting related image

$sdel2="delete from blog_tags where tag_id='$se'";
$sq2=mysqli_query($cn,$sdel2) or die(mysqli_error($cn));
header("location:manage_blog_tags.php");
?>