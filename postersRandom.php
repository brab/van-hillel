<?php 
if($path == ""){
	echo '<p>No Image</p>';
}

// open directory
$dir = opendir($path);

// create poster array
$poster = array();

$count = 0;
$arrSize = 0;
$supportedExtensions = array("jpg", "jpeg", "gif", "png");

// iterate through directory
while ((($file = readdir($dir)) !== false)){
	$extension = strtolower(substr(strrchr($file,  "." ), 1));
	
	if (in_array($extension, $supportedExtensions) and ($file[0] != "#")) {		
		$poster[] = $file;
		$arrSize ++;
	}
}

// close directory
closedir($dir);

// randomize the order of posters in the array
shuffle($poster);

while( ($count < $maxPosters) && (($img = $poster[$count]) != '') ){
	$img = $poster[$count];
	
	// strip extension
	$nameProper = substr($img, 0, (strpos($img, ".")));
	
	// print the link and image tags in html
	echo '<a href="' . $_SERVER['SERVER_ADDR'] . '/v2/' . $nameProper . '.php"><img class="poster" src="' . $path . $img . '" /></a>';
	
	$count ++;	
}
?>