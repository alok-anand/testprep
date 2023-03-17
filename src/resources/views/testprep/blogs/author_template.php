<?php
include"config.php";
$id=$_POST['id'];
$s="SELECT a_description FROM `articles_author` where id='$id'";
$r=mysqli_query($cn,$s) or die(mysqli_error($cn));
$row=mysqli_fetch_array($r);
echo html_entity_decode($row['a_description'],ENT_QUOTES); 
?>