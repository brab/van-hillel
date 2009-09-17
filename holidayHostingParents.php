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
                            <td><p class="location">location: <a href="index.php">home</a> / <a href="parents.php">parents</a> / holiday hosting</p></td>
                            <td></td>
                        </tr>
                        <tr class="top">
                            <td id="nav"><?php
									include("navParents.html");
								?>
                            </td>
                            <td id="content">
                            	<h1>Jewish Holidays with Vancouver Hillel</h1>
        
                                <p>Studies have shown that Jewish holidays are one of the most important times for students to connect to their Jewish identity and feel a part of the Jewish community. The holidays present Hillel with ideal opportunities to create memorable connections to Jewish life on campus, which can help serve as the foundation for students' Jewish life beyond campus.</p>
                                
                                <h2>Shabbat at Hillel</h2>
                                
                                <p>Friday night Shabbat dinners at Vancouver Hillel are a wonderful way to unwind at the end of the week. Dinners are always delicious and provide for an inclusive and friendly atmosphere to relax with friends and meet new people. For more information, or to volunteer, please contact your Vancouver Hillel program director:</p>
                                
                                <ul>
                                    <li>UBC Hillel: <a href="mailto:programdirector@vancouverhillel.ca">programdirector@vancouverhillel.ca</a></li>
                                    <li>SFU Hillel: <a href="mailto:sfudirector@vancouverhillel.ca">sfudirector@vancouverhillel.ca</a></li>
                                    <li>UVic Hillel: <a href="mailto:uvicdirector@vancouverhillel.ca">uvicdirector@vancouverhillel.ca</a></li>
                                </ul>
                                
                                <h2>High Holidays: Rosh Hashanah, Yom Kippur</h2>
                                
                                <p>Vancouver Hillel and the Jewish community of Greater Vancouver understand that, for some students, being away from home during the Holidays can be lonely and difficult, which is why linking students with local synagogues and families is important to us. Our goal is to make the Holidays comfortable, accessible and meaningful. To ensure that you or your son or daughter have a place to go for the <em>chagim</em> simply fill in the form below. Local synagogues allocate seats to Vancouver Hillel for our students and, for many Jewish families in British Columbia, hosting a Hillel student has become a family holiday tradition.</p>
                                
                                <h2>Passover</h2>
                                
                                <p>Every year, Vancouver Hillel and the Vancouver Jewish community work together to arrange host family matches for Jewish students to enjoy seders.</p>
                                
                                <p>If you need a place to go for the holidays or you would like to welcome your to home a Hillel student, please complete the form below and Hillel staff will contact you.</p>
                                
                                <br />
                                <?php
                                    include("registerHolidayHosting.php");
                                ?>
            				</td>
                            <td id="posters">
                                <?php
									$maxPosters = 2;
									$path = "img/poster/parents/";
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
