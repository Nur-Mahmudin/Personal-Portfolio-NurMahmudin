<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
    $fullname = htmlspecialchars($_POST['fullname']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Email Anda
    $to = "nurmahmudin08@gmail.com";
    $subject = "New Message from $fullname";
    $body = "Name: $fullname\nEmail: $email\n\nMessage:\n$message";

    // Headers
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "Content-Type: text/plain; charset=UTF-8";

    // Kirim email
    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully.";
    } else {
        echo "Failed to send message.";
    }
}
?>
