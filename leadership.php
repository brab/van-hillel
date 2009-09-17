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
                            <td><p class="location">location: <a href="index.php">home</a> / <a href="students.php">students</a> / leadership awards</p></td>
                            <td></td>
                        </tr>
                        <tr class="top">
                            <td id="nav"><?php
									include("navStudents.html");
								?>
                            </td>
                            <td id="content">
                            	<h1>Recognition of Outstanding Leadership</h1>
            
                                <p>Vancouver Hillel is a dynamic student organization that cultivates engaged, informed, empowered student leaders. To recognize these leaders and their accomplishments, Vancouver Hillel hosts an awards evening to honour these hard-working students in front of their friends, families and peers.</p>
                                
                                <h2>Annual Vancouver Hillel leadership awards include:</h2>
                                
                                <ul>
                                    <li>The Ben Dayson B’nai Brith Award for Citizenship</li>
                                    <li>The Leon Kahn B’nai Brith Award for Israel Advocacy</li>
                                    <li>The Irv Epstein B’nai Brith Award for Achievement in Combating Hatred and Defamation</li>
                                    <li>The Mordehai and Hana Wosk Leadership Award for Distinction in Israel Programming</li>
                                    <li>The Mordehai and Hana Wosk Leadership Award for Distinction in Jewish Programming</li>
                                    <li>The Mordehai and Hana Wosk Leadership Award for Distinction in Tzedakah and Tikun Olam</li>
                                    <li>The Mordehai and Hana Wosk Leadership Award for Distinction in Service</li>
                                    <li>The Mordehai and Hana Wosk Leadership Award for Senior Student Exemplar</li>
                                    <li>The Vancouver Hillel Award for Leadership in Philanthropy</li>
                                    <li>Special Commendations</li>
                                </ul>
                                
                                <p>Vancouver Hillel leadership awards are extremely prestigious; the nomination process for Vancouver Hillel leadership awards is intensive and rewarding.</p>
                                
                                <p>Each year we award outstanding members of Hillel and campus partners at our Annual Jewno Awards.</p>
                                
                                <h2><a href="img/jewnoAwards2008.pdf" target="_blank">See the winning student leaders of 2008-09</a> (Adobe Acrobat pdf)</h2>
                            </td>
                            <td id="posters">
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
