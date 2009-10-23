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
                <td>
                	<?php
						include("head.php");
					?>
                </td>
            </tr>
            <tr>
                <td>
                	<table>
                    	<col width="190px" />
                        <col width="500px" />
                        <col width="250px" />
                        <tr>
                        	<td></td>
                        	<td>
                            	<p class="location">location: home</p>
                            </td>
                            <td></td>
                        </tr>
                    	<tr class="top">
                        	<td>
                            	<?php
									include("navHome.html");
								?>
                            </td>
                            <td>
				<a href="http://www.campusauction.ca" target="_blank"><img class="poster" src="img/poster/campusauction.jpg" /></a>
                            	<?php
									$maxPosters = 6;
									$path = "img/poster/home/";
									include("postersOrdered.php"); 
								?>
                            </td>
                            <td>
                            	<h1>What Hillel can do for you…</h1>
            
                                <h2>If you want to repair the world</h2>
                                
                                <ul>
                                    <li>Provide an outlet for defending pluralism, Israel and democracy</li>
                                    <li>Support you as you strive for social and economic justice</li>
                                    <li>Link you with people who share your values and passions</li>
                                </ul>
                                
                                <h2>If you are an avid traveler</h2>
                                
                                <ul>
                                    <li>Provide information about exciting study/work/volunteer abroad opportunities in Israel and around the world</li>
                                    <li>Travel nationally and abroad on group tikkun olam (“heal the world”) trips</li>
                                    <li>Attend provincial, national and international leadership conferences, trips and retreats</li>
                                </ul>
                                
                                <h2>If you spend a lot of time on campus</h2>
                                
                                <ul>
                                    <li>Free access to technological resources (internet, satellite TV, etc.)</li>
                                    <li>Plenty of weekly events, home-cooked meals and a constant supply of hot drinks</li>
                                    <li>Visits from acclaimed speakers</li>
                                    <li>Resources for research on Jewish subjects</li>
                                </ul>
                                
                                <h2>If you are a "Mover and Shaker"</h2>
                                
                                <ul>
                                    <li>Network with students and faculty from across the province and around the world</li>
                                    <li>VIP invitations to high-profile events and receptions</li>
                                    <li>Effect change on campus and in the community</li>
                                </ul>
                                
                                <h2>If you are starting your career</h2>
                                
                                <ul>
                                    <li>Gain access to experts and mentors in your field</li>
                                    <li>Bolster your C.V. and professional skills</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                            	<p class="footer">&#169 2009 Vancouver Hillel Foundation</p>
                            </td>
                        </tr>
                    </table>
                </td>
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
