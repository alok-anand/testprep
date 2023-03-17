<?php include"header.php";?>
<style>
fieldset {
    border: 1px solid #ddd !important;
    margin: 0;
    xmin-width: 0;
    padding: 10px;
    position: relative;
    border-radius: 4px;
    background-color: #f5f5f5;
    padding-left: 10px !important;
    margin-bottom: 20px;
}

legend {
    font-size: 17px;
    font-weight: bold;
    margin-bottom: 0px;
    width: 35%;
    border: 1px solid #ddd;
    border-radius: 4px;
    padding: 5px 5px 5px 10px;
    background-color: #ffffff;
}
.error{
    float:left;
    width:100%;
	font-size: 14px;
	font-weight:normal;
	
}
#intake_listing-error{
	position: absolute;
	top: 27px;
}
</style>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <?php include"inner-header.php";
include "config.php";
?>
        


        
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <ol class="breadcrumb">
                    <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
                    <li><a href="author-update-info.php"><i class="fa fa-dashboard"></i> Manage Author</a></li>
                    <li class="active">Author Update Information</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <!-- Info boxes -->
                <div class="row">
                    <div class="col-md-12">
                        <div id="div_success"></div>
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">Author Information Updation </h3>
                                <!--<p>Entered Points  will be update on university as well as all programs of university</p>-->
                            </div>
                            <?php if(isset($_REQUEST['msg']) && !empty($_REQUEST['msg']) ) {  ?> 
                            <p style="text-align:center;color:red;"><?php echo base64_decode($_REQUEST['msg']); ?></p>
                            <?php 
                            } 
                            ?>
                            <form name="prgm_add_form" action="author_update_info_save.php" method="post"
                                enctype="multipart/form-data" id="validate-me-plz">
                                <div class="box-body">
                                    <fieldset>
                                        <legend>Information Updation</legend>
										<div class="row">
											<div class="col-md-6 col-xs-12">
												<div class="form-group">
													<label for="counrty">*Author Name</label>
													<select name="author" class="input form-control" required=""
														id="author" onChange="show_author_info(this.value);">
														<option value=''>Select Author</option>
														<?php
														
														$author_q = "select id, a_name from articles_author order by a_name ASC";
														$author_q_r = mysqli_query($cn,$author_q) or die(mysqli_error($cn));
														while($author_row = mysqli_fetch_assoc($author_q_r))
														{
														?>
														  <option value="<?php echo $author_row['id'];?>"><?php echo $author_row['a_name'];?></option>
														  <?php 
														}
														?>
													</select>
												</div>
											</div>
											<div class="col-md-6 col-xs-12"></div>
                                        </div>
										<div class="row">
											<div class="col-md-12 col-xs-12">
												<div class="form-group">
													<label for="counrty">*Description</label>
													<textarea id="info" name="info" class="input form-control"></textarea>
												</div>	
											</div>
										</div>
										
										
          
          <!-- end of Toefl score condition-->       
  
          <!-- end of score condition-->
          </fieldset>
										
										</div>

                                        <div class="col-md-12 col-xs-12">
                                            <div class="form-group">
                                                <!--<div class="col-md-4 col-xs-6 mtop">
                                                    <p>
                                                        <input type="button" value="Cancel" class="btn btn-warning"
                                                            onClick="location.href='intake-update.php'">
                                                    </p>
                                                </div>-->
                                                <div class="col-md-12 col-xs-6 mtop">
                                                    <p>
														<input type="button" value="Cancel" class="btn btn-warning"
                                                            onClick="location.href='author-update-info.php'">
                                                        <input type="submit" value="Submit" class="btn btn-primary">
                                                    </p>
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
        <script type="text/javascript">
        CKEDITOR.replace( 'info',
		{ 
			//skin : 'office2003',
			//toolbar : 'MyToolbar',
			filebrowserBrowseUrl : 'ckfinder/ckfinder.html',
			filebrowserImageBrowseUrl : 'ckfinder/ckfinder.html?Type=Images',
			filebrowserFlashBrowseUrl : 'ckfinder/ckfinder.html?Type=Flash',
			filebrowserUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
			filebrowserImageUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
			filebrowserFlashUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
			extraPlugins : 'texttransform'
		});	   
		function show_author_info(ids)
		{
			$.ajax({
			   type: "POST",
			   url: "author_template.php",
			   data: "id="+ids,
			   beforeSend: function () {
					$(".loader").show();
			   },
			   success: function(data)
			   {
				  //console.log(data);
				   $(".loader").hide();
				   //$("#remark_text").html(data);
				   //$("#remark_text").val(data);
				   CKEDITOR.instances['info'].setData(data);

					
			   }
			});
		}
        </script>
        <!-- ./wrapper -->
        <?php include"footer.php";?>