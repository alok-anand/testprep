<?php include"header.php";?>

<body class="hold-transition skin-blue sidebar-mini">

<div class="wrapper">

<?php include"inner-header.php";?>
<?php include"config.php";?>

<?php //echo $_REQUEST['aid']; die;?> 



  <!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper">

    <!-- Content Header (Page header) -->

    <section class="content-header">

      <ol class="breadcrumb">

        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>

        <li class="active">FAQ</li>

      </ol>

    </section>



    <!-- Main content -->

    <section class="content">

      <!-- Info boxes -->

      <div class="row">

      <div class="col-md-12">

	  <div class="mess"><strong><?php if($_GET['msg']!=""){echo base64_decode($_GET['msg']);}?></strong></div>

				 <div class="box box-primary">

            <div class="box-header with-border">

              <h3 class="box-title">FAQ</h3>

            </div>

			



<form name="f1" method="post" action="add_faq.php"  enctype="multipart/form-data" id="validate-me-plz">

 <div class="box-body">


 <div class="form-group">
<label for="exampleInputEmail1">*Question</label>
<input type="text" value="" size=40 class="input form-control" name="question" placeholder="Question" required="" id="question">
</div>

<div class="form-group">
<label for="exampleInputEmail1">*Answer</label>
<textarea class="input form-control" name="answer" placeholder="Answer" id="answer" required=""></textarea>
</div>

<?php if(isset($_REQUEST['pid'])){ ?>
<div class="form-group">
<label for="exampleInputEmail1">*Bind with Page</label>
    <?php
    $a = "SELECT id,slug as atitle FROM pagemeta WHERE active=1 ORDER BY atitle ASC";
    $rowa=mysqli_query($cn,$a) or die(mysqli_error($cn));
    // $mrowa=mysqli_fetch_all($rowa);
    // echo "<pre>".$s;print_r($mrowa);echo "</pre>";die;
    ?>
<select class="input form-control" name='page'>
<?php 
while($arow = mysqli_fetch_array($rowa)) {    
    if($arow['id']==$_REQUEST['pid']){$class="selected";}else{$class="";} ?>
    <option value="<?= $arow['id'] ?>" <?= $class ?> ><?= $arow['atitle'] ?></option>
<?php } ?>
</select>
</div>
<?php } elseif(isset($_REQUEST['aid'])){ ?>
<div class="form-group">
<label for="exampleInputEmail1">*Bind with Article</label>
    <?php
    $a = "SELECT a_id,atitle FROM articles WHERE status=1 ORDER BY atitle ASC";
    $rowa=mysqli_query($cn,$a) or die(mysqli_error($cn));
    // $mrowa=mysqli_fetch_all($rowa);
    // echo "<pre>".$s;print_r($mrowa);echo "</pre>";die;
    ?>
<select class="input form-control" name='article'>
<?php 
while($arow = mysqli_fetch_array($rowa)) {    
    if($arow['a_id']==$_REQUEST['aid']){$class="selected";}else{$class="";} ?>
    <option value="<?= $arow['a_id'] ?>" <?= $class ?> ><?= $arow['atitle'] ?></option>
<?php } ?>
</select>
</div>

<?php } ?>


<?php
	if(isset($_REQUEST['pid']) && $_REQUEST['pid']!=''){
			    $scnt = "SELECT count(faq_id) as count FROM faq WHERE  pid=".$_REQUEST['pid'];    
			}
			else{
			    $scnt = "SELECT count(faq_id) as count FROM faq WHERE  aid=".$_REQUEST['aid']; 
			}
// 			echo $scnt;
			$rowcnt=mysqli_query($cn,$scnt) or die(mysqli_error($cn));
			$mrowcnt=mysqli_fetch_assoc($rowcnt);
 			
?>
<div class="form-group">
  <label for="exampleInputEmail1">*Display Order</label>
  <select name="display_order" id="display_order">
    <option>Select Display Order</option>
    <?php 
    for($i=1; $i <=$mrowcnt['count']; $i++ ) {
        if($i==$mrow['display_order']){$class="selected";}else{$class="";} 
        echo '<option value="'.$i.'" '.$class.' >'.$i.'</option>';
    }
    echo '<option value="'.$i.'" selected="selected" >'.$i.'</option>';
    // foreach($mrowcnt as $val){
    //     echo '<option value="'.$val.'">'.$val.'</option>';
    // }
    //  echo '<option value="'.$val++.'" selected="selected">'.$val.'</option>';
    ?>
   </select>
</div>





<div class="form-group">
    <label for="exampleInputEmail1">*Publish</label>
      <select name="status" class="input form-control">
        <option value="<?php echo $mrow['status'];?>"><?php echo $mrow['status'];?></option>
        <!--<option value="2">Draft</option>-->
        <option value="1" selected="selected">Publish</option>
        <!--<option value="3">Featured</option>-->
        <option value="0">Inactive</option>
      </select>
</div>  

<div class="form-group">
<div class="row">
<div class="col-md-3 col-xs-6">
<input type="button" value="Cancel" class="btn btn-warning" onClick="location.href='faq_manage.php'">
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

<script>

   CKEDITOR.replace( 'answer',

	{ 

		filebrowserBrowseUrl : 'ckfinder/ckfinder.html',

        filebrowserImageBrowseUrl : 'ckfinder/ckfinder.html?Type=Images',

        filebrowserFlashBrowseUrl : 'ckfinder/ckfinder.html?Type=Flash',

		filebrowserUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',

        filebrowserImageUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',

        filebrowserFlashUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',

		extraPlugins : 'image2,uploadimage'



	});
    

        

</script>

<!-- ./wrapper -->

<script type="text/javascript">

    $('#con').multiselect({includeSelectAllOption: true, maxHeight:300});
	$('input#atitle').on('input',function(e){
		var title=$('#atitle').val();
		$.ajax({ 
				type: "POST",
				url: "slugcheck.php",
				data: {'title':title},
				success: function(html){
					$('#slugtxt').val(html);
				}	
		});		
	});

</script>

<?php include"footer.php";?>