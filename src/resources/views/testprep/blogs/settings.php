<?php

error_reporting (E_ALL ^ E_NOTICE);

error_reporting(0);

ini_set('session.bug_compat_warn', 0);

ini_set('session.bug_compat_42', 0);



$title="Masterprep  - Backend Administration";

$footer="&copy; Copyright Application Desk - All Rights Reserved";

$path="https://masterprep.in/";

$path1="https://masterprep.in/";
$path_thumb="https://masterprep.in/blogs";

$pathpic="https://masterprep.in/blogs/images/";

$discpath="disclogos";

$blogpath="uploads/images/blog-images";



$country_logo_path = "adm/countryimages";

$province_images = "provinceimages";



$uni_banner = "universitybanner";

$uni_gallery = "universitygallery";

$uni_banner_path = "adm/universitybanner";

$uni_gallery_path = "adm/universitygallery";

$uni_images_path = "adm/universityimages";

include_once"config.php";

$sql = "select * from settings";

$result = mysqli_query($cn,$sql) or die(mysqli_error($cn));

$row = mysqli_fetch_array($result);

$admin=$row['admin_email'];

$currency=$row['currency'];

// $title="Iapply  - Backend Administration";

// $footer="&copy; Copyright Application Desk - All Rights Reserved";

// $path="https://iappadm.iapply.io/";

// $path1="https://iappadm.iapply.io/";
// $path_thumb="https://blogs.edmissions.com/";

// $pathpic="https://iappadm.iapply.io/images/";

// $discpath="disclogos";

// $blogpath="uploads/images/blog-images";



// $country_logo_path = "adm/countryimages";

// $province_images = "provinceimages";



// $uni_banner = "universitybanner";

// $uni_gallery = "universitygallery";

// $uni_banner_path = "adm/universitybanner";

// $uni_gallery_path = "adm/universitygallery";

// $uni_images_path = "adm/universityimages";

// include_once"config.php";

// $sql = "select * from settings";

// $result = mysqli_query($cn,$sql) or die(mysqli_error($cn));

// $row = mysqli_fetch_array($result);

// $admin=$row['admin_email'];

// $currency=$row['currency'];

?>