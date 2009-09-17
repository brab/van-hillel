<?php
$mailto = "hillelurbanites@vancouverhillel.ca, webforms@vancouverhillel.ca" ;
//$mailto = "webmaster@vancouverhillel.ca" ;

$subject = "HYJU Online Registration" ;

$errorurl = "formError.php" ;
$thankyouurl = "formThankyou.php" ;

$use_utf8 = 1;

$headersep = (!isset( $uself ) || ($uself == 0)) ? "\r\n" : "\n" ;
$content_type = (!isset( $use_utf8 ) || ($use_utf8 == 0)) ? 'Content-Type: text/plain; charset="iso-8859-1"' : 'Content-Type: text/plain; charset="utf-8"' ;

$name = $_POST['name'] ;
$occupation = $_POST['occupation'];
$position = $_POST['position'];
$email = $_POST['email'] ;
$phone = $_POST['phone'] ;
$address = $_POST['address'] ;
$city = $_POST['city'] ;
$province = $_POST['province'] ;
$postalCode = $_POST['postalCode'] ;
$birthday = $_POST['birthday'] ;
$proInterests = $_POST['proInterests'] ;
$socInterests = $_POST['socInterests'] ;
$health = $_POST['health'] ;
$law = $_POST['law'] ;
$business = $_POST['business'] ;
$finance = $_POST['finance'] ;
$IT = $_POST['IT'] ;
$techTrades = $_POST['techTrades'] ;
$education = $_POST['education'] ;
$entertainment = $_POST['entertainment'] ;
$hospitality = $_POST['hospitality'] ;
$nonProfit = $_POST['nonProfit'] ;
$social = $_POST['social'] ;
$publicService = $_POST['publicService'] ;
$realEstate = $_POST['realEstate'] ;
$passion = $_POST['passion'] ;

$http_referrer = getenv( "HTTP_REFERER" ) ;

if ( empty($email) || !ereg("@", $email) || empty($name) || empty($phone) || $address == "street number and name" || $city == "city" ) {
	header( "Location: $errorurl" );
	exit ;
}

$messageproper =
	"This message was sent from:\n" .
	"$http_referrer\n" .
	"------------------------------------------------------------\n" .
	"Name: $name\n" .
	"Occupation: $occupation\n" .
	"Position: $position\n" .
	"Email: $email\n" .
	"Phone: $phone\n" .
	"Address:\n" .
	"\t$address\n" .
	"\t$city, $province\n" .
	"\t$postalCode\n" .
	"Birthday: $birthday\n" .
	"--\n" .
	"Proffessional Interests:\n" .
	"$proInterests\n" .
	"--\n" .
	"Social Interests:\n" .
	"$socInterests\n" .
	"--\n" .
	"Industry:\n" .
	"$health, $law, $business, $finance, $IT, $techTrades\n" .
	"$education, $entertainment, $hospitality, $nonProfit\n" .
	"$social, $publicService, $realEstate\n" .
	"--\n" .
	"\"My Passion is...\" $passion\n".
	"------------------------------------------------------------\n" ;

$headers =
	"From: \"$name\" <$email>" . $headersep . "Reply-To: \"$name\" <$email>" . $headersep . "X-Mailer: chfeedback.php 2.13.0" .
	$headersep . 'MIME-Version: 1.0' . $headersep . $content_type ;

mail($mailto, $subject, $messageproper, $headers);
header( "Location: $thankyouurl" );
exit ;
?>