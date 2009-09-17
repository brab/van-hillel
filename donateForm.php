<?php
$mailto = "info@vancouverhillel.ca, webforms@vancouverhillel.ca" ;
//$mailto = "webmaster@vancouverhillel.ca" ;

$subject = "Online Donation" ;

$errorurl = "formError.php" ;
$thankyouurl = "formThankyou.php" ;

$headersep = (!isset( $uself ) || ($uself == 0)) ? "\r\n" : "\n" ;
$content_type = (!isset( $use_utf8 ) || ($use_utf8 == 0)) ? 'Content-Type: text/plain; charset="iso-8859-1"' : 'Content-Type: text/plain; charset="utf-8"' ;

$name = $_POST['name'] ;
$email = $_POST['email'] ;
$phone = $_POST['phone'] ;
$address = $_POST['address'] ;
$city = $_POST['city'] ;
$prov = $_POST['prov'] ;
$postalCode = $_POST['postalCode'] ;
$amount = $_POST['amount'] ;
$cardType = $_POST['cardType'] ;
$cardNumber = $_POST['cardNumber'] ;
$cardExpiry = $_POST['cardExpiry'] ;
$cardName = $_POST['cardName'] ;
$http_referrer = getenv( "HTTP_REFERER" ) ;

if ( empty($email) || !ereg("@", $email) || empty($name) || empty($phone) || $cardType == "select" || empty($address) || ($amount == "$") || empty($cardNumber) || empty($cardExpiry) || empty($cardName) ) {
	header( "Location: $errorurl" );
	exit ;
}

$frommail = $email ;

$messageproper =
	"This message was sent from:\n" .
	"$http_referrer\n" .
	"------------------------------------------------------------\n" .
	"Name: $name\n" .
	"Phone: $phone\n" .
	"Email: $email\n" .
	"Address:\n" .
	"\t$address\n" .
	"\t$city, $prov\n" .
	"\t$postalCode\n" .
	"--\n" .
	"Donation Amount: $amount\n" .
	"Card Type: $cardType\n" .
	"Card Number: $cardNumber\n" .
	"Expiry: $cardExpiry\n" .
	"Name on Card: $cardName\n" .
	"------------------------------------------------------------\n" ;

$headers =
	"From: \"$name\" <$frommail>" . $headersep . "Reply-To: \"$name\" <$email>" . $headersep . "X-Mailer: chfeedback.php 2.13.0" .
	$headersep . 'MIME-Version: 1.0' . $headersep . $content_type ;

mail($mailto, $subject, $messageproper, $headers);
header( "Location: $thankyouurl" );
exit ;

?>