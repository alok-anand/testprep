<?php include"header.php";?>
<!-- Bootstrap Table Files Files -->
<!-- End Bootstrap Table Filter Files -->

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<?php include"inner-header.php";?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper"> 
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <ol class="breadcrumb">
      <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Manage Articles</li>
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
            <h3 class="box-title">Manage Articles</h3>
            <div class="align_right"><a href="articles_add.php" alt="Add New"><i class="fa fa-plus fa-2x"></i></a></div>
          </div>
          <div class="row">
            <div class="col-xs-12">
              <div id="toolbar"> </div>
              <table id="articles" data-click-to-select="true" data-cache="false" data-page-size="20"
           data-toolbar="#toolbar"
           data-search="true"
           data-show-refresh="true"
           data-show-toggle="true"
           data-show-columns="true"
           data-minimum-count-columns="2"
           data-pagination="true"
           data-checkbox-header="true"
           data-maintain-selected="true"
           data-page-list="[25, 50, 100, ALL]"
          data-show-filter="true">
                <thead>
                  <tr>
                    <th data-field="state" data-radio="true"></th>
                    <th data-field="SN" data-sortable="true" data-width="2">#</th>
                    <th data-field="id" data-sortable="true" data-visible="false">ID</th>
		    <th data-field="posted" data-sortable="true" data-visible="true">Posted</th>
		    <th data-field="modified" data-sortable="true" data-visible="true">Modified</th>
                    <th data-field="title" data-sortable="true">Title </th>
                    <th data-field="country" data-sortable="true">Country</th>
                    <th data-field="category" data-sortable="true">Category </th>
                    <th data-field="meta_title" data-sortable="true">Meta Title </th>
                    <th data-field="meta_desc" data-sortable="true">Meta Description </th>
                    <th data-field="meta_keyword" data-sortable="true">Meta Keyword </th>
                    <th data-field="featured" data-sortable="true">Featured</th>
                    <th data-field="trending_link" data-sortable="true">Trending</th>
                    <th data-field="status" data-sortable="true">Status</th>
                    
                    <th data-field="operate" data-formatter="operateFormatter" data-events="operateEvents">Action</th>
                  </tr>
                </thead>
              </table>
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


<script>
var $table = $('#articles'),
    $remove = $('#remove'),
    selections = [];

$('#articles').bootstrapTable({
    url: 'manage_articles_data.php'
});
 function operateFormatter(value, row, index) {
        return [
            '<a class="edit ml10" href="testimonial_edit.php" title="Edit">',
                '<i class="glyphicon glyphicon-edit"></i>',
            '</a> &nbsp;&nbsp;&nbsp;&nbsp; ',
            
            '<a class="preview ml10" href="article_preview.php" title="Preview" target="_blank">',
                '<i class="glyphicon glyphicon-log-in"></i>',
            '</a> &nbsp;&nbsp;&nbsp;&nbsp;', 
            '<a class="addfaq ml10" href="manage_faq.php" title="View FAQ">',
                '<i class="glyphicon glyphicon-plus"></i>',
            '</a> <br/><br/><br/>', 
            '<a class="remove ml10" href="testimonial_remove.php" title="Delete Article">',
                '<i class="glyphicon glyphicon-remove"></i>',
            '</a>'
            
        ].join('');
    }

    window.operateEvents = {
        'click .edit': function (e, value, row, index) {
            var obj = jQuery.parseJSON(JSON.stringify(row));
			$(".edit").attr("href","article_edit.php?aid="+obj.id);
        },
        'click .preview': function (e, value, row, index) {
			var obj = jQuery.parseJSON(JSON.stringify(row));
			$(".preview").attr("href","article_preview.php?aid="+obj.slug);
        },
        'click .addfaq': function (e, value, row, index) {
            var obj = jQuery.parseJSON(JSON.stringify(row));
			$(".addfaq").attr("href","manage_faq.php?aid="+obj.id);
        },
        'click .remove': function (e, value, row, index) {
			var obj = jQuery.parseJSON(JSON.stringify(row));
			$(".remove").attr("href","article_remove.php?TID="+obj.id);
        }
    };
</script>