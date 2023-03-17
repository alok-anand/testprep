<?php
include"config.php";
//include"settings.php";
    function passwordGenerator($length = null)  
    {  
    $pass = md5(time());  
    if($length != null) {  
    $pass = substr($pass, 0, $length);  
    }  
    return $pass;  
    }  
function sendmail($em,$f,$acode,$pwd,$sid,$dt)
{
$subject = "Registration at Program Explorer";
$headers = "From: <https://www.xxx.in>\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
$msg.="<p><strong>Dated :</strong>". date('F jS, Y')."</p>"; 
$msg.="<p align='center'><br><strong>A HEARTLY WELCOME TO Mr./Ms.".$f."</strong></p>";
$msg.="<p>Dear ". $f."</p>";
$msg.="<p><b>Congratulations!</b><br/>
 
Welcome to the family of ... Thank you for choosing us for a bright future. We are sure that our remarkable association will complement your life style.<br/><br/>
 
<br/><br/>
 
Warm regards,<br/>
Program Explorer </p>";

$msg.="<p><b>Your Login Information</B></P>";
$msg.="<table cellspacing='10'>";
$msg.="<tr><th>User ID .</th><th>Password</th><th>Date of Joining</th></tr>";
$msg.="<tr><th>".$acode."</th><th>".$pwd."</th><th>".$dt."</th></tr>";
$msg.="</table>";
$msg.="<br/><br/>";

mail($em, $subject, $msg, $headers);
return $msg;
}


function getExtension($str) 
				{
				$i = strrpos($str,".");
				if (!$i) { return ""; }
				$l = strlen($str) - $i;
				$ext = substr($str,$i+1,$l);
				return $ext;
				}
function pgresize($upload,$image,$discpath)
{
$uploadedfile = $upload;
$filename = stripslashes($image);
										$extension = getExtension($filename);
										$extension = strtolower($extension);
										if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") && ($extension != "gif"))
										{
											$change='<div class="msgdiv">Unknown Image extension </div> ';
											$errors=1;
										}
										else
										{
											 $size=filesize($upload);
										
											if($extension=="jpg" || $extension=="jpeg" )
											{
												$uploadedfile = $upload;
												$src = imagecreatefromjpeg($uploadedfile);
											}
											else if($extension=="png")
											{
											$uploadedfile = $upload;
											$src = imagecreatefrompng($uploadedfile);
											}
											else
											{
											$src = imagecreatefromgif($uploadedfile);
											}
											list($width,$height)=getimagesize($uploadedfile);
		
											$newwidth=300;
											$newheight=($height/$width)*$newwidth;
											//$newheight=250;
											$tmp=imagecreatetruecolor($newwidth,$newheight);
											imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight,$width,$height);
											$filename = $discpath."/". $image;
											imagejpeg($tmp,$filename,100);
										imagedestroy($src);
											imagedestroy($tmp);
											}
return;

}
				
function countryresize($upload,$image, $imagepath)
{

$uploadedfile = $upload;
 $filename = stripslashes($image);

										$extension = getExtension($filename);
										$extension = strtolower($extension);
										if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") && ($extension != "gif"))
										{
											$change='<div class="msgdiv">Unknown Image extension </div> ';
											$errors=1;
										}
										else
										{
											 $size=filesize($upload);
										
											if($extension=="jpg" || $extension=="jpeg" )
											{
												$uploadedfile = $upload;
												$src = imagecreatefromjpeg($uploadedfile);
											}
											else if($extension=="png")
											{
											$uploadedfile = $upload;
											$src = imagecreatefrompng($uploadedfile);
											$background = imagecolorallocate($dimg , 0, 0, 0);
											
											}
											else
											{
											$src = imagecreatefromgif($uploadedfile);
											}
											list($width,$height)=getimagesize($uploadedfile);
											$newwidth = 300;
											$newheight=($height/$width)*$newwidth;
										//	$newheight=266;
											$tmp=imagecreatetruecolor($newwidth,$newheight);
											
											switch ($extension) {

											case 'gif':
											case 'png':
												// integer representation of the color black (rgb: 0,0,0)
												$background = imagecolorallocate($tmp , 0, 0, 0);
												// removing the black from the placeholder
												imagecolortransparent($tmp, $background);

												// turning off alpha blending (to ensure alpha channel information
												// is preserved, rather than removed (blending with the rest of the
												// image in the form of black))
												imagealphablending($tmp, false);

												// turning on alpha channel information saving (to ensure the full range
												// of transparency is preserved)
												imagesavealpha($tmp, true);
												break;

											default:
												break;
										}
											
											
											imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight,$width,$height);
									$filename = $imagepath."/".$image;
											imagejpeg($tmp,$filename,100);
											imagedestroy($src);
											imagedestroy($tmp);
											}
