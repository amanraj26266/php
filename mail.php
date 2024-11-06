<?php 
$to = 'itsmeaman26266@gmail.com';
$subject = 'test Email';
$message = 'this is a test email using MailHog on Windows';
$headers = 'From: webmaster@example.com' . "\r\n";
$headers .= 'Reply-To: webmaster@example.com' . "\r\n";
$headers .= 'X-Mailer: PHP/' . phpversion();

if (mail($to, $subject, $message, $headers)) {
echo 'Email sent successfully';
} else {
echo 'Failed to send email.';
}
?>
