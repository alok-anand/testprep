<?php
include('config.php');
include('functions.php');
$query = "select * from articles order by a_id desc";
$SN = 1;
$r = @mysqli_query($cn,$query) or die (mysqli_error($cn));
while ($row = mysqli_fetch_array($r))
{
	$c_name = "";
	$country = explode(',', $row['c_id']);
	foreach($country as $value) {
		$c_query = "select c_name from country where c_id = ".$value;
		$c_r = mysqli_query($cn,$c_query);
		$c_row = mysqli_fetch_array($c_r);
		$c_name .= $c_row['c_name'].", ";
	}
	
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
	if($row['trending_link']==1)
	{
		$trending_link='Trending';
	}
	else{
		$trending_link='-';
	}
	
	if($row['featured']==1)
	{
		$featured='Featured';
	}
	else{
		$featured='-';
	}
	
	$udate='';
	if(!empty($row['udate']))
	{
		$udate=date('d-m-Y h:i:s',strtotime($row['udate']));	
	}	
	
		$sc[] = array(
			'SN' => $SN++,
			'id' => $row['a_id'],
			'slug' => $row['aslug'],
			'posted' => date('d-m-Y h:i:s',strtotime($row['adate'])),
			'modified' => $udate,
			'title' => $row['atitle'],
			//'t_image' => '<img src="testimonials_images/'.$row['t_image'].'">',
			'country' => $c_name,
			
			'status' => $astatus,
			'featured' => $featured,
			'trending_link' => $trending_link,
			'category' => $cat,
                        'meta_title' => $row['meta_title'],
                        'meta_desc'  => html_entity_decode($row['meta_desc'],ENT_QUOTES),
                        'meta_keyword' => html_entity_decode($row['meta_keyword'],ENT_QUOTES)
			
		  );

}
mysqli_close($cn);
// echo "<pre>";print_r($sc);die;
echo json_encode($sc);
?>