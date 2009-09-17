<?php
$errorurl = "formError.php" ;
$thankyouurl = "formThankyou.php" ;

$subject = "Joining The Community Email List" ;

$name = $_POST['name'] ;
$email = $_POST['email'] ;
$phone = $_POST['phone'] ;
$address = $_POST['address'] ;
$city = $_POST['city'] ;
$prov = $_POST['prov'] ;
$postalCode = $_POST['postalCode'] ;
$involvedChild = $_POST['involvedChild'] ;
$info = $_POST['info'] ;

if( empty($name) || empty($email) || !ereg("@", $email) || empty($phone) ){
	header( "Location: $errorurl" );
	exit ;
}

$mailto = 'info@vancouverhillel.ca, webforms@vancouverhillel.ca';

$http_referrer = getenv( "HTTP_REFERER" ) ;
$headersep = (!isset( $uself ) || ($uself == 0)) ? "\r\n" : "\n" ;
$content_type = (!isset( $use_utf8 ) || ($use_utf8 == 0)) ? 'Content-Type: text/plain; charset="iso-8859-1"' : 'Content-Type: text/plain; charset="utf-8"' ;
if (!isset( $use_envsender )) { $use_envsender = 0 ; }
$envsender = "-f$mailto" ;

$messageproper =
	"This message was sent from:\n" .
	"$http_referrer\n\n" .
	"------------------------------------------------------------\n" .
	"Name: $name\n" .
	"Email: $email\n" .
	"Telephone: $phone\n" .
	"Address:\n" .
	"\t$address\n" .
	"\t$city, $prov\n" .
	"\t$postalCode\n" .
	"I have a child involved with Hillel (no if blank): $involvedChild\n" .
	"I would like to receive information about:\n" .
	"$info\n" .
	"------------------------------------------------------------\n" ;

$headers =
	"From: \"$name\" <$email>" . $headersep . "Reply-To: \"$name\" <$frommail>" . $headersep . "X-Mailer: chfeedback.php 2.13.0" .
	$headersep . 'MIME-Version: 1.0' . $headersep . $content_type ;
	
mail($mailto, $subject, $messageproper, $headers);

header( "Location: $thankyouurl" );
exit ;
?>