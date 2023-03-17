<?php
if(isset($_REQUEST['pid'])){
    $qstr="?pid=".$_REQUEST['pid'];
}
elseif(isset($_REQUEST['aid'])){
    $qstr="?aid=".$_REQUEST['aid'];
}
?>
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
<?php
if(isset($_REQUEST['pid']) && $_REQUEST['pid']!=''){
    $pagetitle="Manage Page FAQs";
echo '<li><a href="ielts_manage.php"><i class="fa fa-edit"></i> Manage Pages</a></li>';
}
else{
    $pagetitle="Manage Article FAQs";
echo '<li><a href="manage_articles.php"><i class="fa fa-edit"></i> Manage Article</a></li>';
}
?>
      <li class="active">Manage FAQs</li>
    </ol>
  </section>
  
  <!-- Main content -->
  <section class="content"> 
    <!-- Info boxes -->
    <div class="row">
      <div class="col-md-12">
        <div class="mess"><strong>
          <?php 
        //   echo base64_decode($_GET['msg']);//die;
          if($_GET['msg']!=""){echo base64_decode($_REQUEST['msg']);}?>
          </strong></div>
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title"><?=$pagetitle?></h3>
            <div class="align_right"><a href="faq_add.php<?=$qstr?>" alt="Add FAQ"><i class="fa fa-plus fa-2x"></i></a></div>
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
                     <th data-field="question" data-sortable="true">Question </th>
                    <th data-field="answer" data-sortable="true">Answer</th>
                    <th data-field="aid" data-sortable="true">Article ID </th>
                    <th data-field="pid" data-sortable="true">Page ID </th>
                    <th data-field="id" data-sortable="true" data-visible="false">ID</th>
		    <th data-field="dorder" data-sortable="true" data-visible="true">Display Order</th>
		    <th data-field="modified" data-sortable="true" data-visible="true">updated</th>
                   
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

<?php
if(isset($_REQUEST['pid'])){
    $qstr="?pid=".$_REQUEST['pid'];
}
else{
    $qstr="?aid=".$_REQUEST['aid'];
}
?>
<script>
var $table = $('#articles'),
    $remove = $('#remove'),
    selections = [];

$('#articles').bootstrapTable({
    url: 'manage_faq_data.php<?=$qstr?>'
});
 function operateFormatter(value, row, index) {
        return [
            '<a class="edit ml10" href="faq_edit.php" title="Edit">',
                '<i class="glyphicon glyphicon-edit"></i>',
            '</a> &nbsp;&nbsp;&nbsp;',
            '<a class="remove ml10" href="faq_remove.php" title="Remove">',
                '<i class="glyphicon glyphicon-remove"></i>',
            '</a>'
        ].join('');
    }

    window.operateEvents = {
        'click .edit': function (e, value, row, index) {
            var obj = jQuery.parseJSON(JSON.stringify(row));
			$(".edit").attr("href","faq_edit.php?qid="+obj.id);
        },
        'click .remove': function (e, value, row, index) {
			var obj = jQuery.parseJSON(JSON.stringify(row));
			$(".remove").attr("href","faq_remove.php?<?=$qstr?>&TID="+obj.id);
        }
    };
</script>