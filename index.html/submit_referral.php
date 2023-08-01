<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get the form data
    $referrer_name = $_POST["referrer_name"];
    $referrer_email = $_POST["referrer_email"];
    $friend_name = $_POST["friend_name"];
    $friend_email = $_POST["friend_email"];

    // Save the referral information to your database or send it to your email
    // For example, if you want to send it via email:
    $to = "fayezalchohuff@gmail.com";
    $subject = "New Referral Submission";
    $message = "Referrer Name: $referrer_name\nReferrer Email: $referrer_email\nFriend Name: $friend_name\nFriend Email: $friend_email";
    $headers = "From: fayezalchohuff@gmail.com";

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
