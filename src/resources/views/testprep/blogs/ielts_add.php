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

        <li class="active">Course Page</li>

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

              <h3 class="box-title">Course Pages</h3>

            </div>

			



<form name="f1" method="post" action="add-ielts.php"  enctype="multipart/form-data" id="validate-me-plz">

 <div class="box-body">



 

<div class="form-group">

<label for="exampleInputEmail1">*Page For Course</label>

<div>

<!--<select class="input form-control" id="con" multiple="multiple" name="con[]">-->

<?php



// $co="select * from country where status='active'";

// $co_q=mysqli_query($cn,$co) or die(mysqli_error($cn));



// while($scrow=mysqli_fetch_array($co_q))

// {

// echo"<option value='".$scrow['c_id']."'> ".$scrow['c_name']."</option>";	



// }

?>

</select>

		

				



</div>

</div>

<?php /* ?>
<div class="form-group">

<label for="exampleInputEmail1">*Article Author</label>

<div>

<select class="input form-control"  name="author_id">

<?php



$co="select id,a_name from articles_author ";

$co_q=mysqli_query($cn,$co) or die(mysqli_error($cn));

echo"<option value=''> Select Author</option>";	

while($scrow=mysqli_fetch_array($co_q))

{

echo"<option value='".$scrow['id']."'> ".$scrow['a_name']."</option>";	



}

?>

</select>

		

				



</div>

</div>


<div class="form-group">

<label for="exampleInputEmail1">*Article Tags</label>
<div>
<select data-placeholder="Begin typing a name to filter..."  multiple class="chosen-select input form-control" name="article_tags[]" >
    <option value=""></option>
   <?php



$co="select tag_id,tag_name from blog_tags ";

$co_q=mysqli_query($cn,$co) or die(mysqli_error($cn));

echo"<option value=''> Select Tag</option>";	

while($scrow=mysqli_fetch_array($co_q))

{

echo"<option value='".$scrow['tag_id']."'> ".$scrow['tag_name']."</option>";	



}

?>
 
  </select>

</div>
</div>

<script>$(".chosen-select").chosen({
  no_results_text: "Oops, nothing found!"
})
 
</script>
<?php */ ?>
 <div class="form-group">

<label for="exampleInputEmail1">*Title</label>

<input type="text" value="" size=40 class="input form-control" name="atitle" placeholder="Full Name" required="" id="atitle"></div>


<div class="form-group">

<label for="exampleInputEmail1">*Slug</label>

<input type="text" value="" size=100 class="input form-control" name="slug" placeholder="slug" required=""  id="slugtxt"></div>


<div class="form-group">
<label for="exampleInputEmail1">*Title H1 Tag</label>
<input type="text" value="" size=100 class="input form-control" name="h1tag" placeholder="h1tag" required=""  id="h1tag"></div>



<div class="form-group">

<label for="exampleInputEmail1">*Short Description</label>

<textarea class="input form-control" name="shortdescription" placeholder="Message" id="shortdescription" required=""></textarea></div>




<div class="form-group">

<label for="exampleInputEmail1">*Content</label>

<textarea class="input form-control" name="content" placeholder="Message" id="descr" required=""></textarea></div>

<div class="form-group">

<label for="exampleInputEmail1">*FAQ Title</label>

<input type="text" value="" size=100 class="input form-control"  name="faqtitle" placeholder="faqtitle" required="" id="faqtitle">

</div>



        
        <div class="form-group">
        <label for="exampleInputEmail1">*Course Category</label>
        
        <div>
        
        
        
        
        <select class="input form-control" name='type'>
                 <option value="IELTS">IELTS</option>
                  <option value="Canada">Canada</option>
                  <option value="USA">USA</option>
                  <option value="UK">UK</option>
                  <option value="Australia">Australia</option>
                  <option value="New Zealand">New Zealand</option>
          <option value="IMM-Canada">IMM-Canada</option>
          <option value="IMM-USA">IMM-USA</option>
          <option value="IMM-UK">IMM-UK</option>
          <option value="IMM-Australia">IMM-Australia</option>
          <option value="IMM-New-Zealand">IMM New Zealand</option>

                 
        
        
        <?php /*
        $catparent ="select * from blog_category where status='active' and parent = 0 ";

        $scat_qparent =mysqli_query($cn,$catparent) or die(mysqli_error($cn));

        while($scatrowparent=mysqli_fetch_array($scat_qparent))
        
        { 
        ?>
         <option value="<?= $scatrowparent['cat_name'] ?>" ><?= $scatrowparent['cat_name'] ?></option>
         <?php 
        }*/
        ?>
        </select>
        </div>
        

</div>


<div class="form-group">

<label for="exampleInputEmail1">Meta Title</label>

<input type="text" value="" size=40 class="input form-control" name="metatitle" placeholder="Title">

</div>

<div class="form-group">

<label for="exampleInputEmail1">Meta Description</label>

<textarea class="input form-control" name="metadescription" placeholder="Message" id="meta_descr" required=""></textarea>

</div>     
     
<div class="form-group">

    <label for="exampleInputEmail1">Meta keyword</label>

    <textarea class="input form-control" name="metakeyword" placeholder="Keyword" id="meta_keyword" required=""></textarea>

</div>          


<div class="form-group">
    <label for="exampleInputEmail1">*Publish</label>
      <select name="status" class="input form-control">
        <option value="<?php echo $mrow['status'];?>"><?php echo $mrow['status'];?></option>
        <!--<option value="2">Draft</option>-->
        <option value="1">Publish</option>
        <!--<option value="3">Featured</option>-->
        <option value="0">Inactive</option>
      </select>

</div>  

<div class="form-group">

<div class="row">

<div class="col-md-3 col-xs-6">
<input type="hidden" value="ielts.php" size=40 class="input form-control" name="scriptname" placeholder="Title">

<input type="button" value="Cancel" class="btn btn-warning" onClick="location.href='ielts_manage.php'">

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