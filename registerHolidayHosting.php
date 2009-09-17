<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>register holiday hosting</title>

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
<h1>Register for Holiday Hosting</h1>
<form id="registerHolidayHosting" name="registerHolidayHosting" action="registerHolidayHostingForm.php" method="post">
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
                Phone: *
            </td>
            <td>
                <input size="30" name="phone" id="phone" />
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
                Location: *<br />
                <em>eg. 41st and Arbutus; South Burnaby; Saanich</em>
            </td>
            <td class="top">
                <input size="30" name="location" id="location" />
            </td>
        </tr>
        <tr>
            <td>
            </td>
            <td>
                <label>
                    <input name="kosher" id="kosher" value="yes" type="checkbox" />
                    I keep Kosher / I can host Kosher guests
                </label>
            </td>
        </tr>
        <tr>
            <td>
            </td>
            <td>
                <label>
                    <input name="vegetarian" id="vegetarian" value="yes" type="checkbox" />
                    I eat / can host vegetarian meals
                </label>
            </td>
        </tr>
        <tr>
            <td>
                I would like to host / be hosted for: *
            </td>
            <td>
                <select name="holiday" id="holiday">
                    <option value="" selected="selected">select</option>
                    <option value="Shabbat">Shabbat</option>
                    <option value="Rosh Hashanah">Rosh Hashanah</option>
                    <option value="Yom Kippur">Yom Kippur (breaking fast)</option>
                    <option value="Sukkot">Sukkot</option>
                    <option value="Passover">Passover</option>
                    <option value="Shavuot">Shavuot</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
            </td>
            <td>
            	<label>
                    <input name="hostType" type="radio" id="hostType_0" value="student" />
                    I am a student looking for a family to host me
                </label>
                <br />
                <label>
                    <input name="hostType" type="radio" id="hostType_1" value="family host" />
                    We are a family looking to host a student
                </label>
            </td>
        </tr>
        <tr>
            <td>
                Preferred Date(s):
            </td>
            <td>
                <input size="30" name="date" id="date" />
            </td>
        </tr>
        <tr>
            <td class="top">
                Special requests or notes:
            </td>
            <td>
                <textarea name="notes" cols="40" rows="5" id="notes"></textarea>
            </td>
        </tr>
        <tr>
            <td>
            </td>
            <td>
            </td>
        </tr>
        <tr>
            <td>
                <h2>Family Host:</h2>
            </td>
            <td>
            </td>
        </tr>
        <tr>
            <td>
                How many students would you like to accomodate?
            </td>
            <td>
                <input size="5" name="numStudents" id="numStudents" />
            </td>
        </tr>
        <tr>
            <td>
            </td>
            <td>
            	<em>Thank you for sharing your holiday with us. A representative from Hillel will contact you soon.</em>
            </td>
        </tr>
        <tr>
            <td>
            </td>
            <td>
                <input type="submit" value="Submit" />
            </td>
        </tr>
    </table>
</form>
</body>
</html>
