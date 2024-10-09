<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // फॉर्म से डेटा प्राप्त करें
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // ईमेल भेजने के लिए सेटिंग्स
    $to = "your-email@example.com";  // यहाँ अपना ईमेल डालें
    $subject = "New Form Submission";
    $body = "Name: $name\nEmail: $email\nMessage: $message";
    $headers = "From: $email";

    // ईमेल भेजें
    if (mail($to, $subject, $body, $headers)) {
        echo "Email successfully sent to $to!";
    } else {
        echo "Email sending failed.";
    }
}
?>