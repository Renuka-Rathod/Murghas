<?php
// Retrieve form data
$name = $_POST['firstname'];
$tel = $_POST['tel'];
$subject = $_POST['subject'];

// Compose email message
$emailBody = "Name: " . $name . "\n";
$emailBody .= "Phone Number: " . $tel . "\n";
$emailBody .= "Subject: " . $subject;

// Set up email parameters
$to = "wanade9@gmail.com";
$subject = "Contact Form Submission";
$headers = "From: contact-form@example.com" . "\r\n" .
           "Reply-To: " . $to . "\r\n" .
           "X-Mailer: PHP/" . phpversion();

// Send the email
$mailSent = mail($to, $subject, $emailBody, $headers);

// Check if the email was sent successfully
if ($mailSent) {
    echo "Email sent successfully!";
} else {
    echo "Failed to send email.";
}
?>    