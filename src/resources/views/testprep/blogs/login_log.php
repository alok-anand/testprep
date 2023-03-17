<?php
@session_start();
include "config.php";

// $ip_q = "select * from ip_allow_range";
// $ip_r = mysqli_query($cn,$ip_q) or die(mysqli_error());
// $ip_row = mysqli_fetch_array($ip_r);

//if(in_array($_SERVER['REMOTE_ADDR'], $ip_row)) {

$u=htmlspecialchars(stripslashes($_POST['username']),ENT_QUOTES);
//$p=base64_encode(htmlspecialchars(stripslashes($_POST['password']),ENT_QUOTES));
$p = md5($_POST['password']);
$sqb="select * from user where email='$u' and password='$p' and active= 1 ";
//echo $sqb;
$mrow=mysqli_query($cn,$sqb) or die(mysqli_error());
$mrow4=mysqli_fetch_array($mrow);
$rc=mysqli_num_rows($mrow);


function getSslPage($url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_REFERER, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    $result = curl_exec($ch);
    curl_close($ch);
	
    return $result;
}


/* Check Header IP */
$ipaddress = '';
if (isset($_SERVER['HTTP_CLIENT_IP'])) {
	$ipaddress = $_SERVER['HTTP_CLIENT_IP'];
} else if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
	$ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else if (isset($_SERVER['HTTP_X_FORWARDED'])) {
	$ipaddress = $_SERVER['HTTP_X_FORWARDED'];
} else if (isset($_SERVER['HTTP_FORWARDED_FOR'])) {
	$ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
} else if (isset($_SERVER['HTTP_FORWARDED'])) {
	$ipaddress = $_SERVER['HTTP_FORWARDED'];
} else if (isset($_SERVER['REMOTE_ADDR'])) {
	$ipaddress = $_SERVER['REMOTE_ADDR'];
} else {
	$ipaddress = 'UNKNOWN';
}



// if($mrow4['outside_access'] == 0)
// {
// 	if($mrow4['allow_ip'] != $ipaddress)
// 	{
// 		exit(header("location:login.php?err=2"));
// 	}
// }


// $PublicIP = $ipaddress;
// $url="http://ip-api.com/php/$PublicIP";
// $curls=getSslPage($url);
// $json= unserialize($curls);
// /* Check Header IP */
// if(!empty($json))
// {	
// 	$ipcountry  = @$json['country'];
// 	$ipregion   = @$json['regionName'];
// 	$ipcity     = @$json['city'];
// }/* Check Header IP */




if($rc<=0)
{
// 	$bl="select * from admin_users where status='Block' limit 1 ";
// 	$mrow_b=mysqli_query($cn,$bl) or die(mysqli_error());
// 	$rc_b=mysqli_num_rows($mrow_b);
// 		if($rc_b>0)
// 		{
// 		exit(header("location:login.php?err=2"));
// 		}
// 		date_default_timezone_set('Asia/Calcutta');
// 		$err=0;
// 		$ip=$_SERVER['REMOTE_ADDR'];
// 		$dt=date("d-m-Y");
// 		$tt=date("H:i:s a",time()); 
// 		$sp="select * from login_attempts where ip='$ip' and au_date='$dt'";
// 		$spe=mysqli_query($cn,$sp) or die(mysqli_error());
// 		$spn=mysqli_num_rows($spe);
// 		if($spn>0)
// 		{
// 		$spj=mysqli_fetch_array($spe);
// 					if($spj[3]<5)
// 					{
// 				$spins="update login_attempts set lastlogin='$tt',login_attempts=login_attempts+1,username='$u' where  ip='$ip'";
// 					}
// 					else{$spins="update login_attempts set lastlogin='$tt',username='$u' where  ip='$ip'";
// 				}
// 		}
// 		else
// 		{
// 	$spins="insert into login_attempts (ip,au_date,lastlogin,login_attempts,username)values('$ip','$dt','$tt',1,'$u')";
// 		}
		
// 		$spinse=mysqli_query($cn,$spins) or die(mysqli_error($cn));
// 		$spr="select login_attempts from login_attempts where ip='$ip' and au_date='$dt'";
// 		$spre=mysqli_query($cn,$spr) or die(mysqli_error($cn));
// 		while($sprw=mysqli_fetch_array($spre))
// 		{
// 		$nattempts=$sprw['login_attempts'];
// 		}
// 		if($nattempts>=5)
// 		{
// 		//$pp="update users set status='Block' where username='$u'";
// 		$pp="update admin_users set status='Block' where username='$u'";
// 		$ppe=mysqli_query($cn,$pp) or die(mysqli_error($cn));
// 		}
 	exit(header("location:login.php?err=$err&attempts=$nattempts"));
}

else
{
// 	date_default_timezone_set('Asia/Kolkata');
// 	$newDateTime = date('h:i:A'); 
// 	$ip_qry="INSERT INTO `track_user_ip`(`userlogin`, `type`, `login_for`,`action_time`, `user_ip`, `location`) VALUES ('".$u."','Login','adm','".$newDateTime."','".$PublicIP."','".$ipcity."')";
// 	mysqli_query($cn,$ip_qry);

	@session_start();
	$_SESSION['progadm'] = $mrow4['fname'].' '.$mrow4['lname'];
	$_SESSION['progusername']=$mrow4['email'];
	$_SESSION['utype'] = 'seo';
// 	$_SESSION['utype'] = $mrow4['utype'];
// 	$_SESSION['ballow'] = $mrow4['bulk_allow'];
	
	if(!empty($_POST["remember"])) {
		setcookie ("member_login",$_POST["email"],time()+ (10 * 365 * 24 * 60 * 60));
		setcookie ("member_password",$_POST["password"],time()+ (10 * 365 * 24 * 60 * 60));
	} else {
		if(isset($_COOKIE["member_login"])) {
			setcookie ("member_login","");
		}
		if(isset($_COOKIE["member_password"])) {
			setcookie ("member_password","");
		}
	}
	header("Location:index.php");
	}
//} else {
//	$err = base64_encode("Cannot be accessed");
//	header("Location:login.php?err=$err");
//}
?>