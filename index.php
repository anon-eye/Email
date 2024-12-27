<?php
// Process the form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Set up email headers
    $to = "ytadarshkumar000@gmail.com"; // Replace with your email address
    $subject = "Message from contact form";
    $headers = "From: $name <$email>";

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        echo "Your message has been sent.";
    } else {
        echo "Error sending message.";
    }
}
?>
