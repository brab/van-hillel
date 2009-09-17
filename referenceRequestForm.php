<?php
$subject = "Hillel Reference Letter Request" ;

$mailto = "webforms@vancouverhillel.ca, pat@vancouverhillel.ca" ;
//$mailto = "webmaster@vancouverhillel.ca";

$errorurl = "formError.php" ;
$thankyouurl = "formThankyou.php" ;
$use_utf8 = 1;

$headersep = (!isset( $uself ) || ($uself == 0)) ? "\r\n" : "\n" ;
$content_type = (!isset( $use_utf8 ) || ($use_utf8 == 0)) ? 'Content-Type: text/plain; charset="iso-8859-1"' : 'Content-Type: text/plain; charset="utf-8"' ;

$name = $_POST['name'] ;
$email = $_POST['email'] ;
$phone = $_POST['phone'] ;
$address = $_POST['address'] ;
$city = $_POST['city'] ;
$province = $_POST['prov'] ;
$postalCode = $_POST['postalCode'] ;
$university = $_POST['university'];
$purpose = $_POST['purpose'] ;
$skills = $_POST['skills'];
$title = $_POST['title'] ;
$description = $_POST['description'] ;
$date = $_POST['date'];
$hours = $_POST['hours'];
$staff = $_POST['staff'];

$http_referrer = getenv( "HTTP_REFERER" ) ;

//checks the email, name and phone requirements
if ( empty($email) || !ereg("@", $email) || empty($name) || empty($phone) || $address == "street number and name" || empty($university) || empty($purpose) || empty($skills) || empty($title) || empty($description) || empty($date) || empty($hours) || empty($staff) ) {
	header( "Location: $errorurl" );
	exit ;
}

$messageproper =
	"This message was sent from:\n" .
	"$http_referrer\n" .
	"------------------------------------------------------------\n" .
	"Name: $name\n" .
	"Email: $email\n" .
	"Phone: $phone\n" .
	"Address:\n" .
	"\t$address\n" .
	"\t$city, $province\n" .
	"\t$postalCode\n" .
	"--\n" .
	"University: $university\n" .
	"Purpose of Letter: $purpose\n" .
	"Skills I would like emphasized:\n" .
	"$skills\n" .
	"--\n" .
	"Title / Responsibility: $title\n" .
	"Description of volunteer work:\n" .
	"$desc\n" .
	"--\n" .
	"Date of involvement: $date\n" .
	"Total volunteer hours: $hours\n" .
	"Their Hillel staff: $staff\n" .
	"------------------------------------------------------------\n" ;

$headers =
	"From: \"$name\" <$email>" . $headersep . "Reply-To: \"$name\" <$email>" . $headersep . "X-Mailer: chfeedback.php 2.13.0" .
	$headersep . 'MIME-Version: 1.0' . $headersep . $content_type ;

mail($mailto, $subject, $messageproper, $headers);

header( "Location: $thankyouurl" );
exit ;
?>