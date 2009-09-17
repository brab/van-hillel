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
                            <td><p class="location">location: <a href="index.php">home</a> / <a href="youngAdults.php">young adults</a> / hyju</p></td>
                            <td></td>
                        </tr>
                        <tr class="top">
                            <td id="nav"><?php
									include("navYoungAdults.html");
								?>
                            </td>
                            <td id="content">
                            	<h1>Hillel's Young Jewish Urbanites</h1>
                                <h2>"Distinctively Jewish, Universally Human"</h2>
                                <p>The mission of Vancouver Hillel's Young Jewish Urbanites (HYJU) is to build and strengthen British Columbia’s growing network of young, Jewish "Urbanites," ages 22 to mid-30's, living, studying and working in Greater Vancouver.</p>
                                <p>HYJU offers an array of social, cultural, recreational, educational and community-based events designed to meet the interests and needs of this vibrant group.</p>
                                <p>Programs are planned according to interest and are initiated by a volunteer committee with the support of Vancouver Hillel staff. Membership in HYJU is free. Volunteering on the planning committee is flexible and rewarding as roles and time commitment are tailored according to interest.</p>
                                
                                <h1>Professional Division</h1>
                                <p>Initiated by members of Vancouver's young Jewish professional community in 2008, Vancouver Hillel's Young Jewish Urbanites: Professional Division (HYJU: PD) is a resource group that facilitates professional networking, personal development and community building.</p>
                                <h2>Objectives</h2>
                                <ol>
                                    <li>To gain professional insight and career-related skills</li>
                                    <li>To create an integrated Jewish professional community in Vancouver by strengthening communication between established and new professionals</li>
                                </ol>
                                <p>HYJU: PD constituents are members of a province-wide network of young Jewish adults from diverse educational and professional backgrounds. HYJU: PD is a dynamic, ever-growing association that is ambitious, vibrant and involved. Participation in HYJU: PD expands members' contact bases, enlarges professional avenues and creates an exchange of ideas and strategies related to the professional sphere.  </p>
                                <p>Click <a href="registerHYJU.php">here</a> to have an Urbanites representative contact you.</p>
            				</td>
                            <td id="posters">
                                <a href="http://www.facebook.com/group.php?gid=88525410402" target="_blank"><img src="img/facebook.jpg" /></a>
                                <br />
                                <iframe src="http://www.google.com/calendar/embed?showNav=0&amp;showDate=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;mode=AGENDA&amp;height=300&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=vanhillelcal%40gmail.com&amp;color=%23AB8B00&amp;src=ld55gjikj3n5j1vimgm288mhvk%40group.calendar.google.com&amp;color=%237A367A&amp;ctz=America%2FVancouver" style=" border-width:0; margin-bottom: 5px " width="240" height="300" frameborder="0" scrolling="no"></iframe>
                                <?php
                                    $maxPosters = 1;
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
