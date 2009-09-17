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
                            <td><p class="location">location: <a href="index.php">home</a> / <a href="students.php">students</a> / aepi fraternity</p></td>
                            <td></td>
                        </tr>
                        <tr class="top">
                            <td id="nav"><?php
									include("navStudents.html");
								?>
                            </td>
                            <td id="content">
                            	<h1>Alpha Epsilon Pi</h1>
            
                                <p>Based out of UBC, <a href="http://www.aepibx.com" target="_blank">Alpha Epsilon Pi</a> (AEPi) is the only Jewish fraternity in B.C. and a vital contributor to Greek life, to Hillel and to the vitality of campus life at UBC. AEPi is a brotherhood of young, Jewish men who come together in support of community, leadership and philanthropy. In 2009-10, AEPi will begin <q>rushing</q> at SFU, as a result of SFU’s new policy accommodating fraternities. Vancovuer Hillel was recognized by AEPi International as exemplary of a mutually supportive relationship between the local Hillel and AEPi chapter. Brothers of AEPi have a massively positive influence on campus – raising thousands of dollars annually for the B.C. Cancer Society through <q>Rock for Cancer,</q> by making parties that are legendary and through the creation of a cadre of young leaders who are changing the face of campus and who will change the course of the world.</p>
                                
                                <p>To learn more about AEPi, contact <a href="mailto:president@aepibx.com">president@aepibx.com</a> or visit <a href="http://www.aepibx.com" target="_blank">www.aepibx.com</a>. </p>
                            </td>
                            <td id="posters">
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
