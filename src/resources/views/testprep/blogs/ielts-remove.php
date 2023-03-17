<?php
include"config.php";
$se=$_REQUEST['TID'];
// //deleting related image
// $sdel="select * from articles where a_id='$se'";
// $sq=mysqli_query($cn,$sdel) or die(mysqli_error($cn));
// $row=mysqli_fetch_array($sq);
// $impath=$blogpath."/".$row['f_image'];
// unlink($impath);

$sdel2="delete from page_meta where id='$se'";
$sq2=mysqli_query($cn,$sdel2) or die(mysqli_error($cn));
header("location:manage_articles.php");
?>