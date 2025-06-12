<?php
session_start();
require 'configure/conn.php';
require 'send_otp.php';

$show_otp_modal = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $confirm_password = $_POST['confirm_password'];

    if ($_POST['password'] !== $confirm_password) {
        echo "<script>alert('Passwords do not match.'); history.back();</script>";
        exit;
    }

    // Generate OTP
    $otp = rand(100000, 999999);
    $_SESSION['otp'] = $otp;
    $_SESSION['email'] = $email;

    // Insert into DB
    $stmt = $conn->prepare("INSERT INTO users (username, email, password, is_verified, otp) VALUES (?, ?, ?, 0, ?)");
    $stmt->bind_param("ssss", $username, $email, $password, $otp);

    if ($stmt->execute()) {
        if (sendOTP($email, $otp)) {
            $show_otp_modal = true; // used to trigger modal display
        } else {
            echo "<script>alert('Failed to send OTP. Try again.');</script>";
        }
    } else {
        echo "<script>alert('Email already registered.');</script>";
    }

    $stmt->close();
    $conn->close();
}
?>