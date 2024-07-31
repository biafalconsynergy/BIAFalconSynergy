<?php 
//starts session if it is not active
if (session_status() === PHP_SESSION_NONE) {
         session_start();
}
	
?>
<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
	

    $sql = "SELECT user_credentials.userid, username, first_name, last_name, password , role_name, user_role.roleid FROM user_credentials JOIN user ON user_credentials.userid = user.userid JOIN user_role ON user.roleid = user_role.roleid WHERE username='$username' AND isactive = 1 ";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
		$row = $result->fetch_assoc();
        $hashed_password = $row['password'];
		
		if (password_verify($password, $hashed_password)) {
			session_start();
			$_SESSION['loggedin'] = true;
			$_SESSION['username'] = $username;
			$_SESSION['first_name'] = $row['first_name'];
			$_SESSION['last_name'] = $row['last_name'];	
			$_SESSION['roleid'] = $row['roleid'];
			$_SESSION['userid'] = $row['userid'];
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







