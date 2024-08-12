<<<<<<< Updated upstream
<?php session_start(); // Start the session ?>
=======
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
        $mail->AltBody = "Hi,\n\nPlease click the following link to reset your password:\n$recoveryLink\n\nIf you did not request a password reset, please ignore this email.\n\nBest regards,\nYour Company";

        $mail->send();
        header('Location: forgot_password.php?message=success');
    } catch (Exception $e) {
        header('Location: forgot_password.php?message=Failed to send email. Mailer Error: ' . $mail->ErrorInfo);
    }
}
?>

>>>>>>> Stashed changes
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap-theme.min.css">
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!--<link rel="icon" href="#" type="image/vnd.microsoft.icon"/>-->
    <!-- References Top -->
        <?php include 'ReferencesTop.php'; ?>
    <!-- End of References --> 
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
        
        .error-message {
            color: red;
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            border: 3px solid #f1f1f1;
            border-radius: 6px;
            max-width: 600px; /* Set a maximum width for better readability */
            margin: 0 auto;   /* Center the form horizontally */
        }

        input[type=text], input[type=password] {
            width: 100%; /* Use full width for text input fields */
            padding: 12px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
            border-radius: 6px;
        }

        button {
            background-color: #04AA6D;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            opacity: 0.8;
        }

        .cancelbtn {
            width: auto;
            padding: 10px 18px;
            background-color: #f44336;
        }

        .container {
            padding: 16px;
            background-color: #FFFFFF;
        }

        span.psw {
            float: middle;
            padding-top: 16px; /* Adjust padding for better alignment */
        }

        .footerimage img{width: 100%}

        /* Change styles for span and cancel button on extra small screens */
        @media screen and (max-width: 600px) {
            span.psw, .cancelbtn {
                width: 100%;
                float: none;
                text-align: center; /* Center align the text on small screens */
            }
        }
    </style>
<<<<<<< Updated upstream
</head>
<body class="bg-gradient-primary">
    <?php

    include 'db_connection.php'; 

    // Initialize variables
    $email = '';
    $firstname = '';
    $message = '';

    // Handle form submission
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['email']) && isset($_POST['firstname'])) {
            // Sanitize input
            $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
            $firstname = htmlspecialchars($_POST['firstname']);

            // Validate input against the database
            $query = "SELECT userid FROM user WHERE email = ? AND first_name = ?";
            $stmt = $conn->prepare($query);
            $stmt->bind_param("ss", $email, $firstname);
            $stmt->execute();
            $stmt->store_result();

            if ($stmt->num_rows > 0) {
                // User exists, show reset password form
                $_SESSION['reset_email'] = $email;
                $_SESSION['reset_firstname'] = $firstname;
                $stmt->close();
            } else {
                $message = "Invalid email or first name.";
                $stmt->close();
            }
        } elseif (isset($_POST['new_password']) && isset($_POST['confirm_password'])) {
            // Reset password
            if ($_POST['new_password'] == $_POST['confirm_password']) {
                // Hash the new password
                $hashed_password = password_hash($_POST['new_password'], PASSWORD_BCRYPT);

                // Update the password in the database
                $query = "UPDATE user_credentials JOIN user ON user_credentials.userid = user.userid SET password = ? , last_updated_date = now() WHERE email = ? AND first_name = ?";
                $stmt = $conn->prepare($query);
                $stmt->bind_param("sss", $hashed_password, $_SESSION['reset_email'], $_SESSION['reset_firstname']);
                if ($stmt->execute()) {
                    $message = "Password has been reset successfully.";
                    unset($_SESSION['reset_email']); // Unset/reset session variables
                    unset($_SESSION['reset_firstname']);
                } else {
                    $message = "Error resetting password.";
                }

                $stmt->close();
            } else {
                $message = "Passwords do not match.";
            }
        }
    }

    $conn->close();
    ?>
    <div style="display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0;">
        <div class="col-md-5">
            <div class="card">
                <div class="card-body">
                    <img src="konnexio-logo.png" class="img-fluid" alt="Company Logo" width="400" height="auto" style="display: block; margin: auto;">
                    <?php if (!isset($_SESSION['reset_email'])): ?>
                    <h2 class="text-center">Password Recovery Form</h2>
                    <form action="" method="post" style="border: none;">
                        <div class="form-group">
                            <label for="email"><b>Email</b></label>
                            <input type="email" placeholder="Enter Email" id="email" name="email" class="form-control" required value="<?php echo htmlspecialchars($email); ?>">
                        </div>
                        <div class="form-group">
                            <label for="firstname"><b>First Name</b></label>
                            <input type="text" placeholder="Enter First Name" id="firstname" name="firstname" class="form-control" required value="<?php echo htmlspecialchars($firstname); ?>">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                    </form>
                    <div class="text-center mt-3">
                        <a href="LoginPage.php">Go back to Login</a>
                    </div>

                    <?php else: ?>
                    <h2 class="text-center">Reset Password</h2>
                    <form action="" method="post" style="border: none;">
                        <div class="form-group">
                            <label for="new_password"><b>New Password</b></label>
                            <input type="password" placeholder="Enter New Password" id="new_password" name="new_password" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="confirm_password"><b>Confirm Password</b></label>
                            <input type="password" placeholder="Confirm New Password" id="confirm_password" name="confirm_password" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Reset Password</button>
                    </form>
                    <div class="text-center mt-3">
                        <a href="LoginPage.php">Go back to Login</a>
                    </div>
                    <?php endif; ?>
                    <?php if ($message): ?>
                    <p class="text-center mt-3"><?php echo $message; ?></p>
                    <?php endif; ?>
                </div>
            </div>
=======
    <title>Forgot Password</title>
</head>
<body>
<div style="display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0;">
    <form action="forgot_password.php" method="POST">
        <div class="container">
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
            <button type="submit">Submit</button>
>>>>>>> Stashed changes
        </div>
    </div>
</body>


