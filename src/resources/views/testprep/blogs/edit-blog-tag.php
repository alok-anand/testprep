<?php include"header.php";?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<?php include"inner-header.php";?>
<?php
 $se=base64_decode($_REQUEST['search']);

//deleting related image

$sqt="select * from blog_tags where tag_id='$se'";
$sq=mysqli_query($cn,$sqt) or die(mysqli_error($cn));
$mrow=mysqli_fetch_array($sq);
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper"> 
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <ol class="breadcrumb">
      <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Blog Tag</li>
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
          <h3 class="box-title">Blog Tag</h3>
        </div>
        <form name="f1" method="post" action="update-blog-tag.php"  enctype="multipart/form-data" id="validate-me-plz">
          <div class="box-body">
            <div class="form-group">
              <label for="exampleInputEmail1">*Tag Name</label>
              <input type="text" value="<?php echo $mrow['tag_name'];?>" size=40 class="input form-control" name="tag_name" placeholder="Tag Name" required="">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">*Tag Description</label>
              <textarea size=40 class="input form-control" name="tag_desc" placeholder="Category Description"><?php echo $mrow['tag_desc'];?></textarea>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">*Status</label>
              <select name="status" class="input form-control">
                <option value="<?php echo $mrow['status'];?>"><?php echo $mrow['status'];?></option>
                <option value="inactive">Inactive</option>
                <option value="active">Active</option>
              </select>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-md-3 col-xs-6">
                  <input type="button" value="Cancel" class="btn btn-warning" onClick="location.href='manage_prog_tags.php'">
                  <input type="hidden" value="<?php echo $mrow[tag_id];?>" name="tagid"/>
                </div>
                <div class="col-md-3 col-xs-6">
                  <input type="submit" value="Submit" class="btn btn-primary">
                </div>
              </div>
            </div>
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