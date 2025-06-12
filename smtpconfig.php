<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';  // Composer autoload

function sendOTP($email, $otp)
{
    $mail = new PHPMailer(true);

    try {
        // SMTP Configuration
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'flexideskthesis@gmail.com';
        $mail->Password = // App password (not your Gmail password)
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        // Sender & Receiver
        $mail->setFrom('flexideskthesis@gmail.com', 'FlexiDesk');
        $mail->addAddress($email);

        // Email Body
        $mail->isHTML(true);
        $mail->Subject = 'Your OTP Code';
        $mail->Body = "Your OTP code is <strong>$otp</strong>";

        $mail->send();
        return true;
    } catch (Exception $e) {
        return false;
    }
}
?>
