<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize input
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Prepare the email
    $to = "patildipakveruli@gmail.com"; // Your email address
    $subject = "New Contact Form Message from $name";
    $body = "Name: $name\nEmail: $email\nMessage:\n$message";
    $headers = "From: $email";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo "<script>alert('Message sent successfully!'); window.location.href='contact.html';</script>";
    } else {
        echo "<script>alert('Message could not be sent. Please try again later.'); window.location.href='contact.html';</script>";
    }
} else {
    echo "Invalid request.";
}
?>
