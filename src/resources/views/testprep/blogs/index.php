<?php include"header.php";?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    
<?php	
		if(isset($_REQUEST['id'])) {
			$notification_username	= $_SESSION['progusername'];	
			$id = $_REQUEST['id'];
			$update_query = "UPDATE notifications SET notification_status = '1' WHERE notification_id = '$id' AND notification_user = '$notification_username'";
			@mysqli_query($cn,$update_query) or die (mysqli_error($cn));
		}
	
include "inner-header.php";
@session_start();
?>
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Version 2.0</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
		<div class="info-box my-3" style="padding: 25px;"><h3>Welcome to <?php  echo $_SESSION['progadm']; ?></h3></div>
	</section>
 </div> 
</div>
     
      

<?php include"footer.php";?>