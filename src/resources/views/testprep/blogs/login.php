<?php
error_reporting (E_ALL ^ E_NOTICE);
error_reporting(0);

//phpinfo(); exit;
$ap="";
$at="";
$at1="";
include_once "config.php";
// echo 'abc'; exit;
date_default_timezone_set('Asia/Calcutta');
$err=0;
$ip=$_SERVER['REMOTE_ADDR'];
$dt=date("d");
$tt=date("i",time()); 
$htt=date("h",time());
// $sp="select * from login_attempts limit 0,1";
// $spe=mysqli_query($cn,$sp) or die(mysqli_error());
// $row=mysqli_num_rows($spe);
/* if($row>0)
{
		while($rw=@mysqli_fetch_array($spe))
		{
		$username=$rw['username'];
		$lastlogin=$rw['lastlogin'];
		$au_date=$rw['au_date'];
		//$mdiff=$tt-date("i",strtotime($rw[lastlogin]));
		$mdiff=round(abs(strtotime(date("d-m-Y H:i:s"))-strtotime($rw[lastlogin]))/60,2)."<br/>";
		$datediff=$dt-date("d",strtotime($au_date));
//		if( $datediff>=1 || $mdiff>=30 || $hdiff>=1)
		if($mdiff>=1)
		{
		$spr="update admin_users set status='active' where username='admin'";
		$sppe=mysqli_query($cn,$spr) or die(mysqli_error());
		$spd="update login_attempts set login_attempts=0, lastlogin=''";
		$spe=mysqli_query($cn,$spd) or die(mysqli_error());
		} 
		}
} */

?>	
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Edmissions | Blog | Login</title>
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
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.min.js"></script>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
   <a href="index.php"><b><img src="images/Logo.svg" class="img-responsive"/></b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
  <div class="red"> <?php //echo base64_decode($_REQUEST['err']);?></div>
  <?php if($_REQUEST['err']!=""){?>
                       <div class="alert alert-error">
<?php 
$ap=htmlentities(strip_tags(htmlspecialchars($_GET['err'])),ENT_QUOTES);
$chr=htmlentities(strip_tags(htmlspecialchars($_GET['chr'])),ENT_QUOTES);
$at=htmlentities(strip_tags(htmlspecialchars($_GET['attempts'])),ENT_QUOTES);
$at1=htmlentities(strip_tags(htmlspecialchars($_GET['err'])),ENT_QUOTES);

echo '<p style="color:#FFf; font-weight:bold;">'.$chr.'</p>';
if($ap<=0 && $ap!="" && $at<5)
{
echo "Invalid Username or Passowrd";
}
?></strong></p>
<?php 
if($at>=5 || $at1==2 )
{
echo "Your Account is Blocked, Please Try After 1 Minute";
}
if($at<5 && $at!="")
{
echo "Invalid Login Attempts is $at";
}
if($at1!="")
{
echo "Un-authorized Access Prevented!";
}

?>	
<?php echo"</div>"; }?>
  <p class="login-box-msg">Sign in to start your session</p>

    <form action="login_log.php" method="post" id="validate-me-plz">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="username" placeholder="Username" required="true" value="<?php if(isset($_COOKIE["member_login"])) { echo $_COOKIE["member_login"]; } ?>">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password" placeholder="Password" required="true" value="<?php if(isset($_COOKIE["member_password"])) { echo $_COOKIE["member_password"]; } ?>">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
        <div class="form-group has-feedback">
          <button type="submit" class="btn btn-black btn-block btn-flat">Sign In</button>
        </div>
        
      <!--<div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
             <input class="form-check-input" name="remember" type="checkbox" <?php if(isset($_COOKIE["member_login"])) { ?> checked <?php } ?>> Remember Password</label>
            </label>
          </div>
        </div>

        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>

      </div>-->
    </form>
		  
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>
