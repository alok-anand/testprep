<?php
@session_start();
include "config.php";
session_cache_expire( 1200 );
@session_start(); // NEVER FORGET TO START THE SESSION!!!
$inactive = 1200;
function getSslPage($url) {    $ch = curl_init();    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);    curl_setopt($ch, CURLOPT_HEADER, false);    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);    curl_setopt($ch, CURLOPT_URL, $url);    curl_setopt($ch, CURLOPT_REFERER, $url);    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);    $result = curl_exec($ch);    curl_close($ch);	    return $result;}/* Check Header IP */$ipaddress = '';if (isset($_SERVER['HTTP_CLIENT_IP'])) {	$ipaddress = $_SERVER['HTTP_CLIENT_IP'];} else if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {	$ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];} else if (isset($_SERVER['HTTP_X_FORWARDED'])) {	$ipaddress = $_SERVER['HTTP_X_FORWARDED'];} else if (isset($_SERVER['HTTP_FORWARDED_FOR'])) {	$ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];} else if (isset($_SERVER['HTTP_FORWARDED'])) {	$ipaddress = $_SERVER['HTTP_FORWARDED'];} else if (isset($_SERVER['REMOTE_ADDR'])) {	$ipaddress = $_SERVER['REMOTE_ADDR'];} else {	$ipaddress = 'UNKNOWN';}$PublicIP = $ipaddress;$url="http://ip-api.com/php/$PublicIP";$curls=getSslPage($url);$json= unserialize($curls);/* Check Header IP */if(!empty($json)){		$ipcountry  = @$json['country'];	$ipregion   = @$json['regionName'];	$ipcity     = @$json['city'];}/* Check Header IP */date_default_timezone_set('Asia/Kolkata');$newDateTime = date('h:i:A'); $ip_qry="INSERT INTO `track_user_ip`(`userlogin`, `type`, `login_for`,`action_time`, `user_ip`, `location`) VALUES ('".$_SESSION['progusername']."','Logout','adm','".$newDateTime."','".$PublicIP."','".$ipcity."')";mysqli_query($cn,$ip_qry);
if(isset($_SESSION['start']) ) {
$session_life = time() - $_SESSION['start'];
if($session_life > $inactive){
@session_destroy();
header("Location:login.php");
}
}

@session_start();
@session_destroy();
header("location:login.php");
?>