return;

}

function countryresize_banner($upload,$image, $imagepath)
{
$uploadedfile = $upload;
$filename = stripslashes($image);
										$extension = getExtension($filename);
										$extension = strtolower($extension);
										if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") && ($extension != "gif"))
										{
											$change='<div class="msgdiv">Unknown Image extension </div> ';
											$errors=1;
										}
										else
										{
											 $size=filesize($upload);
										
											if($extension=="jpg" || $extension=="jpeg" )
											{
												$uploadedfile = $upload;
												$src = imagecreatefromjpeg($uploadedfile);
											}
											else if($extension=="png")
											{
											$uploadedfile = $upload;
											$src = imagecreatefrompng($uploadedfile);
											}
											else
											{
											$src = imagecreatefromgif($uploadedfile);
											}
											list($width,$height)=getimagesize($uploadedfile);
											$newwidth=1400;
											$newheight=($height/$width)*$newwidth;
										//	$newheight=266;
											$tmp=imagecreatetruecolor($newwidth,$newheight);
											
											switch ($extension) {

											case 'gif':
											case 'png':
												// integer representation of the color black (rgb: 0,0,0)
												$background = imagecolorallocate($tmp , 0, 0, 0);
												// removing the black from the placeholder
												imagecolortransparent($tmp, $background);

												// turning off alpha blending (to ensure alpha channel information
												// is preserved, rather than removed (blending with the rest of the
												// image in the form of black))
												imagealphablending($tmp, false);

												// turning on alpha channel information saving (to ensure the full range
												// of transparency is preserved)
												imagesavealpha($tmp, true);
												break;

											default:
												break;
										}
											
											
											
											
											
											imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight,$width,$height);
											$filename = $imagepath."/".$image;
											imagejpeg($tmp,$filename,100);
											imagedestroy($src);
											imagedestroy($tmp);
											}
return;

}


function img_resize($upload,$image,$ht,$wd,$folder)
{
	
$uploadedfile = $upload;
$filename = stripslashes($image);
										$extension = getExtension($filename);
										$extension = strtolower($extension);
										if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") && ($extension != "gif"))
										{
											$change='<div class="msgdiv">Unknown Image extension </div> ';
											$errors=1;
										}
										else
										{
											 $size=filesize($upload);
										
											if($extension=="jpg" || $extension=="jpeg" )
											{
												$uploadedfile = $upload;
												$src = imagecreatefromjpeg($uploadedfile);
											}
											else if($extension=="png")
											{
											$uploadedfile = $upload;
											$src = imagecreatefrompng($uploadedfile);
											}
											else
											{
											$src = imagecreatefromgif($uploadedfile);
											}
											list($width,$height) = getimagesize($uploadedfile);
											
											if($wd == 0) {
												$wd = $width;
											}
											if($ht == 0) {
												//$ht = $height;
												$ht=($height/$width)*$wd;
											}
											$newwidth = $wd;
																	
											$newheight = $ht;
											$tmp=imagecreatetruecolor($newwidth,$newheight);
											imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight,$width,$height);
											//$filename = "memberimages/". $image;
											$filename = $folder."/". $image;
											imagejpeg($tmp,$filename,100);
											imagedestroy($src);
											imagedestroy($tmp);
											}



return;

}

function blog_resize($upload,$image,$folder_path)
{
$uploadedfile = $upload;
$filename = stripslashes($image);
										$extension = getExtension($filename);
										$extension = strtolower($extension);
										if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") && ($extension != "gif")  && ($extension != "webp"))
										{
											$change='<div class="msgdiv">Unknown Image extension </div> ';
											$errors=1;
										}
										else
										{
											 $size=filesize($upload);
										
											if($extension=="jpg" || $extension=="jpeg" )
											{
												$uploadedfile = $upload;
												$src = imagecreatefromjpeg($uploadedfile);
											}
											else if($extension=="png")
											{
											$uploadedfile = $upload;
											$src = imagecreatefrompng($uploadedfile);
											}
											else if($extension=="webp")
											{
											$uploadedfile = $upload;
											$src = imagecreatefromwebp($uploadedfile);
											}
											else
											{
											$src = imagecreatefromgif($uploadedfile);
											}
											list($width,$height)=getimagesize($uploadedfile);
		
											$newwidth=325;
										//$newheight=($height/$width)*$newwidth;

											$newheight=162;

											$tmp=imagecreatetruecolor($newwidth,$newheight);
											imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight,$width,$height);
											$filename = $folder_path. $image;
											imagejpeg($tmp,$filename,100);
											imagedestroy($src);
											imagedestroy($tmp);
											}



