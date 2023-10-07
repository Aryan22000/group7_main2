
<?php
$to = 'elahekamali20@yahoo.com';
$subject = 'Test Email';
$message = 'Hello, this is a test email from PHP.';
$headers = 'From: group7designfactory@gmail.com' . "\r\n" .
    'Reply-To: group7designfactory@gmail.com';

if (mail($to, $subject, $message, $headers)) {
    echo 'Email sent successfully!';
} else {
    echo 'Failed to send email.';
}
?>