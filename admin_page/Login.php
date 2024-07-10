<?php
session_start();
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
	

    $sql = "SELECT username, first_name, password FROM user_credentials JOIN user ON user_credentials.userid = user.userid WHERE username='$username'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
		$row = $result->fetch_assoc();
        $hashed_password = $row['password'];
		
		if (password_verify($password, $hashed_password)) {
			session_start();
			$_SESSION['loggedin'] = true;
			$_SESSION['username'] = $username;
			$_SESSION['first_name'] = $row['first_name'];
            header("Location: Admin.php");
		
    } else {
            // Password is incorrect
            $error = "Invalid username or password.";
            header("Location: LoginPage.php?error=" . urlencode($error));
            exit;
	}
    } else {
        // Username not found
        $error = "Invalid username or password.";
        header("Location: LoginPage.php?error=" . urlencode($error));
        exit;
    }
}

$conn->close();
?>







