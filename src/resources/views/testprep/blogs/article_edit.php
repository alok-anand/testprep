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

      <li class="active">Edit Articles</li>

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

          <h3 class="box-title">Articles</h3>

        </div>

        <?php 

			$aid=$_REQUEST['aid'];

			$s="select * from articles where a_id='$aid'";

			$row=mysqli_query($cn,$s) or die(mysqli_error($cn));

			$mrow=mysqli_fetch_array($row);

			

			?>

        <form name="f1" method="post" action="update_articles.php"  enctype="multipart/form-data" id="validate-me-plz">

          <div class="box-body">

		  

		  

<!--<div class="form-group">-->

<!--<label for="exampleInputEmail1">*Article For Country</label>-->

<!--<div>-->

<!--<select class="input form-control" id="con" multiple="multiple" name="con[]">-->

<?php



// $co="select * from country where status='active'";

// $co_q=mysqli_query($cn,$co) or die(mysqli_error($cn));



// while($scrow=mysqli_fetch_array($co_q))

// {

// echo"<option value='".$scrow['c_id']."'> ".$scrow['c_name']."</option>";	



// }

?>

<!--</select>-->

<!--</div>-->

<!--</div>-->

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
	$selected='';
	if($mrow['author_id'] == $scrow['id']){
		$selected = 'selected';
	}
echo"<option value='".$scrow['id']."' ".$selected."> ".$scrow['a_name']."</option>";	



}

?>

</select>

		

				



</div>

</div>

		  

		  

            <div class="form-group">

              <label for="exampleInputEmail1">*Title</label>

              <input type="text" value="<?php echo $mrow['atitle'];?>" size=40 class="input form-control" name="title" placeholder="Full Name" required="" id="atitle">

            </div>
			<div class="form-group">

              <label for="exampleInputEmail1">*Slug</label>

              <input type="text" value="<?php echo $mrow['aslug'];?>" size=100 class="input form-control"  name="slug" placeholder="slug" required="" id="slugtxt">

            </div>
            
            <div class="form-group">

              <label for="exampleInputEmail1">*FAQ Title</label>

              <input type="text" value="<?php echo $mrow['faqtitle'];?>" size=100 class="input form-control"  name="faqtitle" placeholder="faqtitle" required="" id="faqtitle">

            </div>
			
			<div class="form-group">

              <label for="exampleInputEmail1">*Summery</label>

              <textarea class="input form-control" name="asummery" placeholder="Message" id="asummery" required="">

<?php echo html_entity_decode($mrow['asummery'],ENT_QUOTES);?>

</textarea>

            </div>
			

            <div class="form-group">

              <label for="exampleInputEmail1">*Description</label>

              <textarea class="input form-control" name="message" placeholder="Message" id="descr" required="">

<?php echo html_entity_decode($mrow['adescr'],ENT_QUOTES);?>

</textarea>

            </div>

            <div class="form-group">

              <label for="exampleInputEmail1">*Article Category</label>

              <div>
<select class="input form-control" name='ch'>
                <?php



$ac=explode(",",$mrow['acat']);



$catparent ="select * from blog_category where status='active' and parent = 0 ";

$scat_qparent =mysqli_query($cn,$catparent) or die(mysqli_error($cn));

// $cat="select * from blog_category where status='active'";

// $scat_q=mysqli_query($cn,$cat) or die(mysqli_error($cn));

$i=0;


while($scatrowparent=mysqli_fetch_array($scat_qparent))

