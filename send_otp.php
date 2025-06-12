<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

session_start();
require 'vendor/autoload.php';

// Get email from request (or session)
$email = $_POST['email'] ?? $_SESSION['email'] ?? null;

// Early exit if no email
if (!$email) {
    echo "<div class='alert alert-danger text-center mt-5'>Email not provided.</div>";
    exit;
}

// Generate OTP
$otp = rand(100000, 999999);
$_SESSION['email'] = $email;
$_SESSION['otp'] = $otp;

// Try sending the email
$mail = new PHPMailer(true);
$successMessage = '';
$errorMessage = '';

try {
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'flexideskthesis@gmail.com';
    $mail->Password =  // App password
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    $mail->setFrom('your-email@gmail.com', 'FlexiDesk');
    $mail->addAddress($email);
    $mail->isHTML(true);
    $mail->Subject = 'Your FlexiDesk OTP Code';
    $mail->Body = "<p>Your One-Time Password (OTP) is: <strong>$otp</strong></p>";

    $mail->send();
    $successMessage = "OTP has been sent to <strong>$email</strong>.";
} catch (Exception $e) {
    $errorMessage = "Failed to send OTP: {$mail->ErrorInfo}";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>OTP Verification | FlexiDesk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #f7f9fc;
        }

        .otp-card {
            max-width: 420px;
            margin: auto;
            margin-top: 8%;
            padding: 30px;
            border-radius: 16px;
            background: white;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
        }

        .otp-card h4 {
            font-weight: bold;
        }
    </style>
</head>

<body>

    <div class="otp-card">
        <h4 class="text-center mb-3">Verify Your Email</h4>

        <?php if ($successMessage): ?>
            <div class="alert alert-success text-center">
                <?= $successMessage ?>
            </div>
        <?php elseif ($errorMessage): ?>
            <div class="alert alert-danger text-center">
                <?= $errorMessage ?>
            </div>
        <?php endif; ?>

        <form action="verify_otp.php" method="POST">
            <div class="mb-3">
                <label for="otp" class="form-label">Enter the 6-digit OTP sent to your email</label>
                <input type="text" class="form-control" name="otp" id="otp" required placeholder="123456" maxlength="6">
            </div>
            <div class="d-grid mt-4">
                <button type="submit" class="btn btn-dark">Verify OTP</button>
            </div>
        </form>
    </div>

</body>

</html>
