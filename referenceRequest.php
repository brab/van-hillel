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
                            <td><p class="location">location: <a href="index.php">home</a> / <a href="students.php">students</a> / reference request</p></td>
                            <td></td>
                        </tr>
                        <tr class="top">
                            <td id="nav"><?php
									include("navStudents.html");
								?>
                            </td>
                            <td id="content">
                            	<h1>Request a Vancouver Hillel Reference Letter</h1>
            
                                <h2>Hillel policy for granting reference letters:</h2>
                                
                                <p>To obtain a reference letter from Hillel you must meet some of the following criteria and qualifications:</p>
                                
                                <ol>
                                    <li>Be a registered member of Hillel (with all forms completely filled in)</li>
                                    <li>Have participated in either a PYI or CJA campaign</li>
                                    <li>Provide a list of your current and past Hillel activities</li>
                                    <li>Have taken a leadership role within Vancouver Hillel by organizing or supporting at least one activity</li>
                                    <li>Have a staff person at Hillel who can vouch for your participation</li>
                                </ol>
                                
                                <p>Reference requests must be put in writing. Reference letters are issued at the discretion of Vancouver Hillel, based on the applicant’s involvement.  Please note: a request for a reference from Vancouver Hillel does not guarantee a written or oral reference.</p>
                                
                                <h2> To help us with your request, please outline your involvement with Vancouver Hillel, as detailed on the form below.</h2>
                                <br />
                                
                                <form id="referenceRequest" name="referenceRequest" action="referenceRequestForm.php" method="post">
                                    <table>
                                        <col width="30%" />
                                        <tr>
                                            <td class="top">
                                                <h2>Your Information</h2>
                                            </td>
                                            <td>
                                                <em>* All information is required for registration and will be kept confidential.</em>
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
                                                Email: *
                                            </td>
                                            <td>
                                                <input name="email" type="text" id="email" size="30" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Phone: *
                                            </td>
                                            <td>
                                                <input name="phone" type="text" id="phone" size="30" />
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
                                                University: *
                                            </td>
                                            <td>
                                                <input name="university" type="text" id="university" size="30" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Purpose of Reference Letter: *
                                            </td>
                                            <td>
                                                <input name="purpose" type="text" id="purpose" size="40" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="top">
                                                Skills and Attributes you would like emphasized: *
                                            </td>
                                            <td>
                                                <textarea name="skills" cols="40" rows="8" id="skills"></textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="top">
                                                <h2>Description of Involvement</h2>
                                            </td>
                                            <td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Title / Responsibility: *
                                            </td>
                                            <td>
                                                <input name="title" type="text" id="title" size="40" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="top">
                                                Description: *
                                            </td>
                                            <td>
                                                <textarea name="desc" cols="40" rows="8" id="desc"></textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Date of Involvement: *
                                            </td>
                                            <td>
                                                <input name="date" type="text" id="date" size="30" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Total Volunteer Hours: *
                                            </td>
                                            <td>
                                                <input name="hours" type="text" id="hours" size="30" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Your Hillel Staff: *
                                            </td>
                                            <td>
                                                <input name="staff" type="text" id="staff" size="30" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            </td>
                                            <td>
                                                <input type="submit" value="Submit Request" />
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
