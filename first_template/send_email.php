<?php
// Configure SMTP settings using ini_set()
ini_set('SMTP', 'smtp.example.com'); // Replace with your SMTP server
ini_set('smtp_port', '25');         // Replace with the SMTP port (25, 465, or 587 depending on the server)
ini_set('sendmail_from', 'example2@gmail.com'); // Your sender email address

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);
    $to = "shallal.net@gmail.com";
    $subject = $name;
    $headers = "From: example2@gmail.com";
    $body = "Name: $name\nEmail: $email\nMessage: $message";

    if (mail($to, $subject, $body, $headers)) {
        echo "<div class='alert alert-success text-center'>Message sent successfully! The page will refresh in 5 seconds.</div>";
        echo "<script>setTimeout(() => { window.location.reload(); }, 5000);</script>";
    } else {
        echo "<div class='alert alert-danger text-center'>An error occurred while sending the message. Please try again.</div>";
    }
}
?>