{ ?>
<optgroup label="<?php echo $scatrowparent['cat_name']; ?>">
<?php 
 $cat="select * from blog_category where status='active' and parent =".$scatrowparent['cat_id'];

 $scat_q=mysqli_query($cn,$cat); 	
 while($scatrow = mysqli_fetch_array($scat_q)) {    
    if(in_array($scatrow['cat_id'],$ac)){$class="selected";}else{$class="";} ?>

     
    <option value="<?= $scatrow['cat_id'] ?>" <?= $class ?> ><?= $scatrow['cat_name'] ?></option>
 <?php } ?>
 </optgroup>
    


<?

//echo"<span><input type='checkbox' name='ch[]' ".$class." value='".$scatrow['cat_id']."'> ".$scatrow['cat_name']."&nbsp;</span>";	


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


$at=explode(",",$mrow['atag']);
$tag="select * from blog_tags where status='active'";

$stag_q=mysqli_query($cn,$tag) or die(mysqli_error($cn));
$i=0;
echo"<option value=''> Select Tag</option>";
while($stagrow=mysqli_fetch_array($stag_q))

{


    if(in_array($stagrow['tag_id'],$at)){$class="selected";}else{$class="";}
    
    echo"<option value='".$stagrow['tag_id']."' ".$class."> ".$stagrow['tag_name']."</option>";


}



?>
 
  </select>

</div>
</div>          
            
<script>$(".chosen-select").chosen({
  no_results_text: "Oops, nothing found!"
})
 
</script>            
            
            <!--<div class="form-group">-->

            <!--  <label for="exampleInputEmail1">*Article Site to be displayed on</label>-->

            <!--  <div>-->

                <?php



// $site_type = explode(",",$mrow['site_type']);

// $c_site = "select * from c_site";
// $c_site_q = mysqli_query($cn,$c_site) or die(mysqli_error($cn));
// while($c_site_r = mysqli_fetch_array($c_site_q)) {
// 	if(in_array($c_site_r['site_id'],$site_type)){$class="checked";}else{$class="";}
// 	echo"<span><input type='checkbox' name='site[]' ".$class." value='".$c_site_r['site_id']."'> ".$c_site_r['site_name']."&nbsp;</span>";
// }

?>

            <!--  </div>-->

            <!--</div>-->
            
            

            <div class="form-group">

              <label for="exampleInputEmail1">*Thumbnail Image</label>

              <input type="file" value="" size=40 class="input form-control" name="pic" >

            </div>

            <p><img src="<?php echo $path_thumb;?>/uploads/blogs/_thumbs/<?php echo $mrow['f_image'];?>" width="90px"/></p>
            
            
            <div class="form-group">

            <label for="exampleInputEmail1">Meta Title</label>

            <input type="text" value="<?php echo $mrow['meta_title'];?>" size=40 class="input form-control" name="meta_title" placeholder="Title">

            </div>


            <div class="form-group">

            <label for="exampleInputEmail1">Meta Description</label>

            <textarea class="input form-control" name="meta_message" placeholder="Message" id="meta_descr" required="">
                <?php echo html_entity_decode($mrow['meta_desc'],ENT_QUOTES);?>
            </textarea>

            </div>     

            <div class="form-group">

                <label for="exampleInputEmail1">Meta keyword</label>

                <textarea class="input form-control" name="meta_keyword" placeholder="Keyword" id="meta_keyword" required="">
                    <?php echo html_entity_decode($mrow['meta_keyword'],ENT_QUOTES);?>
                </textarea>

            </div> 
              <div class="form-group">
                <? if($mrow['featured'] == 1 ){ $class= "checked"; 
                }else{ $class= " "; }?>
                <input type="checkbox" id="featured" name="featured" value="1" <?=$class ?> >
                <label for="featured"> Featured Article</label>
   

            
                <? if($mrow['trending_link'] == 1 ){ $class= "checked"; 
                }else{ $class= " "; }?>
                <input type="checkbox" id="trending_link" name="trending_link" value="1" <?=$class ?> >
                <label for="featured"> Trending Article</label>
   

            </div>
            
            
            <div class="form-group">

                <label for="exampleInputEmail1">Status</label>

<select name="status" id="status">
<option>Select Status</option>
<?php
$s_t = "select * from articles where a_id=$aid";
$s_t_q = mysqli_query($cn,$s_t) or die(mysqli_error($cn));
$arow1=mysqli_fetch_array($s_t_q);
if($arow1['status']==1)
{
echo'<option value="1" selected>Active</option>';
echo'<option value="0">In-Active</option>';
}
else{
echo'<option value="0" selected>In-Active</option>';
echo'<option value="1">Active</option>';
}
?>

</select>


            </div>     

            <div class="form-group">

              <div class="row">

                <div class="col-md-3 col-xs-6">

                  <input type="button" value="Cancel" class="btn btn-warning" onClick="location.href='manage_articles.php'">

                </div>

                <div class="col-md-3 col-xs-6">

                  <input type="submit" value="Submit" class="btn btn-primary">

                  <input type="hidden" name="aid" value="<?php echo $mrow['a_id'];?>"/>

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
	$country_q = "SELECT articles.c_id FROM articles where a_id = ".$aid;
	$country_r = mysqli_query($cn, $country_q);
	$row = mysqli_fetch_array($country_r);
	$country = $row['c_id'];
?>

<script type="text/javascript">

    $('#con').multiselect({includeSelectAllOption: true, maxHeight:300});

	$('#con').multiselect('select', [<?php echo $country; ?>]);
	
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