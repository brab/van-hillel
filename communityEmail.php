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
                            <td><p class="location">location: <a href="index.php">home</a> / <a href="parents.php">parents</a> / join our community email list</p></td>
                            <td></td>
                        </tr>
                        <tr class="top">
                            <td id="nav"><?php
									include("navParents.html");
								?>
                            </td>
                            <td id="content">
                            	<h1>Community Email List</h1>
            
                                <p>Vancouver Hillel is the best student club on campus and an esteemed, vital part of B.C.’s Jewish community. Vancouver Hillel students, board members and staff are often looked to for involvement and support in the campus and general community. Participation is welcome and volunteer opportunities are tailored to match interests. We look forward to keeping you informed of developments on campus and Hillel's continued successes.</p>
                                
                                <p>Registration on Vancouver Hillel’s email list provides members with event and <q>classifieds</q> listings. Learn about upcoming Vancouver Hillel events, community functions, overseas opportunities, scholarship information, job listings and more!</p>
                                
                                <p>Join Vancouver Hillel’s email list by filling out the form below: </p>
                                
                                <form id="communityEmail" name="communityEmail" action="communityEmailForm.php" method="post">
                                	<table>
                                    	<col width="30%" />
                                        <col width="1*" />
                                        <tr>
                                        	<td></td>
                                            <td><em>* All information is required</em></td>
                                        </tr>
                                        <tr>
                                        	<td>Full Name: *</td>
                                            <td class="left"><input size="30" name="name" id="name" /></td>
                                        </tr>
                                        <tr>
                                        	<td>Email: *</td>
                                            <td class="left"><input size="30" name="email" id="email" /></td>
                                        </tr>
                                        <tr>
                                        	<td>Telephone: *</td>
                                            <td class="left"><input size="30" name="phone" id="phone" /></td>
                                        </tr>
                                        <tr>
                                        	<td>Preferred Address: *</td>
                                            <td class="left">
                                            	<input name="address" type="text" id="address" value="street number and name" size="30" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td class="left">
                                                <input name="city" type="text" id="city" value="city" size="20" />
                                                <input name="prov" type="text" id="prov" value="British Columbia" size="20" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td class="left">
                                                <input name="postalCode" type="text" id="postalCode" value="postal code" size="15" />
                                            </td>
                                        </tr>
                                        <tr>
                                        	<td></td>
                                            <td class="left">
                                            	<label>
                                                	<input name="involvedChild" type="checkbox" id="involvedChild" value="yes" />
                                                    I have a son or daughter involved with Hillel
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                        	<td>What kind of information are you most interested in receiving?</td>
                                            <td class="left">
                                            	<textarea cols="25" rows="4" name="info" id="info"></textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                        	<td></td>
                                            <td class="left"><input type="submit" value="Submit" /></td>
                                        </tr>
                                        <tr>
                                        	<td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                        	<td></td>
                                            <td></td>
                                        </tr>
                                    </table>
                                </form>
            				</td>
                            <td id="posters">
                                <?php
									$maxPosters = 2;
									$path = "img/poster/parents/";
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
