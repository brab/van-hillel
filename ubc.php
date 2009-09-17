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
                            <td><p class="location">location: <a href="index.php">home</a> / <a href="students.php">students</a> / ubc</p></td>
                            <td></td>
                        </tr>
                        <tr class="top">
                            <td id="nav"><?php
									include("navStudents.html");
								?>
                            </td>
                            <td id="content"><h1>UBC Hillel House</h1>
                                <p><a href="construction.php">Construction is currently taking place</a> on a landmark new Hillel House that will stand at the heart of the UBC campus for at least the next eight decades. This stunning new facility strives to be the Best Hillel on Earth, a hub of social justice, <em>tzedakah</em> (good works) and <em>tikkun olam</em> (repairing the broken world) work for Jewish students and the broader campus population. The breath-taking new facility is slated to be open for students by September 2010.</p>
                                
                                <p>Hillel House has stood at the heart of UBC’s campus since 1947, until this year operating out of a makeshift <q>portable</q> decommissioned after the Second World War. Under a grandfathering agreement with UBC, the new Hillel will remain a flagship facility in the massively redeveloped student-focused centre of campus until at least 2084!</p>
                                
                                <p>While we excitedly wait for the completion of this monumental project, activities for the UBC’s Hillel House take place without interruption at our superb temporary location at the <a target="_blank" href="http://www.vst.edu/">Vancouver School of Theology</a> (VST), a stunning building located in one of Canada’s most beautiful settings, a short walk from all campus destinations and not far from Hillel’s permanent site.</p>
                                
                                <p>The student lounge at the UBC Hillel House is a large, warm space filled with sofas and study spaces and houses a big screen TV, Play Station and a Super Nintendo system. A constant supply of FREE hot drinks, filtered water and cheap eats are also kept close at hand. The room and the atmosphere are bright, warm and welcoming.</p>
                                
                                <p>This year will be an important time of anticipation and preparation for Hillel at UBC, as our students, staff and friends get ready to move into the new Hillel House and set a foundation for generations of life-altering, world-changing and just plain fun programming that will make this magnificent new facility a vital contributor to UBC’s multicultural, interfaith and civic life.</p>

				<p><a href="mailto:programdirector@vancouverhillel.ca">Contact Paul Curran</a>, UBC Program Director to get involved</p>
                                </td>
                            <td id="posters">
                            	<a href="http://www.facebook.com/group.php?gid=84671063955" target="_blank"><img src="img/facebook.jpg" /></a>
                                <br />
                                <iframe src="http://www.google.com/calendar/embed?showNav=0&amp;showDate=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;mode=AGENDA&amp;height=300&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=8bfmtcgiuqi38evj0ttfkm5sv8%40group.calendar.google.com&amp;color=%232952A3&amp;src=ld55gjikj3n5j1vimgm288mhvk%40group.calendar.google.com&amp;color=%237A367A&amp;ctz=America%2FVancouver" style=" border-width:0; margin-bottom: 5px " width="240" height="300" frameborder="0" scrolling="no"></iframe>
                                
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
