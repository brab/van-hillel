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
                            <td><p class="location">location: <a href="index.php">home</a> / <a href="parents.php">parents</a> / volunteer with hillel</p></td>
                            <td></td>
                        </tr>
                        <tr class="top">
                            <td id="nav"><?php
									include("navParents.html");
								?>
                            </td>
                            <td id="content">
                            	<h1>Volunteer with Hillel</h1>
            
                                <p>Vancouver Hillel is a not-for-profit organization; our success is due in large part to the hard work of student and community volunteers. We recognize that all individuals have the power to make impactful contributions to Hillel in numerous ways, by financially supporting Vancouver Hillel, by serving as informal community ambassadors of Vancouver Hillel and, of course, by volunteering for Vancouver Hillel.</p>
                                
                                <h2>Volunteer work and hours are rewarding and flexible. Possible volunteer opportunities include:</h2>
                                
                                <ul>
                                    <li>The Vancouver Hillel Gala committee</li>
                                    <li>Pencil Yourself In (PYI) annual fundraising telethon</li>
                                    <li>Mentorship groups for Hillel’s Young Jewish Urbanites: Professional Division </li>
                                    <li>Share your expertise with the university community, Hillel's Young Jewish Urbanites and Hillel's Board of Directors</li>
                                    <li>Helping prepare Shabbat dinners, regular lunches, holiday celebrations and other special events</li>
                                    <li>Offering your unique insight, experience and skills to the Hillel student population... <a href="mailto:Maggie Yonash<maggie@vancouverhillel.ca>?bcc=webforms@vancouverhillel.ca&subject=Volunteering%20with%20Hillel">Talk to Hillel staff</a> about volunteer opportunities</li>
                                </ul>
                                
                                <p>Vancouver Hillel depends on our friends in the community to deliver our services to students on campuses throughout British Columbia. Your dedication not only helps our organization succeed but provides a vital role model of lifelong volunteering that helps reinforce Hillel's mission of engaged citizenship.</p>
                                
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
