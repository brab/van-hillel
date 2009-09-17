<?php 
if($path == ""){
	echo '<p>No Image</p>';
}

// open directory
$dir = opendir($path);

// create poster array
$poster = array();

$count = 0;
$supportedExtensions = array("jpg", "jpeg", "gif", "png");

// iterate through directory
while ((($file = readdir($dir)) !== false)){
	$extension = strtolower(substr(strrchr($file,  "." ), 1));
	
	if (in_array($extension, $supportedExtensions) and ($file[0] != "#")) {		
		$poster[] = $file;
	}
}

// close directory
closedir($dir);

// order the posters in the array
sort($poster);

while( ($count < $maxPosters) && (($img = $poster[$count]) != '') ){

	// strip first character (display sort order character) and extension
	$nameProper = substr($img, 1, (strpos($img, ".")-1));
	
	// print the link and image tags in html
	echo '<a href="' . $nameProper . '.php"><img class="poster" src="' . $path . $img . '" /></a>';
	
	$count ++;	
}
?>