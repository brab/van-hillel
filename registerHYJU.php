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
                            <td><p class="location">location: <a href="index.php">home</a> / <a href="youngAdults.php">young adults</a> / <a href="hyju.php">hyju</a> / register for hyju</p></td>
                            <td></td>
                        </tr>
                        <tr class="top">
                            <td id="nav"><?php
									include("navYoungAdults.html");
								?>
                            </td>
                            <td id="content">
                            	<h1>Hillel's Young Jewish Urbanites Registration</h1>
                                <form id="registerHYJU" name="registerHYJU" action="registerHYJUForm.php" method="post">
                                    <table>
                                        <col width="30%" />
                                        <tr>
                                            <td>
                                                <h2>Contact Information</h2>
                                            </td>
                                            <td>
                                                <em>* Required information</em>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Name: *
                                            </td>
                                            <td>
                                                <input size="30" name="name" id="name"  />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Occupation:
                                            </td>
                                            <td>
                                                <input size="30" name="occupation" id="occupation" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Position:
                                            </td>
                                            <td>
                                                <input size="30" name="position" id="position" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Email: *
                                            </td>
                                            <td>
                                                <input size="30" name="email" id="email" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Phone: *
                                            </td>
                                            <td>
                                                <input size="30" name="phone" id="phone" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Mailing Address: *
                                            </td>
                                            <td>
                                                <input size="30" name="address" id="address" value="street number and name" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            </td>
                                            <td>
                                                <input size="20" name="city" id="city" value="city" />
                                                <input size="20" name="province" id="province" value="British Columbia" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            </td>
                                            <td>
                                                <input size="15" name="postalCode" id="postalCode" value="postal code" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Birthday: <em>mm/dd/yyyy</em>
                                            </td>
                                            <td>
                                                <input size="30" name="birthday" id="birthday" />
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
                                                <h2>Professional Interests</h2>&#13;
                                                <em>eg. networking, entrepreneurship, non-profit</em>
                                            </td>
                                            <td>
                                                <textarea cols="30" rows="4" name="proInterests" id="proInterests"></textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="top">
                                                <h2>Social Interests</h2>&#13;
                                                <em>eg. hiking, dancing, potluck</em>
                                            </td>
                                            <td>
                                                <textarea cols="30" rows="4" name="socInterests" id="socInterests"></textarea>
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
                                                <h2>Industry</h2>
                                            </td>
                                            <td>
                                            </td>
                                        </tr>
                                        <tr>
                                        	<td></td>
                                            <td>
                                                <table>
                                                    <tr>
                                                        <td>
                                                            <label>
                                                                <input name="health" id="health" value="Health" type="checkbox" />
                                                                Health
                                                            </label>
                                                        </td>
                                                        <td>
                                                            <label>
                                                                <input name="law" id="law" value="Law" type="checkbox" />
                                                                Law
                                                            </label>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label>
                                                                <input name="business" id="business" value="Business" type="checkbox" />
                                                                Business
                                                            </label>
                                                        </td>
                                                        <td>
                                                            <label>
                                                                <input name="finance" id="finance" value="Finance" type="checkbox" />
                                                                Finance
                                                            </label>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label>
                                                                <input name="IT" id="IT" value="Information Technology" type="checkbox" />
                                                                Information Technology
                                                            </label>
                                                        </td>
                                                        <td>
                                                            <label>
                                                                <input name="techTrades" id="techTrades" value="Tech and Trades" type="checkbox" />
                                                                Tech and Trades
                                                            </label>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label>
                                                                <input name="education" id="education" value="Education Academia and Research" type="checkbox" />
                                                                Education, Academia and Research
                                                            </label>
                                                        </td>
                                                        <td>
                                                            <label>
                                                                <input name="entertainment" id="entertainment" value="Entertainment" type="checkbox" />
                                                                Entertainment
                                                            </label>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label>
                                                                <input name="hospitality" id="hospitality" value="Hospitality" type="checkbox" />
                                                                Hospitality
                                                            </label>
                                                        </td>
                                                        <td>
                                                            <label>
                                                                <input name="nonProfit" id="nonProfit" value="Non Profit and Fundraising" type="checkbox" />
                                                                Non-Profit; Fundraising
                                                            </label>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label>
                                                                <input name="social" id="social" value="Social Services" type="checkbox" />
                                                                Social Services
                                                            </label>
                                                        </td>
                                                        <td>
                                                            <label>
                                                                <input name="publicService" id="publicService" value="Public Service and Government" type="checkbox" />
                                                                Public Service and Government
                                                            </label>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label>
                                                                <input name="realEstate" id="realEstate" value="Real Estate" type="checkbox" />
                                                                Real Estate
                                                            </label>
                                                        </td>
                                                        <td>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2>My Passion Is...</h2>
                                            </td>
                                            <td>
                                                <input size="45" name="passion" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            </td>
                                            <td>
                                                Questions? Comments? Contact 604 224 4748 or <a href="mailto:hillelurbanites@vancouverhillel.ca">hillelurbanites@vancouverhillel.ca</a>
                                            </td>
                                            <td>
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
									$path = "img/poster/youngAdults/";
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
