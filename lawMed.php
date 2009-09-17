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
                            <td><p class="location">location: <a href="index.php">home</a> / <a href="youngAdults.php">young adults</a> / law and medical students</p></td>
                            <td></td>
                        </tr>
                        <tr class="top">
                            <td id="nav"><?php
									include("navYoungAdults.html");
								?>
                            </td>
                            <td id="content">
                            	<h1>Hillel Law, Hillel Medical and Hillel Grad Students' Associations</h1>
            
                                <p>Led by student executives with the support of Vancouver Hillel staff, the Hillel Law Students' Association (HLSA), the Hillel Medical Students' Association (HMSA) and the Hillel Graduate Students' Association (HGSA) enhance the social, academic and communal goals of their members. The HLSA, HMSA and HGSA create community among their members and other affiliated associations by providing constituents with social, academic and professional opportunities as well as a voice and a network in British Columbia’s legal, medical and academic communities.</p>
                                
                                <h2>Advantages of being a member of Vancouver Hillel’s HLSA/HMSA/HGSA</h2>
                                
                                <ul>
                                    <li>Attend provincial, national and international conferences and trips</li>
                                    <li>Network with students, professionals, academics and associations</li>
                                    <li>Access scholarships and subsidies</li>
                                    <li>Enjoy social and professional events, including lectures from acclaimed speakers</li>
                                    <li>Resources such as free internet access, land lines, satellite television and hot beverages</li>
                                </ul>
                                
                                <h2>Unique advantages of being a HLSA/HMSA/HGSA committee member</h2>
                                
                                <ul>
                                    <li>Create a legacy by affecting change</li>
                                    <li>Benefit from opportunities for professional development and advancement</li>
                                    <li>Develop and expand your leadership skills and network</li>
                                    <li>Meet people of influence</li>
                                    <li>Access national resources</li>
                                    <li>Receive VIP invitations to high-profile events and receptions</li>
                                    <li>Earn letters of reference and recommendation</li>
                                    <li>Experience the challenges and rewards of growing a not-for-profit organization</li>
                                </ul>
                                
                                <p>Membership is free; volunteering on the planning committee is flexible and rewarding as roles and time commitment are tailored by interest.  For more information or to sign up, contact <a href="mailto:hillelurbanites@vancouverhillel.ca">hillelurbanites@vancouverhillel.ca</a>.</p>
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
