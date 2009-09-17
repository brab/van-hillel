<?php
// open directory
$dir = opendir("img/banner/");

// create banners array
$banner = array();

// populate array with banners
while (($file = readdir($dir)) !== false){
	$extension = strtolower(substr(strrchr($file,  "." ), 1));
	$supportedExtensions = array("jpg", "jpeg", "gif", "png");
	
	if (in_array($extension, $supportedExtensions) and ($file[0] != "#")) {
		$banner[] = $file;
	}
}

// close directory
closedir($dir);

// create random index number
mt_srand((double)microtime()*1000000);
$rand = mt_rand(0, count($banner)-1);

//print randomly selected banner to html code
echo '<img src="img/banner/' . $banner[$rand] . '" />';
?>