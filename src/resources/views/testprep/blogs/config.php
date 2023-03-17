<?php
error_reporting (E_ALL ^ E_NOTICE);
error_reporting(1);
ini_set('upload_max_filesize', '10M');
ini_set('post_max_size', '10M');
ini_set('max_input_time', 300);
ini_set('max_execution_time', 300);

@ini_set('display_errors', 1);
ini_set('session.bug_compat_warn', 0);
ini_set('session.bug_compat_42', 0);

$db_con="localhost";
$db_un="masterprep_dev1";
$db_pwd="I.enw^{mUkc}";
$db_database="masterprep_n_web";
//Enter your MySQL hostname here - Usually localhost works fine. 
$MySQL_Host = 'localhost';
//Enter your MySQL Username here - Your host should provide this.
$MySQL_User = 'masterprep_dev1';
//Enter the password that corresponds to the MySQL Username.
$MySQL_Pass = 'I.enw^{mUkc}';
//Enter the database name where you would like to store your
$MySQL_DB = 'masterprep_n_web';
$cn=mysqli_connect($db_con,$db_un,$db_pwd,$db_database) or die(mysqli_error($cn));
$db=mysqli_select_db($cn,$db_database)or die(mysqli_error($cn));

//print_r($cn);
//$t=mysqli_query("SET sql_mode = ''");
mysqli_set_charset( $cn, 'utf8');
date_default_timezone_set("Asia/Calcutta");
?>