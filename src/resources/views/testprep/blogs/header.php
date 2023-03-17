<?php
error_reporting (E_ALL ^ E_NOTICE);
error_reporting(0);

session_start(); // NEVER FORGET TO START THE SESSION!!!
$inactive = 155000;

if(isset($_SESSION['start']) ) {
$session_life = time() - $_SESSION['start'];
//  echo '<pre>'; print_r($_SESSION);  echo $session_life; echo $inactive;  //exit;
if($session_life > $inactive){
@session_destroy();
header("Location: ./blogs/login.php");
}
}
$_SESSION['start'] = time();
if(!isset($_SESSION['progadm']) || $_SESSION['progadm']=="")
{ 
header('location:login.php');
}
else
{
@session_start();
//$ses=htmlentities(strip_tags(htmlspecialchars($_SESSION['progadm'])));
}
include"settings.php"; 
include"functions.php";
@session_start();
?>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Edmissions Blog</title>
  <meta name="robots" content="noindex" />
<meta name="googlebot" content="noindex">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <link rel="stylesheet" href="bower_components/bootstrap-table/css/bootstrap-table.css"/>
<!-- End Bootstrap Multi Select Files Files -->

<!-- Bootstrap Table Filter Files -->
	<link rel="stylesheet" href="bower_components/bootstrap-table/css/bootstrap-table-filter.css"/>
<link rel="stylesheet" href="bower_components/bootstrap-multiselect/bootstrap-multiselect.css" type="text/css"/>
 
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

 <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>-->
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>-->

<script src="dist/js/jquery-2.1.4.min.js" type="text/javascript"></script>
 <script src="dist/js/jquery.validate.min.js"></script>
 <script src="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.jquery.min.js"></script>
<link href="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.min.css" rel="stylesheet"/>

 <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
 <script type="text/javascript" src="bower_components/bootstrap-table/bootstrap-table.js"></script> 
 
<script type="text/javascript" src="bower_components/bootstrap-multiselect/bootstrap-multiselect.js"></script>
 <!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<script type="text/javascript" language="javascript" src="ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="rating.js"></script>
</head>
<script>
function delprog()
{
	return confirm("Are you Sure Want to Delete?");
}
	function isNumberKey(evt)
			{
				var charCode = (evt.which) ? evt.which : evt.keyCode;
				if (charCode != 46 && charCode > 31 
				&& (charCode < 48 || charCode > 57))
				return false;
				return true;
			}  
				function isNumericKey(evt)
			{
				var charCode = (evt.which) ? evt.which : evt.keyCode;
				if (charCode != 46 && charCode > 31 
				&& (charCode < 48 || charCode > 57))
				return true;
				return false;
			} 
</script>