<?php
// Start the session only if it hasn't been started already
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prepare the SQL statement to prevent SQL injection
    $stmt = $conn->prepare("SELECT user_credentials.userid, username, first_name, last_name, password, role_name, user_role.roleid 
                            FROM user_credentials 
                            JOIN user ON user_credentials.userid = user.userid 
                            JOIN user_role ON user.roleid = user_role.roleid 
                            WHERE username=? AND isactive=1");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $hashed_password = $row['password'];

        if (password_verify($password, $hashed_password)) {
            // Session variables should be set here, no need to call session_start() again
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;
            $_SESSION['first_name'] = $row['first_name'];
            $_SESSION['last_name'] = $row['last_name'];    
            $_SESSION['roleid'] = $row['roleid'];
            $_SESSION['userid'] = $row['userid'];
            header("Location: Admin.php");
            exit();
        } else {
            // Password is incorrect
            $error = "Invalid username or password.";
            header("Location: LoginPage.php?error=" . urlencode($error));
            exit();
        }
    } else {
        // Username not found
        $error = "Invalid username or password.";
        header("Location: LoginPage.php?error=" . urlencode($error));
        exit();
    }
}

$conn->close();
?>