return;

}


function blog_resize_big($upload,$image,$folder_path)
{
$uploadedfile = $upload;
$filename = stripslashes($image);
										$extension = getExtension($filename);
										$extension = strtolower($extension);
										if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") && ($extension != "gif")   && ($extension != "webp"))
										{
											$change='<div class="msgdiv">Unknown Image extension </div> ';
											$errors=1;
										}
										else
										{
											 $size=filesize($upload);
										
											if($extension=="jpg" || $extension=="jpeg" )
											{
												$uploadedfile = $upload;
												$src = imagecreatefromjpeg($uploadedfile);
											}
											else if($extension=="png")
											{
											$uploadedfile = $upload;
											$src = imagecreatefrompng($uploadedfile);
											}
											else if($extension=="webp")
											{
											$uploadedfile = $upload;
											$src = imagecreatefromwebp($uploadedfile);
											}
											else
											{
											$src = imagecreatefromgif($uploadedfile);
											}
											list($width,$height)=getimagesize($uploadedfile);
		
											$newwidth=1400;
											$newheight=($height/$width)*$newwidth;

											//$newheight=200;

											$tmp=imagecreatetruecolor($newwidth,$newheight);
											imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight,$width,$height);
											$filename = $folder_path. $image;
											imagejpeg($tmp,$filename,100);
											imagedestroy($src);
											imagedestroy($tmp);
											}



return;

}

function discname($pgid,$cn)
{
$s="select * from prog_cat where pg_id='$pgid'";
$row=mysqli_query($cn,$s) or die(mysqli_error($cn));
$mrow=mysqli_fetch_array($row);
return $mrow['pg_name'];
}


function curl_get_file_contents($url)

    {	$c = curl_init();

        curl_setopt($c, CURLOPT_URL, $url);

        curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);

      $contents = curl_exec($c);

        curl_close($c);

        if ($contents) return $contents;

            else return FALSE;

    }

function send_sms($receiver,$content)
{
$content = urlencode($content);
$url="http://198.24.149.4/API/pushsms.aspx?loginID=softworldlab&password=131248&senderid=DHRUPA&mobile=$receiver&text=$content&route_id=2&Unicode=0";
curl_get_file_contents($url);
}

function forgotpass($em,$pass,$mno,$mname,$username)
{
$subject = "Password of DHR Admin";
$headers = "From: <https://www.dhrupad.in>\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
$msg.="<p><strong>Dated :</strong>". date('F jS, Y')."</p>"; 
$msg.="<p><b>Congratulations!</b><br/>";
$msg.="<p><b>Your Login Information</B></P>";
$msg.="<table cellspacing='10'>";
$msg.="<tr><th>Login</th><th>Password</th></tr>";
$msg.="<tr><th>".$username."</th><th>".$pwd."</th></tr>";
$msg.="</table>";
$msg.="<br/><br/>";

mail($em, $subject, $msg, $headers);
return $msg;
}
function blog_category($cid,$cn)
{
include"config.php";
$ct=explode(',',$cid);
$ct1=implode("','",$ct);
$cat="select * from blog_category where status='active' and cat_id in('$ct1')";
$scat_q=mysqli_query($cn,$cat) or die(mysqli_error($cn));
$category_name = '';
while($row=mysqli_fetch_array($scat_q)) {
	$category_name .= $row['cat_name'].", ";
}
return $category_name;
	
}
function count_notifications($username)
{
	include"config.php";
	//$notification="select * from notifications where notification_user='$username' AND notification_status = '0'";
	$notification="select * from notifications where notification_status = '0'";
	$noti_q=mysqli_query($cn,$notification) or die(mysqli_error($cn));	
	return mysqli_num_rows($noti_q);
}	
?>