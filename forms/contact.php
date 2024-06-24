<?php

$receiving_email_address = 'yemi.branco@gilbraltarinvestmentlimited.com';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $from_name = $_POST['name'];
    $from_email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $headers = "From: $from_name <$from_email>\r\n";
    $headers .= "Reply-To: $from_email\r\n";

    $full_message = "From: $from_name\n";
    $full_message .= "Email: $from_email\n\n";
    $full_message .= "Message:\n$message\n";

    if (mail($receiving_email_address, $subject, $full_message, $headers)) {
        echo 'Message sent successfully!';
    } else {
        echo 'Failed to send the message.';
    }
} else {
    die('Invalid request method');
}
?>
