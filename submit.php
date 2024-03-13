<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/Exception.php';
require './PHPMailer/src/SMTP.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $number = $_POST["number"];
    $subject = $_POST["subject"];

    // Compose email message
    $message = "Name: " . $name . "\nEmail: " . $email . "\nNumber: " . $number . "\nMessage: " . $subject;

    // Send email using PHPMailer
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'chandrapiyush649@gmail.com'; // Your Gmail email address
        $mail->Password = 'cmnm ixnk awgu oqso'; // Your Gmail App Password
        $mail->SMTPSecure = 'tls'; // Use 'tls' or 'ssl' based on your server configuration
        $mail->Port = 587; // Gmail SMTP port (465 or 587)

        //Recipients
        $mail->setFrom('chandrapiyush649@gmail.com', 'Piyush Chandra'); // Your name and email
        $mail->addAddress('chandrapiyush649@gmail.com'); // Recipient email

        // Reply to sender's email
        $mail->addReplyTo($email, $name);

        //Content
        $mail->isHTML(false);
        $mail->Subject = 'New Form Submission';
        $mail->Body = $message;

        $mail->send();
        header('Location: index.php?status=success#contact-form-section');
        exit();
    } catch (Exception $e) {
        header('Location: index.php?status=error#contact-form-section');
        exit();
    }
}
?>
