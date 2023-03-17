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

      <li class="active">Edit Page</li>

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

          <h3 class="box-title">Page</h3>

        </div>

        <?php 

			$aid=$_REQUEST['aid'];

// 			$s="select * from pagemeta where id='$aid'";
			$s = "SELECT * FROM cms_page 
LEFT JOIN pagemeta ON (cms_page.page_id=pagemeta.id)
WHERE   pagemeta.id='$aid' ORDER BY cms_page.page_id DESC";

			$row=mysqli_query($cn,$s) or die(mysqli_error($cn));

			$mrow=mysqli_fetch_array($row);

// 			print_r($mrow);die;

			?>

        <form name="f1" method="post" action="update_ielts.php"  enctype="multipart/form-data" id="validate-me-plz">

          <div class="box-body">

        <div class="form-group">

              <label for="exampleInputEmail1">*Title</label>

              <input type="text" value="<?php echo $mrow['atitle'];?>" size=40 class="input form-control" name="title" placeholder="Full Name" required="" id="atitle">

            </div>
			<div class="form-group">

              <label for="exampleInputEmail1">*Slug</label>

              <input type="text" value="<?php echo $mrow['slug'];?>" size=100 class="input form-control"  name="slug" placeholder="slug" required="" id="slugtxt">

            </div>
			
			<div class="form-group">

              <label for="exampleInputEmail1">*Title H1 Tag</label>

              <input type="text" value="<?php echo $mrow['h1tag'];?>" size=100 class="input form-control"  name="h1tag" placeholder="slug" required="" id="h1tag">

            </div>
            
            <div class="form-group">

              <label for="exampleInputEmail1">*Short Description</label>

              <textarea class="input form-control" name="shortdescription" placeholder="Message" id="shortdescription" required=""><?php echo html_entity_decode($mrow['shortdescription'],ENT_QUOTES);?></textarea>

            </div>
			

            <div class="form-group">

              <label for="exampleInputEmail1">*Description</label>

              <textarea class="input form-control" name="content" placeholder="Message" id="descr" required="">

<?php echo html_entity_decode($mrow['content'],ENT_QUOTES);?>

</textarea>

            </div>

			<div class="form-group">

              <label for="exampleInputEmail1">*FAQ Title</label>

              <input type="text" value="<?php echo $mrow['faqtitle'];?>" size=100 class="input form-control"  name="faqtitle" placeholder="faqtitle" required="" id="faqtitle">

            </div>



            <div class="form-group">

              <label for="exampleInputEmail1">*Article Category</label>

              <div>
<select class="input form-control" name='type'>
    <option value="IELTS" <?=($mrow['type']=='IELTS')? ' selected="selected"': ''?> >IELTS</option>
    <option value="Canada" <?=($mrow['type']=='Canada')? ' selected="selected"': ''?>>Canada</option>
    <option value="USA" <?=($mrow['type']=='USA')? ' selected="selected"': ''?>>USA</option>
    <option value="UK" <?=($mrow['type']=='UK')? ' selected="selected"': ''?>>UK</option>
    <option value="Australia" <?=($mrow['type']=='Australia')? ' selected="selected"': ''?>>Australia</option>
          <option value="New Zealand">New Zealand</option>
          
          <option value="IMM-Canada">IMM-Canada</option>
          <option value="IMM-USA">IMM-USA</option>
          <option value="IMM-UK">IMM-UK</option>
          <option value="IMM-Australia">IMM-Australia</option>
          <option value="IMM-New-Zealand">IMM New Zealand</option>
          
    
                <?php /*



 $ac=explode(",",$mrow['type']);



$catparent ="select * from blog_category where status='active' and parent = 0 ";

$scat_qparent =mysqli_query($cn,$catparent) or die(mysqli_error($cn));

$i=0;

while($scatrow = mysqli_fetch_array($scat_qparent)) {    
    if(in_array($scatrow['cat_id'],$ac)){$class="selected";}else{$class="";} ?>

     
    <option value="<?= $scatrow['cat_name'] ?>" <?= $class ?> ><?= $scatrow['cat_name'] ?></option>
 <?php }*/ ?>
 </select>
              </div>

            </div>
            
 
            

           
            
            <div class="form-group">

            <label for="exampleInputEmail1">Meta Title</label>

            <input type="text" value="<?php echo $mrow['metatitle'];?>" size=40 class="input form-control" name="metatitle" placeholder="Title">

            </div>


            <div class="form-group">

            <label for="exampleInputEmail1">Meta Description</label>

            <textarea class="input form-control" name="metadescription" placeholder="Message" id="meta_descr" required=""><?php echo $mrow['metadescription'];?></textarea>

            </div>     

            <div class="form-group">

                <label for="exampleInputEmail1">Meta keyword</label>

                <textarea class="input form-control" name="metakeywords" placeholder="Keyword" id="meta_keyword" required=""><?php echo $mrow['metakeywords'];?></textarea>

            </div> 


			
              
            
            <div class="form-group">

                <label for="exampleInputEmail1">Status</label>

<select name="status" id="status">
<option>Select Status</option>
<?php

if($mrow['active']==1)
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

                  <input type="hidden" name="aid" value="<?php echo $_REQUEST['aid'];?>"/>

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

   

    CKEDITOR.replace( 'descr',

	{ 

		filebrowserBrowseUrl : 'ckfinder/ckfinder.html',

        filebrowserImageBrowseUrl : 'ckfinder/ckfinder.html?Type=Images',

        filebrowserFlashBrowseUrl : 'ckfinder/ckfinder.html?Type=Flash',

		filebrowserUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',

        filebrowserImageUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',

        filebrowserFlashUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',

		extraPlugins : 'image2,uploadimage'



	});
	
	CKEDITOR.replace( 'asummery',

	{ 

		filebrowserBrowseUrl : 'ckfinder/ckfinder.html',

        filebrowserImageBrowseUrl : 'ckfinder/ckfinder.html?Type=Images',

        filebrowserFlashBrowseUrl : 'ckfinder/ckfinder.html?Type=Flash',

		filebrowserUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',

        filebrowserImageUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',

        filebrowserFlashUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',

		extraPlugins : 'image2,uploadimage'



	});
         
        
        
         CKEDITOR.replace( 'meta_descr',

	{ 

		filebrowserBrowseUrl : 'ckfinder/ckfinder.html',

        filebrowserImageBrowseUrl : 'ckfinder/ckfinder.html?Type=Images',

        filebrowserFlashBrowseUrl : 'ckfinder/ckfinder.html?Type=Flash',

		filebrowserUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',

        filebrowserImageUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',

        filebrowserFlashUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',

		extraPlugins : 'image2,uploadimage'



	});
        
        
    CKEDITOR.replace( 'meta_keyword',

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