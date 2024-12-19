<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);
    $to = "example1@gmail.com";
    $subject = $name;
    $headers = "From: example2@gmail.com";
    $body = "Name: $name\nEmail: $email\nMessage: $message";

    if (mail($to, $subject, $body, $headers)) {
        echo "<div class='alert alert-success text-center'>Message sent successfully! The page will refresh in 5 seconds.</div>";
        echo "<script>setTimeout(() => { window.location.href = 'index.html'; }, 5000);</script>";
    } else {
        echo "<div class='alert alert-danger text-center'>An error occurred while sending the message. Please try again.</div>";
    }
}
?>