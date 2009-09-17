<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Vancouver Hillel :: The Foundation For Jewish Campus Life</title>
<link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="css/normal.css" />
<link rel="alternate stylesheet" type="text/css" media="screen" title="mdFont" href="css/mdFont.css" />
<link rel="alternate stylesheet" type="text/css" media="screen" title="lgFont" href="css/lgFont.css" />
<script src="styleswitch.js" type="text/javascript">

/***********************************************
* Style Sheet Switcher v1.1- © Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for this script and 100s more
***********************************************/

</script>
</head>
<body>
<div id="top-shadow"></div>
<div id="main-shadow">
    <div id="mainDiv" class="left">
        <table width="100%">
            <tr>
                <td><?php
						include("head.php");
					?>
                </td>
            </tr>
            <tr>
                <td><table>
                        <col width="190px" />
                        <col width="500px" />
                        <col width="250px" />
                        <tr>
                            <td></td>
                            <td><p class="location">location: <a href="index.php">home</a> / <a href="students.php">students</a> / photos</p></td>
                            <td></td>
                        </tr>
                        <tr class="top">
                            <td><?php
									include("navStudents.html");
								?>
                            </td>
                            <td>
                            	<?php
									$path = "img/photoGallery/";
									$dir = opendir($path);
									
									//echo '$path: ' . $path . '<br />';
									
									$supportedExtensions = array("jpg", "jpeg", "gif", "png");
									
									while ( ($folder = readdir($dir)) !== false ) {
										
										
										if ( ($folder == '.') || ($folder == '..') ) {
											//echo 'skipping folder: ' . $path . $folder . '<br />';
										}
										else {
											//echo '$folder: ' . $path . $folder . '<br />' . '  this is when I should do something...<br />';
											
											//echo $path . $folder . "/ <br />";
											$galleryDir = opendir($path . $folder . "/");
											readdir($galleryDir);
											readdir($galleryDir);
											if (($image = readdir($galleryDir)) !== false) {
												//echo 'folder opened, image read... <br />';
												$extension = strtolower(substr(strrchr($image,  "." ), 1));
												//echo 'image: ' . $image . '<br />extension: ' . $extension . '<br />';							
												
												if (in_array($extension, $supportedExtensions) and ($image[0] != "#")) {
													echo '<div class="gallery"><a href="' . $path . $folder . '/gallery.php"><img class="thumbnail" src="' . $path . $folder . '/' . $image . '" /><br />' . $folder . '</a></div>';
												}
												/*closedir($galleryDir);*/
											}
										}
									}
									
								?>
                            </td>
                            <td>
                            	<a href="http://www.facebook.com/group.php?gid=84671063955" target="_blank"><img src="img/facebook.jpg" /></a> <br />
                            	<?php
									$maxPosters = 2;
									$path = "img/poster/students/";
									include ("postersRandom.php");
								?>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2"><p class="footer">&#169 2009 Vancouver Hillel Foundation</p></td>
                        </tr>
                    </table></td>
            </tr>
        </table>
    </div>
</div>
<div id="bottom-shadow"></div>
<div id="bottom">
    <?php
		include("foot.html");
	?>
</div>
</body>
</html>
