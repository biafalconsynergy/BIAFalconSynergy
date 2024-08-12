<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Fetch the email from POST request
    $email = $_POST['email'];

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header('Location: forgot_password.php?message=Invalid email address');
        exit();
    }

    include 'connection.php';

    // Check if the email exists and if the account is active
    $stmt = $conn->prepare('SELECT userid, isactive FROM user WHERE email = ?');
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows == 0) {
        // Email not found
        header('Location: forgot_password.php?message=Email not found');
        $stmt->close();
        $conn->close();
        exit();
    }

    $stmt->bind_result($userid, $isactive);
    $stmt->fetch();

    if ($isactive == 0) {
        // Account is deactivated
        header('Location: forgot_password.php?message=Your account has been deactivated! Please contact the Administrator');
        $stmt->close();
        $conn->close();
        exit();
    }

    // Generate a unique token
    $token = bin2hex(random_bytes(32));

    // Store the token and its expiration in the database
    $expiry = date('Y-m-d H:i:s', strtotime('+1 hour')); // Token valid for 1 hour
    $stmt = $conn->prepare('INSERT INTO password_resets (email, token, expires_at) VALUES (?, ?, ?)');
    $stmt->bind_param('sss', $email, $token, $expiry);
    $stmt->execute();

    // Close the statement and connection
    $stmt->close();
    $conn->close();

    // Create a recovery link
    $recoveryLink = "http://localhost/BIAFalconSynergy/admin_page/reset_password.php?token=$token";

    // Send the recovery email using PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'biafalconsynergy2024@gmail.com';               // SMTP username
        $mail->Password   = 'rqde fvsk krib nzlv';                  // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption
        $mail->Port       = 587;                                    // TCP port to connect to

        // Recipients
        $mail->setFrom('biafalconsynergy2024@gmail.com', 'konnexio');
        $mail->addAddress($email);                                  // Add a recipient

        // Content
        $mail->isHTML(true);                                        // Set email format to HTML
        $mail->Subject = 'Password Recovery';
        $mail->Body    = "
        Hi,<br><br>
        Please click the following link to reset your password:<br>
        <a href='$recoveryLink'>$recoveryLink</a><br><br>
        If you did not request a password reset, please ignore this email.<br><br>
        Best regards,<br>
        Your Company
        ";
        $mail->AltBody = "Hi,\n\nPlease click the following link to reset your password:\n$recoveryLink\n\nIf you did not request a password reset, please ignore this email.\n\nBest regards,\nKonnexio";

        $mail->send();
        header('Location: forgot_password.php?message=success');
    } catch (Exception $e) {
        header('Location: forgot_password.php?message=Failed to send email. Mailer Error: ' . $mail->ErrorInfo);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin Forgot_Password | KONNEXIO</title>
	<link rel="icon" href="Logo/konnexio-icon.ico" type="image/x-icon">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #4169E1;
            margin: 0;
            padding: 0;
        }

        form {
            border: 3px solid #f1f1f1;
            border-radius: 6px;
            max-width: 600px;
            margin: 0 auto;
            padding: 16px;
            background-color: #fff;
        }

        input[type=email] {
            width: 100%;
            padding: 12px;
            margin: 8px 0;
            border: 1px solid #ccc;
            box-sizing: border-box;
            border-radius: 6px;
        }

        button {
            background-color: #4169E1;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            border-radius: 6px;
        }

        button:hover {
            opacity: 0.8;
        }

        .container {
            padding: 16px;
            background-color: #FFFFFF;
        }

        .error-message {
            color: red;
            text-align: center;
            margin-bottom: 20px;
        }

        .success-message {
            color: green;
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
    <title>Forgot Password</title>
    <!-- References Top -->
      <?php include 'ReferencesTop.php'; ?>
    <!-- End of References --> 
</head>
<body class="bg-gradient-primary">
<div style="display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0;">
    <form action="forgot_password.php" method="POST">
        <div class="container">
            <img src="konnexio-logo.png" class="img-fluid" alt="Company Logo" width="400" height="auto" style="display: block; margin: auto;">		
            <h2 class="text-center">Forgot Password</h2>
            <?php
            if (isset($_GET['message'])) {
                if ($_GET['message'] === 'success') {
                    echo '<p class="success-message">A password recovery link has been sent to your email.</p>';
                } else {
                    echo '<p class="error-message">' . htmlspecialchars($_GET['message']) . '</p>';
                }
            }
            ?>
            <label for="email"><b>Email Address</b></label>
            <input type="email" placeholder="Enter your email" name="email" required>
            <button class="btn btn-primary" type="submit">Submit</button><br><br>
            <button class="btn btn-secondary" type="button" onclick="window.location.href='LoginPage.php'">Login</button>		
        </div>
    </form>
</div>
</body>
</html>
