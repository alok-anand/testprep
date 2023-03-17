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
          <h3 class="box-title"> Add Blog Tag</h3>
        </div>
        <form name="f1" method="post" action="add_blog_tag.php" enctype="multipart/form-data" id="validate-me-plz">
          <div class="box-body">
            <div class="form-group">
              <label for="exampleInputEmail1">*Tag Name</label>
              <input type="text" value="" size=40 class="input form-control" name="tag_name" placeholder="Tag Name" required="">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">*Tag Decsription</label>
              <textarea value="" size=40 class="input form-control" name="tag_desc" placeholder="Tag Description" required=""></textarea>
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