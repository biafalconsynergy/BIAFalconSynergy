<?php
// Initialize token variable
$token = '';

if (isset($_GET['token'])) {
    $token = htmlspecialchars($_GET['token']);
}

// Handle POST request
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Fetch the token and new password from POST request
    $token = $_POST['token'];
    $newPassword = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];

    // Validate the token and password
    if (empty($token) || empty($newPassword) || empty($confirmPassword)) {
        header('Location: reset_password.php?token=' . urlencode($token) . '&message=Invalid request');
        exit();
    }

    // Check if the passwords match
    if ($newPassword !== $confirmPassword) {
        header('Location: reset_password.php?token=' . urlencode($token) . '&message=Passwords do not match');
        exit();
    }

    include 'connection.php';

    // Verify the token
    $stmt = $conn->prepare('SELECT email FROM password_resets WHERE token = ? AND expires_at > NOW()');
    $stmt->bind_param('s', $token);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows == 0) {
        // Token invalid or expired
        header('Location: reset_password.php?token=' . urlencode($token) . '&message=Invalid or expired token');
        $stmt->close();
        $conn->close();
        exit();
    }

    // Fetch the email associated with the token
    $stmt->bind_result($email);
    $stmt->fetch();
    $stmt->close();

    // Hash the new password
    $hashedPassword = password_hash($newPassword, PASSWORD_BCRYPT);

    // Update the password in the database
    $stmt = $conn->prepare('UPDATE user_credentials JOIN user ON user_credentials.userid = user.userid SET password = ? WHERE email = ?');
    $stmt->bind_param('ss', $hashedPassword, $email);
    $stmt->execute();

    // Delete the token from the database (optional, as it's used once)
    $stmt = $conn->prepare('DELETE FROM password_resets WHERE token = ?');
    $stmt->bind_param('s', $token);
    $stmt->execute();

    // Close the statement and connection
    $stmt->close();
    $conn->close();

    // Redirect with success message and stop script execution
    header('Location: reset_password.php?message=success');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

        input[type=password] {
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
        
        .login-button {
            background-color: #04AA6D;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 93%;
            border-radius: 6px;
            text-decoration: none;
            text-align: center;
            display: block;
        }

        .login-button:hover {
            opacity: 0.8;
        }
    </style>
    <title>Reset Password</title>
    <!-- References Top -->
    <?php include 'ReferencesTop.php'; ?>
    <!-- End of References --> 
    <script>
        function validateForm() {
            var password = document.forms["resetForm"]["password"].value;
            var confirmPassword = document.forms["resetForm"]["confirm_password"].value;

            if (password !== confirmPassword) {
                alert("Passwords do not match.");
                return false;
            }
            return true;
        }
    </script>
</head>
<body class="bg-gradient-primary">
<div style="display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0;">
    <form name="resetForm" action="reset_password.php" method="POST" onsubmit="return validateForm()">
        <div class="container">
            <img src="konnexio-logo.png" class="img-fluid" alt="Company Logo" width="400" height="auto" style="display: block; margin: auto;">
            <h2 class="text-center">Reset Password</h2>
            <?php
            if (isset($_GET['message'])) {
                if ($_GET['message'] === 'success') {
                    echo '<p class="success-message">Your password has been reset successfully. You can now log in with your new password.</p>';
                } else {
                    echo '<p class="error-message">' . htmlspecialchars($_GET['message']) . '</p>';
                }
            }
            ?>
            <input type="hidden" name="token" value="<?php echo $token; ?>">
            <label for="password"><b>New Password</b></label>
            <input type="password" placeholder="Enter new password" name="password" required>
            <label for="confirm_password"><b>Confirm Password</b></label>
            <input type="password" placeholder="Confirm new password" name="confirm_password" required><br><br>
            <button class="btn btn-primary" type="submit">Reset Password</button><br><br>
            <?php
            if (isset($_GET['message']) && $_GET['message'] === 'success') {
                echo '<button class="btn btn-secondary" type="button" href="loginPage.php">Login</button>';
            }
            ?>
        </div>
    </form>
</div>
</body>
</html>
