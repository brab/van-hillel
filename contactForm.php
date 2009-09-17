<?php
$mailto = "info@vancouverhillel.ca, webforms@vancouverhillel.ca" ;
//$mailto = "webmaster@vancouverhillel.ca" ;

$subject = "General Website Inquiry" ;

$errorurl = "formError.php" ;
$thankyouurl = "formThankyou.php" ;

$headersep = (!isset( $uself ) || ($uself == 0)) ? "\r\n" : "\n" ;
$content_type = (!isset( $use_utf8 ) || ($use_utf8 == 0)) ? 'Content-Type: text/plain; charset="iso-8859-1"' : 'Content-Type: text/plain; charset="utf-8"' ;

$name = $_POST['name'] ;
$email = $_POST['email'] ;
$phone = $_POST['phone'] ;
$msgSubject = $_POST['subject'] ;
$message = $_POST['message'] ;

$http_referrer = getenv( "HTTP_REFERER" ) ;

if ( empty($name) || ((empty($email) || !ereg("@", $email)) && empty($phone)) || empty($subject) || empty($message) ) {
	header( "Location: $errorurl" );
	exit ;
}

$frommail = $email ;

$messageproper =
	"This message was sent from:\n" .
	"$http_referrer\n" .
	"------------------------------------------------------------\n" .
	"Subject: $msgSubject\n" .
	"Name: $name\n" .
	"Phone: $phone\n" .
	"Email: $email\n" .
	"--\n" .
	"$message\n" .
	"------------------------------------------------------------\n" ;

$headers =
	"From: \"$name\" <$frommail>" . $headersep . "Reply-To: \"$name\" <$email>" . $headersep . "X-Mailer: chfeedback.php 2.13.0" .
	$headersep . 'MIME-Version: 1.0' . $headersep . $content_type ;

mail($mailto, $subject, $messageproper, $headers);
header( "Location: $thankyouurl" );
exit ;

?>