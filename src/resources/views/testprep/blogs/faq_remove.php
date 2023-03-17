<?php
include"config.php";
$se=$_REQUEST['TID'];
$aid=$_REQUEST['aid'];
// //deleting related image
// $sdel="select * from articles where a_id='$se'";
// $sq=mysqli_query($cn,$sdel) or die(mysqli_error($cn));
// $row=mysqli_fetch_array($sq);
// $impath=$blogpath."/".$row['f_image'];
// unlink($impath);

$s = "SELECT pid,aid FROM faq where faq_id='$se'"; 
$row=mysqli_query($cn,$s) or die(mysqli_error($cn));
$mrow=mysqli_fetch_assoc($row);


if(isset($mrow['pid']) && $mrow['pid']!=''){			
$qstr="?pid=".$mrow['pid'];
}
else{
$qstr="?aid=".$mrow['aid'];
}





$sdel2="delete from faq where faq_id='$se'";
$sq2=mysqli_query($cn,$sdel2) or die(mysqli_error($cn));
$msg=base64_encode('Faq Deleted Successfully!');
header("location: manage_faq.php$qstr&msg=$msg");
?>