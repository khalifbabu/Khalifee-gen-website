<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "khalifbabu84@gmail.com"; // Replace with your email
    $subject = "New Contact Form Message from $name";
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Error sending message.";
    }
}
?>