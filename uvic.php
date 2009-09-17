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
                            <td><p class="location">location: <a href="index.php">home</a> / <a href="students.php">students</a> / uvic</p></td>
                            <td></td>
                        </tr>
                        <tr class="top">
                            <td id="nav"><?php
									include("navStudents.html");
								?>
                            </td>
                            <td id="content">
                            	<h1>UVic Hillel House</h1>
            
                                <p>Hillel House in Victoria is immediately adjacent to the UVic campus. Students attending UVic will find an exceptionally warm and inviting Hillel on campus. UVic Hillel is the only one of Vancouver Hillel’s three facilities that has a residential component – the Hillel director and several students live on-site. This gives Victoria Hillel an even greater sense of hominess as well as creating a critical mass of activity that has made this one of Canada’s most successful Hillels.</p>
                                
                                <p>UVic Hillel was officially established in 2006. Since then, student involvement has grown exponentially, programs have diversified and the impact of a mass of engaged Jewish students has changed campus and community for the better.</p>
                                
                                <p><a href="mailto:uvicdirector@vancouverhillel.ca">Contact Ayelet Weil</a>, UVic Director to be a part of it.</p>
                            </td>
                            <td id="posters">
                            	<a href="http://www.facebook.com/group.php?gid=84671063955" target="_blank"><img src="img/facebook.jpg" /></a> <br />
                                <iframe src="http://www.google.com/calendar/embed?showNav=0&amp;showDate=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;mode=AGENDA&amp;height=300&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=93kdugoor1n1g47kn8ab2gd45k%40group.calendar.google.com&amp;color=%23A32929&amp;src=ld55gjikj3n5j1vimgm288mhvk%40group.calendar.google.com&amp;color=%237A367A&amp;ctz=America%2FVancouver" style=" border-width:0; margin-bottom: 5px " width="240" height="300" frameborder="0" scrolling="no"></iframe>
                                
                                <?php
                                    $maxPosters = 1;
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
