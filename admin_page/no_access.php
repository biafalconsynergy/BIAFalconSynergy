<?php 
    // Start session if it is not active
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Access Denied | KONNEXIO</title>
	<link rel="icon" href="Logo/konnexio-icon.ico" type="image/x-icon">

    <!-- References Top -->
    <?php include 'ReferencesTop.php'; ?>
    <!-- End of References -->

    <!-- Add some basic styling for the error message -->
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
            text-align: center;
            margin-top: 50px;
        }
        .error-message h1 {
            font-size: 2em;
            color: #ff0000;
        }
        .error-message p {
            font-size: 1.2em;
        }
    </style>
</head>
<body>
<div style="display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0;">
    <form action="LoginPage.php" method="get">
        <div class="error-message">
            <h1>Access Denied</h1>
            <p>You do not have permission to access this. Please Login to the Admin Panel !</p>
            <button class="btn btn-primary" type="submit">Login Here</button>
        </div>
    </form>
</div>	
</body>
</html>