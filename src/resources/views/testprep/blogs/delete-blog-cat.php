<?php
include"config.php";
include"settings.php";
$se=base64_decode($_REQUEST['search']);
//deleting related image

$sdel2="delete from blog_category where cat_id='$se'";
$sq2=mysqli_query($cn,$sdel2) or die(mysqli_error($cn));
header("location:manage_blog_cat.php");
?>