<?php
use PHPMailer\PHPMailer\PHPMailer;
ini_set('SMTP', 'localhost');  // Utilisez 'localhost' pour le serveur SMTP de MailHog
ini_set('smtp_port', 1025);     // Port utilisé par MailHog (par défaut : 1025)

require 'vendor/autoload.php';


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
        $to = $email;
        $subject = "Support Request - $subject";
        $message = "Name: $firstname $lastname\n";
        $message .= "Gender: $gender\n";
        $message .= "Country: $country\n";
        $message .= "Subject: $subject\n";
        $message .= "Message:\n$description";



        $mail = new PHPMailer();

        $mail->isSMTP();
        $mail->Host = 'localhost';
        $mail->SMTPAuth = false;
        $mail->Port = 1025;

        $mail->setFrom("$email", "Client");
        $mail->addAddress($email, 'Admin');
        $mail->Subject = "Support: $subject\n";

        $mail->Body = "First Name: $firstname\n";
        $mail->Body .= "Last Name: $lastname\n";
        $mail->Body .= "Country: $country\n";
        $mail->Body .= "Email: $email\n";
        $mail->Body .= "Message:\n$description\n";

        if ($mail->send()) {
            echo 'Email sent successfully!';
        } else {
            echo 'Email could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }
    }
} else {
    // Handle non-POST requests
    echo "Invalid request method.";
}

