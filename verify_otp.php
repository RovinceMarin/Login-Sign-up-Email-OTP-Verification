<?php
session_start();
require 'configure/conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $entered_otp = $_POST['otp'];
    $email = $_SESSION['email'];

    // Check if OTP matches
    $stmt = $conn->prepare("SELECT otp FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->bind_result($db_otp);
    $stmt->fetch();
    $stmt->close();

    if ($entered_otp === $db_otp) {
        // Set is_verified = 1
        $update = $conn->prepare("UPDATE users SET is_verified = 1, otp = NULL WHERE email = ?");
        $update->bind_param("s", $email);
        $update->execute();
        $update->close();

        echo "<script>alert('Account verified!'); window.location.href='select_role.php';</script>";
    } else {
        echo "<script>alert('Invalid OTP'); history.back();</script>";
    }
}
?>