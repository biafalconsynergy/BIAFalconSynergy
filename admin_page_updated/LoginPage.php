<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://www.sjhc.london.on.ca/themes/custom/de_theme/favicon.ico" type="image/vnd.microsoft.icon"/>
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
        }

        span.psw {
            float: right;
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
    <title>Admin</title>
</head>
<body>




<?php
$headerText = "Login Here!";
if (isset($_GET['error'])) {
    $headerText = "Enter your Credentials Again!";
    echo '<p class="error-message">' . htmlspecialchars($_GET['error']) . '</p>';
}
?>
<h2 align="center"><?php echo $headerText; ?></h2>

<form id="loginForm" action="Login.php" method="POST">
    <div class="container">
        <label for="username"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="username" required>

        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>

        <button type="submit">Login</button>
		
        <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
        </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
        <button type="button" class="cancelbtn" onclick="clearAndNavigate()">Cancel</button>
        <span class="psw"><a href="forgot_password.php">Forgot password?</a></span>
    </div>
</form>

<script>
    function clearAndNavigate() {
        // Clear the form fields
        document.getElementById('loginForm').reset();
        // Navigate to the homepage
        window.location.href = 'LoginPage.php';
    }
</script>




</body>
</html>
