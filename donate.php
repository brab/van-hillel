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

<script language="javascript" type="text/javascript"> 
<!--
function DonateWindow(url){
newWindow=window.open(url,"donate","height=460, width=500, top=100,left=200")
newWindow.focus()
}
// --> 
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
                            <td><p class="location">location: <a href="index.php">home</a> / <a href="support.php">support us</a> / donate</p></td>
                            <td></td>
                        </tr>
                        <tr class="top">
                            <td id="nav"><?php
									include("navSupport.html");
								?>
                            </td>
                            <td id="content">
				<p>Vancouver Hillel changes the world on a shoestring budget.</p>

				<p>In the current decade, Vancouver Hillel has experienced the most sustained period of growth and demand for services in our organization’s history. The current economic conditions not only challenge Hillel to find innovative ways to maintain financial stability, but exacerbate the tensions that cause Jewish students to seek out the friendly refuge of a Jewish home on campus.</p>

				<p>Our Israel advocacy education and Hillel’s full range of Jewish educational, social, spiritual and recreational programs are as important as they have ever been. </p>

				<p>Vancouver Hillel is creating the campus leaders of today and the community leaders of tomorrow. But we depend on the support of friends like you to make all our work possible.</p>

				<p>Your support makes a world of difference. <a target="donate" onclick="DonateWindow(this.href)" href="https://vancouverhillel.ipower.com/v2/donatePopup.html">Please donate.</a></p>
			    </td>
                            <td id="posters">
                                <?php
									$maxPosters = 2;
									$path = "img/poster/support/";
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
