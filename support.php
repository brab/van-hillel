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
                            <td><p class="location">location: <a href="index.php">home</a> / support us</p></td>
                            <td></td>
                        </tr>
                        <tr class="top">
                            <td id="nav"><?php
									include("navSupport.html");
								?>
                            </td>
                            <td id="content">
                            	<h1>Students Need Hillel, Hillel Needs You!</h1>
            
                                <p>Vancouver Hillel is an accredited member of <a target="_blank" href="http://www.hillel.org/index">Hillel International</a>, a worldwide not-for-profit organization that exists only because of the support of community members like you!</p>
                                
                                <p>As an accredited member of the Hillel family, Vancouver Hillel ensures that no student is excluded from any program based on ability to pay. This policy encourages inclusive membership and increased involvement. It also means that Vancouver Hillel has to find creative ways to secure funding.</p>
                                
                                <p>Vancouver Hillel has achieved six decades of success because of community support and care. Vancouver Hillel is a proud constituent agency of the Jewish Federation of Greater Vancouver and receives support from National Jewish Campus Life, the Canadian Council for Israel and Jewish Advocacy and supportive families, foundations and individuals.</p>
                                
                                <h2>Please consider supporting Vancouver Hillel in one of the following ways:</h2>
                                
                                <ul>
                                    <li>Make a donation to our UBC Hillel’s Capital Campaign</li>
                                    <li>Make a donation to SFU Hillel’s endowment fund</li>
                                    <li>Make a donation toward burning the UVic Hillel House mortgage</li>
                                    <li>Make a donation benefitting a specific program area (such as Holocaust Awareness Week, Shabbat dinners, holiday programming, Israel education, etc.)</li>
                                </ul>
                                
                                <h2>Other ways to support Vancouver Hillel:</h2>
                                
                                <ul>
                                    <li>Offer to host a student for a Jewish holiday</li>
                                    <li>Volunteer on a committee</li>
                                    <li>Help with Hillel Shabbat and holiday preparations</li>
                                    <li>Assist with the organization of marketing materials</li>
                                    <li>Share your distinctive expertise with Hillel students, staff and lay leaders</li>
                                </ul>
                                
                                <br />
                                
                                <?php
									include("registerAlumni.html");
								?>
            				</td>
                            <td id="posters">
                                <?php
									$maxPosters = 2;
									$path = "img/poster/support/";
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
