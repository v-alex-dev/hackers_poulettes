<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check for the honeypot field
    if (!empty($_POST["honeypot"])) {
        // This is likely a spam submission, so ignore it
        exit;
    }

    // Sanitize and validate data
    $firstname = htmlspecialchars($_POST["firstname"]);
    $lastname = htmlspecialchars($_POST["lastname"]);
    $gender = htmlspecialchars($_POST["gender"]);
    $email = filter_var($_POST["email"], FILTER_VALIDATE_EMAIL);
    $country = htmlspecialchars($_POST["country"]);
    $subject = htmlspecialchars($_POST["subject"]);
    $description = htmlspecialchars($_POST["description"]);

    if (empty($firstname) || empty($lastname) || empty($gender) || empty($email) || empty($country) || empty($subject) || empty($description)) {
        // If any required field is empty, display an error message
        echo "Please fill in all required fields.";
    } elseif (!$email) {
        // If the email is invalid, display an error message
        echo "Invalid email address.";
    } else {
        // All data is valid, send an email to the support team
        $to = "support@hackerspoulette.com"; // Replace with the actual support email
        $subject = "Support Request - $subject";
        $message = "Name: $firstname $lastname\n";
        $message .= "Gender: $gender\n";
        $message .= "Email: $email\n";
        $message .= "Country: $country\n";
        $message .= "Subject: $subject\n";
        $message .= "Message:\n$description";

        if (mail($to, $subject, $message)) {
            // Email sent successfully
            echo "Thank you for contacting us. Your request has been submitted.";
        } else {
            // Email sending failed
            echo "An error occurred while processing your request. Please try again later.";
        }
    }
} else {
    // Handle non-POST requests
    echo "Invalid request method.";
}

