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
                            <td><p class="location">location: <a href="index.php">home</a> / <a href="students.php">students</a> / register for hillel</p></td>
                            <td></td>
                        </tr>
                        <tr class="top">
                            <td id="nav"><?php
									include("navStudents.html");
								?>
                            </td>
                            <td id="content">
                            	<h1>Register for Hillel</h1>
                                <form id="registerHillel" name="registerHillel" action="registerHillelForm.php" method="post">
                                    <table width="100%">
                                        <col width="40%" />
                                        <col width="1*" />
                                        <tr>
                                            <td class="top">
                                                <h2>Your Information</h2>
                                            </td>
                                            <td>
                                                <em>* Required information. All information will be kept confidential. Please provide at least one phone number.</em>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Campus(es) on which you would like to be involved: *
                                            </td>
                                            <td>
                                                <label>
                                                    <input name="ubc" type="checkbox" id="ubc" value=", programdirector@vancouverhillel.ca" />
                                                    <!--testing-->
                                                    <!--<input name="ubc" type="checkbox" id="ubc" value="sfudirector@vancouverhillel.ca" />-->
                                                    UBC Hillel
                                                </label>
                                                <label>
                                                    <input name="sfu" type="checkbox" id="sfu" value=", sfudirector@vancouverhillel.ca" />
                                                    SFU Hillel
                                                </label>
                                                <label>
                                                    <input name="uvic" type="checkbox" id="uvic" value=", uvicdirector@vancouverhillel.ca" />
                                                    <!--testing-->
                                                    <!--<input name="uvic" type="checkbox" id="uvic" value="sfudirector@vancouverhillel.ca" />-->
                                                    UVic Hillel
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Name: *
                                            </td>
                                            <td>
                                                <input name="name" type="text" id="name" size="30" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Birthday:
                                            </td>
                                            <td>
                                                <input name="birthday" type="text" id="birthday" size="30" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Address: *
                                            </td>
                                            <td>
                                                <input name="address" type="text" id="address" value="street number and name" size="30" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            </td>
                                            <td>
                                                <input name="city" type="text" id="city" value="city" size="20" />
                                                <input name="prov" type="text" id="prov" value="British Columbia" size="20" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            </td>
                                            <td>
                                                <input name="postalCode" type="text" id="postalCode" value="postal code" size="15" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            </td>
                                            <td>
                                                <label>
                                                    <input name="permanentAddress" type="radio" value="Campus Residence" id="permanentAddress_0" />
                                                    Campus Residence
                                                </label> 
                                                <label>
                                                    <input name="permanentAddress" type="radio" id="permanentAddress_1" value="Permanent Residence" checked="checked" />
                                                    Permanent Address
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Cell Phone: *
                                            </td>
                                            <td>
                                                <input name="cellPhone" type="text" id="cellPhone" size="30" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Home Phone:
                                            </td>
                                            <td>
                                                <input name="homePhone" type="text" id="homePhone" size="30" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Email: *
                                            </td>
                                            <td>
                                                <input name="email" type="text" id="email" size="30" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Facebook:
                                            </td>
                                            <td>
                                                <input name="facename" type="text" id="facename" value="name" size="20" />
                                                <input name="faceNet" type="text" id="faceNet" value="network" size="20" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                College or University of enrollment? *
                                            </td>
                                            <td>
                                                <input name="campus" type="text" id="campus" size="30" />
                                            </td>
                                        </tr>
                                        <tr>
                                        	<td>
                                            	Area of study: 
                                            </td>
                                            <td>
                                            	<input name="faculty" type="text" id="faculty" size="30" />
                                            </td>
                                        </tr>
                                        <tr>
                                        	<td>
                                            	Year of study: 
                                            </td>
                                            <td>
                                            	<input name="yearOfStudy" type="text" id="yearOfStudy" size="10" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="top">
                                                Interests<br />
                                                <em>Select one or more</em>
                                            </td>
                                            <td>
                                                <label>
                                                    <input name="jsa" type="checkbox" id="jsa" value="Jewish Campus Life" />
                                                    Jewish Campus Life
                                                </label>
                                                <br />
                                                <label>
                                                    <input name="iac" type="checkbox" id="iac" value="Israel Education" />
                                                    Israel Education
                                                </label>
                                                <br />
                                                <label>
                                                    <input name="aepi" type="checkbox" id="aepi" value="AEPi" />
                                                    Alpha Epsilon Pi <em>(Jewish Fraternity)</em>
                                                </label>
                                                <br />
                                                <label>
                                                    <input name="holocaust" type="checkbox" id="holocaust" value="Holocaust and Genocide Awareness" />
                                                    Holocaust and Genocide Awareness
                                                </label>
                                                <br />
                                                <label>
                                                    <input name="interfaith" type="checkbox" id="interfaith" value="Inter-faith / Multicultural Dialogue" />
                                                    Inter-faith / Multicultural Dialogue
                                                </label>
                                                <br />
                                                <label>
                                                    <input name="charity" type="checkbox" id="charity" value="Philanthropic / Charitable Work" />
                                                    Philanthropic / Charitable Work
                                                </label>
                                                <br />
                                                <label>
                                                    <input name="sportRec" type="checkbox" id="SportRec" value="Outdoor Sports and Recreation" />
                                                    Outdoor Sports and Recreation
                                                </label>
                                                <br />
                                                <label>
                                                    <input name="glbtq" type="checkbox" id="glbtq" value="GLBTQ Issues" />
                                                    GLBTQ Issues
                                                </label>
                                                <br />
                                                <label>
                                                    <input name="politics" type="checkbox" id="politics" value="Political Engagement" />
                                                    Political Engagement
                                                </label>
                                                <br />
                                                <label>
                                                    <input name="environment" type="checkbox" id="environment" value="Environmental Action" />
                                                    Environmental Action
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            </td>
                                            <td>
                                            	<br />
                                                <label>
                                                    <input name="leadership" type="checkbox" id="leadership" value="yes" />
                                                    I would like to take on a leadership role
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            </td>
                                            <td>
                                                <label>
                                                    <input name="birthright" type="checkbox" id="birthright" value="yes" />
                                                    I have been on Birthright
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="top">
                                                Skills or training you can share:<br />
                                                <em>eg. graphic design, cooking, event planning, First Aid, second language(s), etc</em>
                                            </td>
                                            <td>
                                                <textarea name="skills" cols="30" rows="5" id="skills"></textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="top">
                                                Comments:
                                            </td>
                                            <td>
                                                <textarea name="comments" cols="40" rows="8" id="comments"></textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="top">
                                            	<br />
                                                <h2>Parents' Contact Info**</h2>
                                            </td>
                                            <td>
                                                <em>Please provide at least one of: a mailing address, an email address, a phone number.</em>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Parents' names: **
                                            </td>
                                            <td>
                                                <input name="pName" type="text" id="pName" size="30" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Address: **
                                            </td>
                                            <td>
                                                <input name="pAddress" type="text" id="pAddress" value="street number and name" size="30" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            </td>
                                            <td>
                                                <input name="pCity" type="text" id="pCity" value="city" size="20" />
                                                <input name="pProv" type="text" id="pProv" value="British Columbia" size="20" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            </td>
                                            <td>
                                                <input name="pPostalCode" type="text" id="pPostalCode" value="postal code" size="15" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Phone: **
                                            </td>
                                            <td>
                                                <input name="pPhone" type="text" id="pPhone" size="30" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Email: **
                                            </td>
                                            <td>
                                                <input name="pEmail" type="text" id="pEmail" size="30" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            </td>
                                            <td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="top">
                                                <h2>** Required Info:</h2>
                                            </td>
                                            <td>
                                                <em>Vancouver Hillel has no membership fees and the vast majority of our programs are free. Vancouver Hillel is a non-profit organization. Every program and service we offer is funded by friends in the community. Your parents may receive our occasional mailings and possibly one phone call a year, during our February province-wide telethon. We respect your privacy and will maintain this information in strict confidence. And we promise not to tell them stuff about you. To be eligible for the entire range of benefits Hillel offers, our one condition is that you provide parent contact information. Thank you.</em>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            </td>
                                            <td>
                                                <input type="submit" value="Send Registration" />
                                            </td>
                                        </tr>
                                    </table>
                                </form>
                                </td>
                            <td id="posters">
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
