<?php include"header.php";?>
<!--
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<?php //include"inner-header.php";?>
  

  
  <div class="content-wrapper">
  
    <section class="content-header">
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Discipline</li>
      </ol>
    </section>

  
    <section class="content">
      -->

<div id="myModal" class="modal fade">
<div class="modal-dialog">
  <div class="row">
    <div class="col-md-12">
      <div class="mess"><strong>
        <?php if($_GET['msg']!=""){echo base64_decode($_GET['msg']);}?>
        </strong></div>
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title"> Add Blog Category</h3>
        </div>
        <form name="f1" method="post" action="add_blog_cat.php" enctype="multipart/form-data" id="validate-me-plz">
          <div class="box-body">
              <div class="form-group">
                  
             <select class="input form-control"  name="parent_id">
              <?php



$co="select cat_id,cat_name from blog_category where parent = 0";

$co_q=mysqli_query($cn,$co) or die(mysqli_error($cn));

echo"<option value=''> Select Category</option>";	

while($scrow=mysqli_fetch_array($co_q))

{

echo"<option value='".$scrow['cat_id']."'> ".$scrow['cat_name']."</option>";	



}

?>
                
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">*Sub Category Name</label>
              <input type="text" value="" size=40 class="input form-control" name="name" placeholder="Sub Category Name" required="">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">*Category Decsription</label>
              <textarea value="" size=40 class="input form-control" name="cat_desc" placeholder="Category Description" required=""></textarea>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-md-3 col-xs-6">
                  <input type="button" value="Cancel" class="btn btn-warning" data-dismiss="modal">
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
  </div>
</div>
<!-- </section>
    
  </div>
  
<?php //include"footer.php";?>