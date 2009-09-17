<?php

$mailto = "webforms@vancouverhillel.ca";
// for testing
//$mailto = "webmaster@vancouverhillel.ca";

$subject = "Hillel Online Student Registration" ;

$errorurl = "formError.php" ;
$thankyouurl = "formThankyou.php" ;
$use_utf8 = 1;

//Campuses
$ubc = $_POST['ubc'];
$sfu = $_POST['sfu'];
$uvic = $_POST['uvic'];

//Personal Contact Info
$name = $_POST['name'] ;
$birthday = $_POST['birthday'] ;
$address = $_POST['address'] ;
$city = $_POST['city'] ;
$province = $_POST['prov'] ;
$postalCode = $_POST['postalCode'] ;
$address_type = $_POST['permanentAddress'];
$cellPhone = $_POST['cellPhone'] ;
$homePhone = $_POST['homePhone'] ;
$email = $_POST['email'] ;
$faceName = $_POST['facename'] ;
$faceNet = $_POST['faceNet'] ;
$campus = $_POST['campus'];
$faculty = $_POST['faculty'];
$yearOfStudy = $_POST['yearOfStudy'];

//Interests
$jsa = $_POST['jsa'];
$iac = $_POST['iac'];
$aepi = $_POST['aepi'];
$hyju = $_POST['hyju'];
$holocaust = $_POST['holocaust'];
$interfaith = $_POST['interfaith'];
$charity = $_POST['charity'];
$sportRec = $_POST['sportRec'];
$glbtq = $_POST['glbtq'];
$politics = $_POST['politics'];
$environment = $_POST['environment'];

//Misc
$leadership = $_POST['leadership'];
$birthright = $_POST['birthright'];
$skills = $_POST['skills'];

//Comments
$comments = $_POST['comments'];

//Parents' Contact Info
$pName = $_POST['pName'];
$pAddress = $_POST['pAddress'] ;
$pCity = $_POST['pCity'] ;
$pProvince = $_POST['pProv'] ;
$pPostalCode = $_POST['pPostalCode'] ;
$pPhone = $_POST['pPhone'] ;
$pEmail = $_POST['pEmail'] ;

$http_referrer = getenv( "HTTP_REFERER" ) ;

// checks whether campus of involvment has been selected
if( empty($ubc) && empty($sfu) && empty($uvic) ){
	header( "Location: $errorurl" );
	exit ;
}
// if at least one campus was selected:
// sets the mailing address according to the user's campus selection
else{
	$mailto = $mailto . $ubc . $sfu . $uvic;
	// for testing
	//$mailtoString = $mailto . $ubc . $sfu . $uvic;
	//echo $mailtoString;
}

// checks required personal contact info
if( empty($name) || $address == "street number and name" || ( empty($cellPhone) && empty($homePhone) ) || empty($email) || !ereg("@", $email) || empty($campus) ){
	header( "Location: $errorurl" );
	exit ;
}

$headersep = (!isset( $uself ) || ($uself == 0)) ? "\r\n" : "\n" ;
$content_type = (!isset( $use_utf8 ) || ($use_utf8 == 0)) ? 'Content-Type: text/plain; charset="iso-8859-1"' : 'Content-Type: text/plain; charset="utf-8"' ;

//checks the parent information requirements
//a name is required
//an address containing street info and city 
//OR
//a phone number 
//OR
//an email address
//is required. More than one of the above is permitted
if ( empty($pName) || ( ($pAddress == "street number and name" || $pCity == "city" ) && empty($pPhone) && empty($pEmail) ) ){
	header("Location: $errorurl");
	exit ;
}

$messageproper =
	"This message was sent from:\n" .
	"$http_referrer\n" .
	"------------------------------------------------------------\n" .
	"You are receiving this email because the following person\n" .
	"has expressed interest in being involved on your campus and\n" .
	"would like to receive your weekly emails. Please add them\n" .
	"to your Mailman email list and Excel student database\n" .
	"--\n" .
	"Name: $name\n" .
	"Birthday: $birthday\n" .
	"Address:\n" .
	"\t$address\n" .
	"\t$city, $province\n" .
	"\t$postalCode\n" .
	"Address Type: $address_type\n" .
	"Cell Phone: $cellPhone\n" .
	"Home Phone: $homePhone\n" .
	"Email: $email\n" .
	"Facebook: $faceName, $faceNet\n" .	
	"Studying at: $campus\n" .
	"Area of study: $faculty\n" .
	"Year of study: $yearOfStudy\n" .
	"--\n" .
	"Interests:\n" .
	"\t$jsa, $iac, $aepi, $holocaust, $interfaith,\n" .
	"\t$charity, $sportRec, $glbtq, $politics, $environment\n" .
	"I would like to take on a leadership role (no if blank): $leadership\n" .
	"I have been on Birthright (no if blank): $birthright\n" .
	"--\n" .
	"Skills I can share:\n" .
	"$skills\n\n" .
	"Comments:\n" .
	"$comments\n" .
	"--\n" .
	"Parent's Name: $pName\n" .
	"Parent's Address:\n" .
	"\t$pAddress\n" .
	"\t$pCity, $pProvince\n" .
	"\t$pPostalCode\n" .
	"Parent's Phone: $pPhone\n" .
	"Parent's Email: $pEmail\n" .
	"------------------------------------------------------------\n" ;

$headers =
	"From: \"$name\" <$email>" . $headersep . "Reply-To: \"$name\" <$email>" . $headersep . "X-Mailer: chfeedback.php 2.13.0" .
	$headersep . 'MIME-Version: 1.0' . $headersep . $content_type ;

mail($mailto, $subject, $messageproper, $headers);

header( "Location: $thankyouurl" );
exit ;
?>