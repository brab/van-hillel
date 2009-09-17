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
                            <td><p class="location">location: <a href="index.php">home</a> / <a href="about.php">about us</a> / mission and vision</p></td>
                            <td></td>
                        </tr>
                        <tr class="top">
                            <td id="nav"><?php
									include("navAbout.html");
								?>
                            </td>
                            <td id="content">
                            	<h1>Distinctively Jewish, Universally Human</h1>
                                <p>Vancouver Hillel’s vision is to inspire Jewish students to make a lasting commitment to Jewish life. Hillel’s mission is to enrich the lives of Jewish <a href="students.php">undergraduate</a> and <a href="youngAdults.php">graduate students</a> so that they may enrich the Jewish people and the world. Hillel, the center for Jewish life on campus, is the largest and most exciting student organization on B.C. campuses.</p>
                                <h2>Vancouver Hillel commits to:</h2>
                                <ul>
                                    <li>Creating a pluralistic, welcoming and inclusive environment</li>
                                    <li>Fostering student growth and the balance of being "Distinctively Jewish and Universally Human"</li>
                                    <li>Embracing Israel and global Jewish people hood</li>
                                    <li>Advancing social justice, Jewish learning and spirituality within yourself and the greater community</li>
                                    <li>Delivering excellence, innovation, accountability and results</li>
                                </ul>
                                <h2>Vancouver Hillel creates connections and Jewish journeys:</h2>
                                <p>Hillel and Jewish journeys are important because they provide Jewish <a href="students.php">students</a> with countless opportunities for self-discovery and personal growth. The friendship and <a href="hyju.php">mentorships</a> that are formed at Vancouver Hillel are life-lasting and have a great impact. Vancouver Hillel’s calendar is rooted in a strong tradition of social, educational, cultural, recreational and religious activities; exemplary students are routinely nominated for <a href="awardsStudents.php">leadership</a> training and <a href="specialEventsStudents.php">travel</a> opportunities. Many Vancouver Hillel <a href="youngAdults.php">alumni</a> have applied their experience with Vancouver Hillel to further enhance their post-graduate and community work.</p>
            				</td>
                            <td id="posters">
                                <?php
									$maxPosters = 2;
									$path = "img/poster/about/";
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
