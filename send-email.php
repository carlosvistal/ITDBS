<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/Autoload.php';

$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

$mail = new PHPMailer(true);


    // Server settings
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Correct secure type
    $mail->Port = 587;

    // Gmail credentials
    $mail->Username = 'vistalcarlosfidel@gmail.com';
    $mail->Password = 'n u b f r q a u a z k u s j a w'; // Use Gmail App Password, not your login password

    // Sender and recipient
    $mail->setFrom($email, $name);
    $mail->addAddress('vistalcarlosfidel@gmail.com');

    // Email content
    $mail->Subject = 'Contact Form Message';
    $mail->Body = $message;

    $mail->send();
    echo "Email Sent Successfully!";

 
?>