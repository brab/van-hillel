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
                            <td><p class="location">location: <a href="index.php">home</a> / <a href="students.php">students</a> / jewish campus life</p></td>
                            <td></td>
                        </tr>
                        <tr class="top">
                            <td id="nav"><?php
									include("navStudents.html");
								?>
                            </td>
                            <td id="content">
                            	<h1>"Distinctively Jewish, Universally Human"</h1>
            
                                <p>On each of Vancouver Hillel’s three campuses, Hillel is home to the only Jewish Students’ Association (JSA), which provides educational, spiritual, social and recreational opportunities through programs of <em>tzedakah</em> (good works) and <em>tikkun olam</em> (repair of the broken world).</p>
                                
                                <h2>JSA program highlights:</h2>
                                
                                <ul>
                                    <li>City-wide parties</li>
                                    <li>Ski trips</li>
                                    <li>Tzedakah Week, including the annual PB+J A-Thon</li>
                                    <li>Shabbat Dinners and Holiday celebrations</li>
                                    <li>Holocaust Education and activism against contemporary genocides </li>
                                    <li>Leadership retreats, informal learning, structured mentoring and opportunities to participate in every range of programs locally, nationally and internationally</li>
                                </ul>
                                
                                <p>Across all campuses, Vancouver Hillel’s JSA boards are made up of talented volunteer students with support from Vancouver Hillel staff. Board members work with each other, with staff and with partners on and off campus to promote the overall success of JSA programs and initiatives.</p>
                                
                                <h2>Get involved!</h2>
                                
                                <p>Vancouver Hillel JSA student boards are flexible and based on interest. All Vancouver Hillel members are eligible to join the JSA student board and committees. To get involved or learn more, <a href="staff.php">contact</a> the program director on your campus.</p>
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
