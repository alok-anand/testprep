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
      <li class="active">Manage IELTS Pages</li>
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
            <h3 class="box-title">Manage IELTS Pages</h3>
            <div class="align_right"><a href="ielts_add.php" alt="Add New"><i class="fa fa-plus fa-2x"></i></a></div>
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
                    <th data-field="slug" data-sortable="true">Slug</th>
                    <th data-field="type" data-sortable="true">Type </th>
                    <th data-field="faq" data-sortable="true">FAQ</th>
                    <th data-field="metatitle" data-sortable="true">Meta Title </th>
                    <!--<th data-field="metadescription" data-sortable="true">Meta Description </th>-->
                    <!--<th data-field="metakeywords" data-sortable="true">Meta Keyword </th>-->
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
    url: 'manage_ielts_data.php'
});
 function operateFormatter(value, row, index) {
        return [
            '<a class="addfaq ml10" href="manage_faq.php" title="View FAQ">',
                '<i class="glyphicon glyphicon-plus"></i>',
            '</a> &nbsp;&nbsp;&nbsp;&nbsp;',
            '<Br/><Br/><a class="edit ml10" href="ielts_edit.php" title="Edit">',
                '<i class="glyphicon glyphicon-edit"></i>',
            '</a> &nbsp;&nbsp;&nbsp;&nbsp;',
           
            // '<a class="preview ml10" href="article_preview.php" title="Preview" target="_blank">',
            //     '<i class="glyphicon glyphicon-log-in"></i>',
            // '</a>',
            ' <a class="remove ml10" href="ielts_remove.php" title="Delete Page">',
                '<i class="glyphicon glyphicon-remove"></i>',
            '</a>'
        ].join('');
    }

    window.operateEvents = {
        'click .addfaq': function (e, value, row, index) {
            var obj = jQuery.parseJSON(JSON.stringify(row));
			$(".addfaq").attr("href","manage_faq.php?pid="+obj.id);
        }
        ,'click .edit': function (e, value, row, index) {
            var obj = jQuery.parseJSON(JSON.stringify(row));
			$(".edit").attr("href","ielts_edit.php?aid="+obj.id);
        }
        
//         ,'click .preview': function (e, value, row, index) {
// 			var obj = jQuery.parseJSON(JSON.stringify(row));
// 			$(".preview").attr("href","article_preview.php?pid="+obj.slug);
//         }
        ,'click .remove': function (e, value, row, index) {
			var obj = jQuery.parseJSON(JSON.stringify(row));
			$(".remove").attr("href","ielts_remove.php?TID="+obj.id);
        }
    };
</script>