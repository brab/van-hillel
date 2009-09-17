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
                            <td><p class="location">location: <a href="index.php">home</a> / <a href="students.php">students</a> / sfu</p></td>
                            <td></td>
                        </tr>
                        <tr class="top">
                            <td id="nav"><?php
									include("navStudents.html");
								?>
                            </td>
                            <td id="content">
                            	<h1>SFU Hillel House</h1>
            
                                <p>Hillel House at SFU, opened in 2005, is a magnificent, warm, accommodating space in one of the finest buildings on campus. Located in Suite 118 in the Cornerstone Building, Hillel House is a few steps away from the Academic Quadrangle, the Bennett Library and most of SFU’s student services and classrooms. Large windows, comfy leather couches and plenty of space for social interaction or private study give the SFU Hillel House the cozy feeling a Jewish home on campus should have. With a kosher kitchen, a TV and student computers and printers, SFU Hillel House is an awesome place to spend time but SFU Hillel is also a focal point of spiritual, social, recreational and educational programs for Jewish students and the entire campus community.</p>
                                
                                <h2>SFU Hillel hosts regular weekly programs:</h2>
                                
                                <ul>
                                    <li>Monday "Beer and Nachos"</li>
                                    <li>Wednesday Hot Lunch</li>
                                    <li>Free Hebrew lessons</li>
                                </ul>
                                
                                <p><a href="mailto:pat@vancouverhillel.ca">Contact Pat Johnson</a>, SFU Director to be a part of it.</p>
                            </td>
                            <td id="posters">
                            	<a href="http://www.facebook.com/group.php?gid=84671063955" target="_blank"><img src="img/facebook.jpg" /></a> <br />
                                <iframe src="http://www.google.com/calendar/embed?showNav=0&amp;showDate=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;mode=AGENDA&amp;height=300&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=7h8ts64efn5pr23len9g070bis%40group.calendar.google.com&amp;color=%230D7813&amp;src=ld55gjikj3n5j1vimgm288mhvk%40group.calendar.google.com&amp;color=%237A367A&amp;ctz=America%2FVancouver" style=" border-width:0; margin-bottom: 5px " width="240" height="300" frameborder="0" scrolling="no"></iframe>
                                
                                <?php
                                    $maxPosters = 1;
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
