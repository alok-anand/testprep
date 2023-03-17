<?php include"header.php";?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<?php include"inner-header.php";?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper"> 
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <ol class="breadcrumb">
      <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Change Password</li>
    </ol>
  </section>
  
  <!-- Main content -->
  <section class="content">
  <!-- Info boxes -->
  <div class="row">
    <div class="col-md-12">
      <div class="mess"><strong>
        <?php if($_GET['msg']!=""){echo base64_decode($_GET['msg']);}?>
        </strong></div>
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Change Password</h3>
        </div>
         
			
 <div class="row">

   <div class="col-md-12 col-sm-12 col-xs-12">

  <div class="panel panel-default">

                        <div class="panel-heading">

                           Change Password

                        </div>

                        <div class="panel-body">
<div class="col-md-6 col-xs-12">
	
<form name="form1" method="post" action="cpass1.php" onSubmit="" enctype="application/x-www-form-urlencoded"id="validate-me-plz" >
<div class="form-group">
<label><strong>Old Password</strong></label></td>
<input name="opass" type="password" size="20" maxlength="16" class="input form-control" autocomplete="off"  required="">
</div>
<div class="form-group">

<label><strong>New Password</strong></label>
<input name="npass" type="password" size="20" maxlength="16"  autocomplete="off"  class="input form-control" required="">
</div>
<div class="form-group">
<input name="submit" type="submit"  value="Submit" class="btn btn-primary">
</div>
</form>
      </div>
    </div>
    <!-- /.row -->
    </section>
    <!-- /.content --> 
  </div>
  <!-- /.content-wrapper --> 
 	
  <!-- ./wrapper -->
  <?php include"footer.php";?>