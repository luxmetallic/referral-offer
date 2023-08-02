<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get the form data
    $referrer_name = $_POST["referrer_name"];
    $referrer_mobile = $_POST["referrer_mobile"];
    $referred_name = $_POST["referred_name"];
    $referred_mobile = $_POST["referred_mobile"];

    // Save the referral information to your database or send it to your email
    // For example, if you want to send it via email:
    $to = "luxstoke@gmail.com";
    $subject = "New Referral Submission";
    $message = "Referrer Name: $referrer_name\nReferrer Mobile: $referrer_mobile\nReferred Name: $referred_name\nReferred Mobile: $referred_mobile";
    $headers = "From: luxstoke@gmail.com";

    if (mail($to, $subject, $message, $headers)) {
        // If the email is sent successfully, you can redirect the user to a thank you page or show a success message
        header("Location: thank_you.html");
        exit();
    } else {
        // If there was an error sending the email, you can show an error message or redirect to an error page
        echo "Error sending referral information. Please try again later.";
    }
}
?>
