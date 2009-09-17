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
                            <td><p class="location">location: <a href="index.php">home</a> / students</p></td>
                            <td></td>
                        </tr>
                        <tr class="top">
                            <td id="nav"><?php
									include("navStudents.html");
								?>
                            </td>
                            <td id="content"><h1>"Distinctively Jewish, Universally Human"</h1>
                                <p>Being involved in Vancouver Hillel provides many unique opportunities.</p>
                                <h2>Advantages of being a member of Vancouver Hillel:</h2>
                                <ul>
                                    <li>Meet students and faculty from around the world</li>
                                    <li>Hear from acclaimed speakers</li>
                                    <li>Travel nationally and abroad on group trips </li>
                                    <li>Access resources like internet, telephone and satellite television for free</li>
                                    <li>Enjoy weekly events, value-priced home-cooked meals, a constant supply of free hot drinks and a welcoming Jewish home on campus</li>
                                </ul>
                                <h2>Advantages of being a board member of one of Vancouver Hillel’s student clubs:</h2>
                                <ul>
                                    <li>Bolster your C.V. and professional skills</li>
                                    <li>Gain access to scholarships and subsidies</li>
                                    <li>Effect change on campus and in the community</li>
                                    <li>Receive VIP invitations to high-profile events and receptions </li>
                                    <li>Attend provincial, national and international leadership conferences, trips and retreats </li>
                                </ul>
                                <h2>Our Clubs:</h2>
                                <p>The Jewish Students' Association (JSA) and Hillel's Israel Clubs</p>
                                <p>Vancouver Hillel nurtures two main student associations on each campus we serve: <a href="jsa.php">The Jewish Students Association</a> (JSA) and the <a href="iac.php">Israel Awareness and Advocacy Clubs</a> (Israel Awareness Club at UBC; Israel Advocacy Club at SFU; Israel On Campus at UVic). Membership in the clubs is flexible and rewarding. To learn more about Vancouver Hillel’s clubs, or about our activities on your campus (<a href="ubc.php">UBC</a>, <a href="sfu.php">SFU</a> or <a href="uvic.php">UVic</a>), follow the links or <a href="staff.php">contact a Vancouver Hillel professional</a>.</p>
                                
                                <p>If you're ready to get involved then <a href="registerHillel.php">send us your registration</a> and we'll add you to our weekly program email list!</p>
                                
                                <p>If you would like help in finding a warm and welcoming a family to host you for Shabbat or another Jewish holiday, we are here for you. Just <a href="holidayHostingStudents.php">let us know</a> when and we will make the arrangements.</p>
                                
                                <p>If you would like to <a href="referenceRequest.php">request a reference letter</a> from one of the staff please fill out the form and we will get back to you.</p></td>
                            <td id="posters"><a href="http://www.facebook.com/group.php?gid=84671063955" target="_blank"><img src="img/facebook.jpg" /></a> <br />
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
