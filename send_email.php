<?php
// Load PHPMailer classes
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST['submit'])) {
// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Create a new PHPMailer instance
$mail = new PHPMailer(true);

try {
    die(var_dump('tere'));
    // Set up SMTP connection
    $mail->isSMTP();
    $mail->Host = 'smtp.zone.eu';
    $mail->SMTPAuth = true;
    $mail->Username = 'assista@ta21kask.itmajakas.ee';
    $mail->Password = 'Salajane123';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    // Set up email message
    $mail->setFrom($email, $name);
    $mail->addAddress('kaasiku56@gmail.com');
    $mail->Subject = 'Uus teade kliendilt ' . $name;
    $mail->Body = $message;

    // Send the email
    $mail->send();

    exit();
} catch (Exception $e) {
    
    echo 'Message could not be sent. Error: ', $mail->ErrorInfo;
}
}
?>
