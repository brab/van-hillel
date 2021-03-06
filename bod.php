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
                            <td><p class="location">location: <a href="index.php">home</a> / <a href="about.php">about us</a> / board of directors</p></td>
                            <td></td>
                        </tr>
                        <tr class="top">
                            <td id="nav"><?php
									include("navAbout.html");
								?>
                            </td>
                            <td id="content">
                            	<h1>Vancouver Hillel’s Board of Directors</h1>
                                <h2 class="italic">Vancouver Hillel’s Board of Directors (BOD) consists of a group of dedicated volunteers whose mandate is to ensure the long term success of Vancouver Hillel.</h2>
                                <br />
                                
                                <!--<h2>Name, position</h2>
                                <a href="mailto:">email</a>
                                <p>short bio</p>-->
				<h2>Alan Marchant (President)</h2>
				<h2>Corey Albert</h2>
				<h2>Eric Brandt</h2>
				<h2>Glenn Bullard</h2>
				<h2>Rachelle Delaney</h2>
				<h2>Aaron Devor</h2>
				<h2>Reva Dexter</h2>
				<h2>Dr. Joanne Emerman</h2>
				<h2>Josh Gibbons</h2>
				<h2>Kevin Glassman</h2>
				<h2>Dr. Sheldon Green</h2>
				<h2>Sondi Green</h2>
				<h2>Bernard Joss</h2>
				<h2>Jeff Nider</h2>
				<h2>Dr. Allan Posthuma</h2>
				<h2>Yair Tabenkin </h2>
				<h2>Isaac Thau</h2>
				<h2>Dimitry Toukhcher</h2>
				<h2>Dr. Mordehai Wosk</h2>
				<h2>Aeronn Zlotnik</h2>
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
