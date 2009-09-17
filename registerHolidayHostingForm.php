<?php
$mailto = "pat@vancouverhillel.ca, webforms@vancouverhillel.ca" ;
// for testing
//$mailto = "webmaster@vancouverhillel.ca" ;

$subject = "Holiday Hosting Registration" ;

$errorurl = "formError.php" ;
$thankyouurl = "formThankyou.php" ;
$use_utf8 = 1;

$headersep = (!isset( $uself ) || ($uself == 0)) ? "\r\n" : "\n" ;
$content_type = (!isset( $use_utf8 ) || ($use_utf8 == 0)) ? 'Content-Type: text/plain; charset="iso-8859-1"' : 'Content-Type: text/plain; charset="utf-8"' ;

$name = $_POST['name'] ;
$phone = $_POST['phone'] ;
$email = $_POST['email'] ;
$location = $_POST['location'];
$kosher = $_POST['kosher'] ;
$vegetarian = $_POST['vegetarian'] ;
$holiday = $_POST['holiday'] ;
$date = $_POST['date'];
$hostType = $_POST['hostType'] ;
$notes = $_POST['notes'] ;
$numStudents = $_POST['numStudents'] ;

$http_referrer = getenv( "HTTP_REFERER" ) ;

if ( empty($email) || !ereg("@", $email) || empty($name) || empty($phone) || empty($location) || $holiday == "select" || $hostType == "" ) {
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
