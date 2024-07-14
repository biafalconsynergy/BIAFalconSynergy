<?php
session_start(); // Start the session

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
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <?php if (!isset($_SESSION['reset_email'])): ?>
                            <h2 class="text-center mb-4">Forgot Password</h2>
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="email" id="email" name="email" class="form-control" required value="<?php echo htmlspecialchars($email); ?>">
                                </div>
                                <div class="form-group">
                                    <label for="firstname">First Name:</label>
                                    <input type="text" id="firstname" name="firstname" class="form-control" required value="<?php echo htmlspecialchars($firstname); ?>">
                                </div>
                                <button type="submit" class="btn btn-primary btn-block">Submit</button>
                            </form>
                            <div class="text-center mt-3">
                                <a href="LoginPage.php">Go back to Login</a>
                            </div>
                        <?php else: ?>
                            <h2 class="text-center mb-4">Reset Password</h2>
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="new_password">New Password:</label>
                                    <input type="password" id="new_password" name="new_password" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="confirm_password">Confirm Password:</label>
                                    <input type="password" id="confirm_password" name="confirm_password" class="form-control" required>
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
            </div>
        </div>
    </div>
</body>
</html>
