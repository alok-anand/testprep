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
      <li class="active">Blog Categories</li>
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
          <h3 class="box-title">Blog Categories</h3>
          <div class="align_right"><a href="blog_cat_add.php" alt="Add New" data-toggle="modal" href="#myModal" id="modellink"><i class="fa fa-plus fa-2x"></i></a></div>
          <div class="modal-container"></div>
        </div>
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                <div class="box-tools"> </div>
              </div>
              <!-- /.box-header -->
              <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                  <tr>
                    <th>Sr. #</th>
                    <th>Category Name</th>
                    <th>Parent Category Name</th>
                    <th>Category Description</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  <?php
$i=1;
$sq="select * from blog_category";
$srq=mysqli_query($cn,$sq) or die(mysqli_error($cn));
while($row=mysqli_fetch_array($srq))
{
?>
                  <tr>
                    <td><?php echo $i;?></td>
                    <td><?php echo $row['cat_name'];?></td>
                   <? $co="select cat_name from blog_category where cat_id =".$row['parent'];

                    $co_q=mysqli_query($cn,$co) or die(mysqli_error($cn)); 
                    $parent =mysqli_fetch_array($co_q);
                    ?>
                     <td><?php echo $parent['cat_name'];?></td>
                    <td><?php echo $row['cat_desc'];?></td>
                    <td><?php echo $row['status'];?></td>
                    <td><a href="edit-blog-cat.php?search=<?php echo base64_encode($row['cat_id']);?>"><i class="fa fa-pencil-square" aria-hidden="true"></i> </a>&nbsp; <a href="delete-blog-cat.php?search=<?php echo base64_encode($row['cat_id']);?>" onClick="return delprog()"><i class="fa fa-times-rectangle" aria-hidden="true"></i> </a></td>
                  </tr>
                  <?php
				$i++;
}	

?>
                </table>
              </div>
              <!-- /.box-body --> 
            </div>
            <!-- /.box --> 
          </div>
        </div>
      </div>
    </div>
    <!-- /.row -->
    </section>
    <!-- /.content --> 
  </div>
  <!-- /.content-wrapper --> 
  
  <!-- ./wrapper --> 
  <script type="text/javascript">
	$(document).ready(function(){
		var url = "blog_cat_add.php";
		jQuery('#modellink').click(function(e) {
		    $('.modal-container').load(url,function(result){
				$('#myModal').modal({show:true});
			});
		});
	});
</script>
  <?php include"footer.php";?>