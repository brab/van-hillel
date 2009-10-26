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
                            <td><p class="location">location: <a href="index.php">home</a> / <a href="support.php">support us</a> / hillel gala</p></td>
                            <td></td>
                        </tr>
                        <tr class="top">
                            <td id="nav"><?php
									include("navSupport.html");
								?>
                            </td>
                            <td id="content">
				<h1>Vancouver Hillel Gala 2009</h1>
				<p>Each year, the Vancouver Hillel Gala evening is a highlight of the community calendar. Hundreds of community leaders, students and friends of Hillel gather to celebrate Hillel’s achievements and to learn more about the work Hillel does to educate the campus community about Jewish culture and history, about the contributions Israel makes to the world and how Vancouver Hillel is making real the promise “Never Again” by educating peers about the Holocaust and about contemporary genocides.</p>

				<p>Vancouver Hillel invites you to join us on Sunday, November 29, 2009, for the annual Hillel Gala, this year featuring a keynote address by Hillel Neuer, executive director of UN Watch, in Geneva. </p>

				<p>Mr. Neuer, originally from Montreal, is a world-leading expert on the disproportionate attention and unfair treatment applied by the United Nations toward Israel. Mr. Neuer’s speeches and writings have made him one of the most respected and articulate voices supporting the just application of UN Charter principles and informing the world about how these fundamental principles are often ignored or selectively upheld.</p>

				<p>Mr. Neuer appears regularly before the United Nations Human Rights Council, intervening for the victims of Darfur, the rights of women, political prisoners in Zimbabwe and Cuba, and the cause of Middle East peace. </p>

				<p>Vancouver Hillel is proud to welcome Mr. Neuer on his first UN Watch visit to British Columbia. Mr. Neuer’s work defending Israel on the international stage is an inspiration to Vancouver Hillel students who are making the same case on British Columbia campuses. </p>

				<p>This event will be an unprecedented opportunity to hear a leading voice for fair treatment for Israel in the international arena – while supporting Vancouver Hillel’s vital Israel advocacy education. Please save the date.</p>

				<p><a href="img/gala2009_invitation.pdf" target="_blank"><img src="img/gala2009_invitation_thumbnail.jpg" style="width: 350px; height: 350px;"/><br />Click here to view the invitation</a></p>
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
