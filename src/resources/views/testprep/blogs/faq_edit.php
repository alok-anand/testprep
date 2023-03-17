<?php include"header.php";?>

<body class="hold-transition skin-blue sidebar-mini">

<div class="wrapper">

<?php include"inner-header.php";?>
<?php include"config.php";?>

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
<?php 
while($arow = mysqli_fetch_array($rowa)) {    
    if($arow['a_id']==$_REQUEST['aid']){$class="selected";}else{$class="";} ?>
    <option value="<?= $arow['a_id'] ?>" <?= $class ?> ><?= $arow['atitle'] ?></option>
<?php } ?>
    <div class="col-md-12">

      <div class="mess"><strong>

        <?php if($_GET['msg']!=""){echo base64_decode($_GET['msg']);}?>

        </strong></div>

      <div class="box box-primary">

        <div class="box-header with-border">

          <h3 class="box-title">FAQ</h3>

        </div>

        <?php 

			if(isset($_REQUEST['qid']) && $_REQUEST['qid']!=''){
			$qid=$_REQUEST['qid'];

// 			$s="select * from pagemeta where id='$aid'";
			$s = "SELECT * FROM faq WHERE   faq_id='$qid' ORDER BY faq_id DESC";
			$row=mysqli_query($cn,$s) or die(mysqli_error($cn));
			$mrow=mysqli_fetch_assoc($row);
			
			if($mrow['pid']!='' && $mrow['pid']!=0){
			    $scnt = "SELECT count(faq_id) as count FROM faq WHERE  pid=".$mrow['pid'];    
			}
			else{
			    $scnt = "SELECT count(faq_id) as count FROM faq WHERE  aid=".$mrow['aid']; 
			}
// 			echo $scnt;
			$rowcnt=mysqli_query($cn,$scnt) or die(mysqli_error($cn));
			$mrowcnt=mysqli_fetch_assoc($rowcnt);
			
            
            }

//   echo "<pre>".$s;print_r($mrow);echo "</pre>";//die;
			?>

        <form name="f1" method="post" action="update_faq.php"  enctype="multipart/form-data" id="validate-me-plz">

          <div class="box-body">

        <div class="form-group">

              <label for="exampleInputEmail1">*Question</label>

              <input type="text" value="<?php echo $mrow['question'];?>" size=40 class="input form-control" name="question" placeholder="Question" required="" id="question">

            </div>
            <div class="form-group">

              <label for="exampleInputEmail1">*Answer</label>

              <textarea class="input form-control" name="answer" placeholder="Answer" id="answer" required=""><?php echo html_entity_decode($mrow['answer'],ENT_QUOTES);?></textarea>
            </div>
<?php //echo "<pre>";print_r($mrow);echo "<pre>"; ?>
<?php if(isset($mrow['pid']) && $mrow['pid'] !=null  && $mrow['pid'] !=0 ){ ?>
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
    if($arow['id']==$mrow['pid']){$class="selected";}else{$class="";} ?>
    <option value="<?= $arow['id'] ?>" <?= $class ?> ><?= $arow['atitle'] ?></option>
<?php } ?>
</select>
</div>
<?php } elseif(isset($mrow['aid']) && $mrow['aid'] !=''){ ?>
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
    if($arow['a_id']==$mrow['aid']){$class="selected";}else{$class="";} ?>
    <option value="<?= $arow['a_id'] ?>" <?= $class ?> ><?= $arow['atitle'] ?></option>
<?php } ?>
</select>
</div>

<?php } ?>



<?php //echo "<pre>";print_r($mrowcnt); ?>
 
            
<div class="form-group">
  <label for="exampleInputEmail1">*Display Order</label>
  <select name="display_order" id="display_order">
    <option>Select Display Order</option>
    <?php 
    // foreach($mrowcnt as $val){
    //         if($val==$mrow['display_order']){$class="selected";}else{$class="";} 
    //         echo '<option value="'.$val.'">'.$val.'</option>';
    // }
    
for($i=1; $i <=$mrowcnt['count']; $i++ ) {
    if($i==$mrow['display_order']){$class="selected";}else{$class="";} 
    echo '<option value="'.$i.'" '.$class.' >'.$i.'</option>';
}
    ?>
</select>
</div>
           
            
           
            
            <div class="form-group">

                <label for="exampleInputEmail1">Status</label>

<select name="status" id="status">
<option>Select Status</option>
<?php

if($mrow['status']==1)
{
echo'<option value="1" selected="selected">Active</option>';
echo'<option value="0">In-Active</option>';
}
else{
echo'<option value="0" selected="selected">In-Active</option>';
echo'<option value="1">Active</option>';
}
?>

</select>


            </div>     

            <div class="form-group">

              <div class="row">

                <div class="col-md-3 col-xs-6">

                  <input type="button" value="Cancel" class="btn btn-warning" onClick="location.href='manage_ielts.php'">

                </div>

                <div class="col-md-3 col-xs-6">
                <input type="hidden" value="ielts.php" size=40 class="input form-control" name="scriptname" placeholder="Title">
                  <input type="submit" value="Submit" class="btn btn-primary">
                 <input type="hidden" name="qid" value="<?php echo $_REQUEST['qid'];?>"/>
                  

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

<?php
// 	$country_q = "SELECT articles.c_id FROM ielts where a_id = ".$aid;
// 	$country_r = mysqli_query($cn, $country_q);
// 	$row = mysqli_fetch_array($country_r);
// 	$country = $row['c_id'];
?>

<script type="text/javascript">

//     $('#con').multiselect({includeSelectAllOption: true, maxHeight:300});

// 	$('#con').multiselect('select', [<?php echo $country; ?>]);
	
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