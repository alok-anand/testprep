<?php
include('config.php');
include('functions.php');
// $query = "select * from pagemeta order by id desc";

$query = "SELECT * FROM cms_page 
LEFT JOIN pagemeta ON (cms_page.page_id=pagemeta.id)
 ORDER BY pagemeta.modified DESC";


$SN = 1;
$r = @mysqli_query($cn,$query) or die (mysqli_error($cn));
while ($row = mysqli_fetch_array($r))
{
	$c_name = "";
	
// 	echo "<pre>";print_r($row);
	//$text = substr(html_entity_decode($row['adescr'],ENT_QUOTES),200,130);
	$cat=blog_category($row['acat'],$cn);
	$astatus='';
	if($row['status']==1)
	{
		$astatus='Active';
	}
	else{
		$astatus='In-Active';
	}
	$udate='';
	if(!empty($row['modified']))
	{
		$udate=date('d-m-Y h:i:s',strtotime($row['modified']));	
	}	
	
		$sc[] = array(
			'SN' => $SN++,
			'id' => $row['id'],
			'type' => $row['type'],
			'posted' => date('d-m-Y h:i:s',strtotime($row['created'])),
			'modified' => $udate,
			'title' => $row['atitle'],
			'slug' => $row['slug'],
			'metatitle' => html_entity_decode($row['metatitle']),
			'metadescription' => html_entity_decode($row['metadescription']),
			'metakeywords' => html_entity_decode($row['metakeywords']),
			
			'status' => $row['active'],
			
			
			
		  );

}
mysqli_close($cn);
// echo "<pre>";print_r($sc);

echo json_encode($sc);
?>