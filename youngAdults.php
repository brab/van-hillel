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
                            <td><p class="location">location: <a href="index.php">home</a> / young adults</p></td>
                            <td></td>
                        </tr>
                        <tr class="top">
                            <td id="nav"><?php
									include("navYoungAdults.html");
								?>
                            </td>
                            <td id="content">
                            	<h1>Young Adults</h1>
            
                                <h2>"Distinctively Jewish, Universally Human"</h2>
                                
                                <p>Vancouver Hillel is nurturing young leaders and community members. As a community organization, Vancouver Hillel believes in the transformative power of B.C.’s young adult generation to provide the next generations of leadership to our community and people. Vancouver Hillel aims to support and mentor this unique group through various programs and opportunities, in partnership with other Jewish community organizations. With expertise in youth and young adult programming, Vancouver Hillel is uniquely equipped to deliver services to the demographic of young Jews who are out of university and seeking a Jewish connection with peers.</p>
                                
                                <p>Vancouver Hillel’s ever-growing Young Jewish Urbanites (HYJU) is a network of young, Jewish professionals and students living, working and studying in and around Metro Vancouver.</p>
                                
                                <h2>Program highlights:</h2>
                                
                                <ul>
                                    <li>Leadership development</li>
                                    <li>Professional development</li>
                                    <li>Parties</li>
                                    <li>Lounge/Restaurant/Café evenings</li>
                                    <li>Tikkun Olam (<q>Heal the World</q>) holiday celebrations</li>
                                    <li>Vegetarian Chinese food restaurant dates, annually on December 24</li>
                                    <li>Themed Shabbat dinners</li>
                                    <li>Chocolate Passover Seder</li>
                                </ul>
                                
                                <p>For more information, contact <a href="mailto:hillelurbanites@vancouverhillel.ca">hillelurbanites@vancouverhillel.ca</a>. </p>
            				</td>
                            <td id="posters">
                                <?php
									$maxPosters = 2;
									$path = "img/poster/youngAdults/";
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
