<?php
$to = "tanmaysplan@gmail.com";
$subject = "Test Email from PHP";
$message = "Hello, this is a test email sent using PHP with a custom sender name.";

// Sender's name and email
$sender_name = "Your Name";
$sender_email = "principal@pict.edu";

// Headers
$headers = "From: " . $sender_name . " <" . $sender_email . ">\r\n";
$headers .= "Reply-To: " . $sender_email . "\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();

// Send email
if(mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully!";
} else {
    echo "Failed to send email.";
}
?>
