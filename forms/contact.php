<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $help = $_POST['help'];

    // Set the recipient email address
    $to = 'nansumbamaryvanessa@gmail.com';

    // Set the email subject
    $email_subject = "New Contact Form Submission";

    // Compose the email message
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n\n";
    $email_message .= "How can we help:\n$help";

    // Set the headers
    $headers = "From: $email\r\nReply-To: $email\r\n";

    // Send the email
    $success = mail($to, $email_subject, $email_message, $headers);

    if ($success) {
        echo "OK";
    } else {
        echo "Sorry, there was an error sending your message.";
    }
} else {
    // If the request method is not POST, display an error message.
    echo "Invalid request method";
}
?>
