<?php
session_start();
require 'configure/conn.php'; // DB connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT id, username, email, password, role, is_verified FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();

        // ✅ Check if verified
        if ($user['is_verified'] != 1) {
            echo "<script>alert('Please verify your email first.'); window.location.href='index.php';</script>";
            exit;
        }

        // ✅ Verify password
        if (password_verify($password, $user['password'])) {
            // Set session variables
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['role'] = $user['role'];

            // Redirect based on role
            if ($user['role'] == 'owner') {
                header("Location: owner/owner_dashboard.php");
            } else {
                header("Location: user/user_dashboard.php");
            }
            exit;
        } else {
            echo "<script>alert('Incorrect password.'); window.location.href='index.php';</script>";
            exit;
        }
    } else {
        echo "<script>alert('No account found with this email.'); window.location.href='index.php';</script>";
        exit;
    }
} else {
    header("Location: index.php");
    exit;
}
