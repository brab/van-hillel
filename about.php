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
                            <td><p class="location">location: <a href="index.php">home</a> / about us</p></td>
                            <td></td>
                        </tr>
                        <tr class="top">
                            <td id="nav"><?php
									include("navAbout.html");
								?>
                            </td>
                            <td id="content">
                            	<h1>About Vancouver Hillel</h1>
            
                                <p>Vancouver Hillel is proud to have facilities on B.C.’s three largest campuses: <a href="ubc.php">UBC</a>, <a href="sfu.php">SFU</a> and <a href="uvic.php">UVic</a>. All three Hillel homes work side by side to fulfill Hillel International’s mission statement of "Distinctively Jewish, universally human"; Vancouver Hillel’s leadership encourages dynamic Judaism, inclusivity, tolerance and acceptance. Vancouver Hillel believes in the power of the global community and through UBC, SFU and UVic campuses, exemplifies an open, inclusive, non-judgmental approach to Judaism.</p>
                                
                                <p>Each Vancouver Hillel campus is run by a Vancouver Hillel program director and a volunteer-based student leadership board. Vancouver Hillel’s administrative team is based at the UBC Hillel House.</p>
                                
                                <h2>Vancouver Hillel programs to look forward to are:</h2>
                                
                                <ul>
                                    <li>"Welcome Back" activities, including free BBQ’s</li>
                                    <li><a target="_blank" href="http://www.campusauction.ca">campusauction.ca</a> in October</li>
                                    <li>Israel Awareness Week</li>
                                    <li>Tikkun Olam ("heal the world") Week</li>
                                    <li>Shabbat Dinners, holiday celebrations and more!</li>
                                </ul>
            				</td>
                            <td id="posters">
                                <?php
									$maxPosters = 2;
									$path = "img/poster/about/";
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
