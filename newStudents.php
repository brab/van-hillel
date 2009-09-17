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
                            <td><p class="location">location: <a href="index.php">home</a> / <a href="students.php">students</a> / new students</p></td>
                            <td></td>
                        </tr>
                        <tr class="top">
                            <td><?php
									include("navStudents.html");
								?>
                            </td>
                            <td>
                            	<h1>Info for New Students</h1>
                                <h2>Getting Around Campus</h2>
                                
                                <ul>
                                <li>Book a <a href="mailto:info@vancouverhillel.ca?cc=webforms@vancouverhillel.ca&subject=Campus%20Tour&body=Name:%0AEmail:%0APhone:%0AMoving%20From:%0AFaculty:%0AYear%20of%20School:%0ACampus%20to%20Tour:%0APreferred%20Date/Time:">campus tour</a> with Vancouver Hillel.</li>
                                </ul>
                                
                                <h2>Getting Good Grades</h2>
                                
                                <ul>
                                    <li>Vancouver Hillel <a href="mailto:Pat Johnson<pat@vancouverhillel.ca>?cc=webforms@vancouverhillel.ca&subject=Hillel%20Tutor%20Referral">tutor referrals</a></li>
                                    <li><a target="_blank" href="http://tutoring.ams.ubc.ca">Tutoring at UBC</a></li>
                                    <li>Tutoring at <a target="_blank" href="http://www.sfu.ca">SFU</a>: Speak to an advisor in your faculty</li>
                                    <li><a target="_blank" href="http://careerservices.uvic.ca/tutor/index.php?mode=searchtutor">Tutoring at UVic</a></li>
                                    <li>For a <strong>free</strong> membership to the Isaac Waldman Jewish Public Library please <a href="mailto:Pat Johnson<pat@vancouverhillel.ca>?cc=webforms@vancouverhillel.ca&subject=Isaac%20Waldman%20Jewish%20Public%20Library%20Membership">email Pat</a></li>
                                </ul>
                                
                                <h2>Holiday Hosting</h2>
                                
                                <p>If you would like help in finding a warm and welcoming a family to host you for Shabbat or another Jewish holiday, we are here for you. Just <a href="holidayHostingStudents.php">let us know</a> when and we will make the arrangements.</p>
                                
                                <?php
                                    include ("jewishVanInfo.html");
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
