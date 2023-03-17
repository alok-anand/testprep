<?php
include('config.php');
include('functions.php');
// $query = "select * from pagemeta order by id desc";
// echo $_REQUEST['aid']=4;

// echo $_REQUEST['pid'];die;

if(isset($_REQUEST['pid'])){
    $qstr="?pid=".$_REQUEST['pid'];
     $query = "SELECT * FROM faq WHERE pid= ".$_REQUEST['pid']." ORDER BY faq.modified DESC";
}
// elseif(isset($_REQUEST['aid'])){
//     $qstr="?aid=".$_REQUEST['aid'];
//      $query = "SELECT * FROM faq WHERE aid= ".$_REQUEST['aid']." ORDER BY faq.modified DESC";
// }
else{
    $qstr="?aid=".$_REQUEST['aid'];
     $query = "SELECT * FROM faq WHERE aid= ".$_REQUEST['aid']." ORDER BY faq.modified DESC";
}

// echo $query;die;

// die;

$SN = 1;
$r = @mysqli_query($cn,$query) or die (mysqli_error($cn));
while ($row = mysqli_fetch_array($r))
{
	$c_name = "";
	
//  	echo "<pre>";print_r($row);die;
	//$text = substr(html_entity_decode($row['adescr'],ENT_QUOTES),200,130);
// 	$cat=blog_category($row['acat'],$cn);
	$astatus='';
	if($row['status']==1)
	{
		$astatus='Active';
	}
	else{
		$astatus='In-Active';
	}
// 	$udate='';
	if(!empty($row['modified']))
	{
		$udate=date('d-m-Y h:i:s',strtotime($row['modified']));	
	}	
	
		$sc[] = array(
			'SN' => $SN++,
			'id' => $row['faq_id'],
			'aid' => $row['aid'],
			'pid' => $row['pid'],
			'posted' => date('d-m-Y h:i:s',strtotime($row['created'])),
			'modified' => $udate,
			'question' => $row['question'],
			
			'answer' => html_entity_decode($row['answer'],ENT_QUOTES),
			'dorder' => $row['display_order'],
			'status' => ($row['status']==1) ? 'Active':'InActive',
			
			
			
		  );

}
if(empty($sc)){
    $sc = '';
}
mysqli_close($cn);
//  echo "<pre>";print_r($sc);//die;


echo json_encode($sc);
?>