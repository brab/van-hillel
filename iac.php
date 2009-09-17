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
                            <td><p class="location">location: <a href="index.php">home</a> / <a href="students.php">students</a> / israel education</p></td>
                            <td></td>
                        </tr>
                        <tr class="top">
                            <td id="nav"><?php
									include("navStudents.html");
								?>
                            </td>
                            <td id="content">
                            	<h1>Wherever we Stand, We Stand with Israel</h1>
            
                                <p>Israel is the homeland of the Jewish people and an oasis of democracy, pluralism and equality. Vancouver Hillel’s Israel clubs (Israel Awareness Club at UBC; Israel Advocacy Club at SFU; Israel On Campus at UVic) are non-denominational groups dedicated to engaging in debate, discussion and dialogue on Israeli society, culture, history and politics. The membership of our clubs is diverse and welcoming of contending ideas, but united by a shared commitment to the right of Israel to exist as a Jewish state within secure borders. The clubs further uphold the principles of equality, pluralism and democracy for which Israel stands.</p>
                                
                                <p>At UBC, SFU and UVic, Vancouver Hillel’s Israel clubs strive to provide a forum in which constructive conversation can be fostered. Members come from many religious and cultural backgrounds and originate from every continent and dozens of countries.</p>
                                
                                <h2>Program highlights include:</h2>
                                
                                <ul>
                                    <li>Israel Awareness Week</li>
                                    <li>High-profile speakers</li>
                                    <li>Debates</li>
                                    <li>Parties</li>
                                    <li>Israeli film screenings</li>
                                    <li>Hebrew classes</li>
                                    <li>Education about the realities of life in Israel, about Israeli culture, society, history and contributions to the world.</li>
                                </ul>
                                
                                <p>Student board positions for clubs are rewarding, flexible and include many benefits. The student boards are comprised of committed individuals who coordinate programming in a specific area.</p>
                                
                                <h2>Get involved!</h2>
                                
                                <p>To get involved or learn more, <a href="staff.php">contact</a> the program director on your campus.</p>
                            </td>
                            <td id="posters">
                            	<a href="http://www.facebook.com/group.php?gid=84671063955" target="_blank"><img src="img/facebook.jpg" /></a> <br />
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
