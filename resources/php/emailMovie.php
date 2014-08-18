<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

require 'PHPMailer/PHPMailerAutoload.php';
$movie = $_POST["movieName"];
ltrim($movie);
$year = $_POST["movieYear"];

$msg = sprintf("%s" . " %d", $movie, $year);
$msg2  = sprintf("http://thepiratebay.se/search/" . "%s" . " " . "%d" . "/0/7/0", $movie, $year);
$msg2 = str_replace(" ", "+", $msg2);




$mail = new PHPMailer;

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'examplesender@gmail.com';                 // SMTP username
$mail->Password = 'supersecurepassword';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted

$mail->From = 'from@example.com';
$mail->FromName = 'Movie Download';
$mail->addAddress('examplereciever@gmail.com', "first last");     // Add a recipient

$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'New Request';
$mail->Body    = $msg . ' <a href=' . $msg2 . '>PirateBay Search</a>';
$mail->AltBody = $msg . " " . $msg2;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}
?>
<script type="text/javascript">
	window.location.href = '/request/'
</script>
</body>
</html>