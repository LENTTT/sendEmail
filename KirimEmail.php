<?php
// Recipient email address
$to = 'valentinus.soejito.02@gmail.com';

// Subject of the email
$subject = 'Test';

// Message body
$message = 'This is another email spoofing test.';

// Sender email and name
$senderEmail = 'valentinus.wilbert@student.id';
$senderName = 'Valentinus Wilbert';

// Additional headers
$headers = 'From: ' . $senderName . ' <' . $senderEmail . '>' . "\r\n" .
           'Reply-To: ' . $senderEmail . "\r\n" .
           'X-Mailer: PHP/' . phpversion();

// Send email
if (mail($to, $subject, $message, $headers)) {
    echo 'Email sent successfully!';
} else {
    echo 'Failed to send email.';
}
?>
