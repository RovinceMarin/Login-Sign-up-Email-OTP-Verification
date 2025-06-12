<?php
session_start();
require 'configure/conn.php';

// Check if user is logged in or email exists in session
if (!isset($_SESSION['email'])) {
    echo "<script>alert('Session expired or email not found.'); window.location.href = 'signup.php';</script>";
    exit;
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $role = $_POST['role'] ?? null;
    $email = $_SESSION['email'];

    if (!$role) {
        echo "<script>alert('Please select a role.'); history.back();</script>";
        exit;
    }

    // Update the role in database
    $stmt = $conn->prepare("UPDATE users SET role = ? WHERE email = ?");
    $stmt->bind_param("ss", $role, $email);

    if ($stmt->execute()) {
        // Optionally redirect based on role
        if ($role === 'owner') {
            header("Location: owner/owner_dashboard.php");
        } else {
            header("Location: user/user_dashboard.php");
        }
        exit;
    } else {
        echo "<script>alert('Failed to update role.'); history.back();</script>";
    }

    $stmt->close();
    $conn->close();
} else {
    echo "<script>alert('Invalid request.'); window.location.href = 'signup.php';</script>";
}
?>