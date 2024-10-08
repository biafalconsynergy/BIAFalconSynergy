<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin LogIn | KONNEXIO</title>
	<link rel="icon" href="Logo/konnexio-icon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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
            max-width: 600px;
            margin: 0 auto;
        }

        input[type=text], input[type=password] {
            width: 100%;
            padding: 12px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
            border-radius: 6px;
            font-size: 16px; 
        }

        .password-container {
            position: relative;
            width: 100%;
            margin: 8px 0;
        }

        .password-container input {
            width: 100%; 
            padding-right: 40px; 
            box-sizing: border-box; 
        }

        .password-container .toggle-password {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            font-size: 20px;
            color: #ccc; /* Change color as needed */
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

        .footerimage img {
            width: 100%;
        }

        @media screen and (max-width: 600px) {
            span.psw, .cancelbtn {
                width: 100%;
                float: none;
                text-align: center;
            }
        }
    </style>
    <title>Admin</title>
    <!-- References Top -->
    <?php include 'ReferencesTop.php'; ?>
    <!-- End of References --> 
</head>
<body class="bg-gradient-primary">
<?php
$headerText = "Website Content Management Login";
?>
<div style="display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0;">
    <form id="loginForm" action="Login.php" method="POST">
        <div class="container">
            <img src="konnexio-logo.png" class="img-fluid" alt="Company Logo" width="400" height="auto" style="display: block; margin: auto;">
            <h2 class="text-center"><?php echo $headerText; ?></h2>
            <label for="username"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username" required>

            <label for="password"><b>Password</b></label>
            <div class="password-container">
                <input type="password" placeholder="Enter Password" name="password" id="password" required>
                <i class="fas fa-eye toggle-password" onclick="togglePasswordVisibility()"></i>
            </div>

            <?php
                if (isset($_GET['error'])) {
                $headerText = "Enter your Credentials Again!";
                echo '<p class="error-message">' . htmlspecialchars($_GET['error']) . '</p>';
                }
            ?>
            <label><input type="checkbox" checked="checked" name="remember"> Remember me</label><br><br>
            <button class="btn btn-primary" type="submit">Login</button><br><br>
            <button type="button" class="btn btn-secondary" onclick="clearAndNavigate()">Cancel</button><br><br>
            <div class="text-center">
                <a href="forgot_password.php">Forgot password?</a>
            </div>
        </div>
    </form>
</div>

<script>
    function togglePasswordVisibility() {
        var passwordField = document.getElementById('password');
        var icon = document.querySelector('.toggle-password');
        if (passwordField.type === 'password') {
            passwordField.type = 'text';
            icon.classList.remove('fa-eye');
            icon.classList.add('fa-eye-slash');
        } else {
            passwordField.type = 'password';
            icon.classList.remove('fa-eye-slash');
            icon.classList.add('fa-eye');
        }
    }

    function clearAndNavigate() {
        // Clear the form fields
        document.getElementById('loginForm').reset();
        // Navigate to the homepage
        window.location.href = 'LoginPage.php';
    }
</script>

</body>
</html>
