<?php
$mailto = "pat@vancouverhillel.ca, webforms@vancouverhillel.ca" ;
// for testing
//$mailto = "webmaster@vancouverhillel.ca" ;

$subject = "Hillel Alumni Online Registration" ;

$errorurl = "formError.php" ;
$thankyouurl = "formThankyou.php" ;
$use_utf8 = 1;

$headersep = (!isset( $uself ) || ($uself == 0)) ? "\r\n" : "\n" ;
$content_type = (!isset( $use_utf8 ) || ($use_utf8 == 0)) ? 'Content-Type: text/plain; charset="iso-8859-1"' : 'Content-Type: text/plain; charset="utf-8"' ;

$title = $_POST['title'];
$name = $_POST['name'] ;
$surname = $_POST['surname'] ;
$address = $_POST['address'] ;
$city = $_POST['city'];
$prov = $_POST['prov'];
$country = $_POST['country'];
$postalCode = $_POST['postalCode'];
$phone = $_POST['phone'] ;
$email = $_POST['email'] ;
$univ = $_POST['univ'];
$faculty = $_POST['faculty'] ;
$gradYear = $_POST['gradYear'] ;
$yearsAtHillel = $_POST['yearsAtHillel'] ;
$hillelFriends = $_POST['hillelFriends'];

$http_referrer = getenv( "HTTP_REFERER" ) ;

if ( $title == "select" || empty($name) || empty($surname) || empty($address) || empty($city) || empty($prov) || empty($country) || empty($postalCode) || empty($phone) || empty($email) || !ereg("@", $email) ) {
	header( "Location: $errorurl" );
	exit ;
}

$messageproper =
	"This message was sent from:\n" .
	"$http_referrer\n" .
	"------------------------------------------------------------\n" .
	"Name: $name\n" .
	"Phone: $phone\n" .
	"Email: $email\n" .
	"Location: $location\n" .
	"Kosher (no if blank): $kosher\n" .
	"Vegetarian (no if blank): $vegetarian\n" .
	"Holiday: $holiday\n" .
	"I am a student/family: $hostType\n" .
	"Preferred date(s): $date\n" .
	"Special Notes:\n" .
	"$notes\n" .
	"--\n" .
	"Our family would like to host $numStudents students\n" .
	"------------------------------------------------------------\n" ;

$headers =
	"From: \"$name\" <$email>" . $headersep . "Reply-To: \"$name\" <$email>" . $headersep . "X-Mailer: chfeedback.php 2.13.0" .
	$headersep . 'MIME-Version: 1.0' . $headersep . $content_type ;

mail($mailto, $subject, $messageproper, $headers);
header( "Location: $thankyouurl" );
exit ;

?>
