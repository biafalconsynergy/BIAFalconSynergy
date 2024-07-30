<?php 
    //starts session if it is not active
    if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
?>
<?php
// process_signup.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $contactno = $_POST['contactno'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $roleid = $_POST['rolename']; // Assuming 'rolename' corresponds to 'roleid' from user_role table
    $usernamef = $_POST['username'];
    $passwordf = $_POST['password'];

    // Hash the password
    $hashed_password = password_hash($passwordf, PASSWORD_DEFAULT);
	
    // Database connection details
    include 'connection.php';

    try {
        // Create connection
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // Set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Check if email already exists
        $stmt = $conn->prepare("SELECT * FROM user WHERE email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();
		
        // Check if username already exists
        $stmt1 = $conn->prepare("SELECT user_credentials.* FROM user_credentials JOIN user ON user_credentials.userid = user.userid WHERE username = :username");
        $stmt1->bindParam(':username', $usernamef);
        $stmt1->execute();		

        if ($stmt->rowCount() > 0) {
            // Store form data in session
            $_SESSION['form_data'] = $_POST;

            // Email already exists, handle accordingly
            echo "<script>";
            echo "alert('Error: Email already exists. Please use a different email address!');";
            echo "setTimeout(function() {";
            echo "window.location.href = 'signup.php';";
            echo "}, 100);"; // Delay to ensure the alert completes
            echo "</script>";
            exit; // Stop further execution
        } else if  ($stmt1->rowCount() > 0) {
            // Store form data in session
            $_SESSION['form_data'] = $_POST;

            // username already exists, handle accordingly
            echo "<script>";
            echo "alert('Error: username already exists. Please use a different username!');";
            echo "setTimeout(function() {";
            echo "window.location.href = 'signup.php';";
            echo "}, 100);"; // Delay to ensure the alert completes
            echo "</script>";
            exit; // Stop further execution
        }
		else {
            // Insert the data into the 'user' table
            $insertStmt = $conn->prepare("INSERT INTO user (first_name, last_name, contact_no, email, gender, address, roleid)
                                          VALUES (:firstname, :lastname, :contactno, :email, :gender, :address, :roleid)");

            $insertStmt->bindParam(':firstname', $firstname);
            $insertStmt->bindParam(':lastname', $lastname);
            $insertStmt->bindParam(':contactno', $contactno);
            $insertStmt->bindParam(':email', $email);
            $insertStmt->bindParam(':gender', $gender);
            $insertStmt->bindParam(':address', $address);
            $insertStmt->bindParam(':roleid', $roleid);

            $insertStmt->execute();

            // Retrieve the last inserted 'userid'
            $userid = $conn->lastInsertId();

            // Insert data into 'user_credentials' table
            $insertCredentialsStmt = $conn->prepare("INSERT INTO user_credentials (userid, username, password, created_date,expiry_date)
                                                    VALUES (:userid, :username, :password, now(), DATE_ADD(NOW(), INTERVAL 3 DAY))");

            $insertCredentialsStmt->bindParam(':userid', $userid);
            $insertCredentialsStmt->bindParam(':username', $usernamef);
            $insertCredentialsStmt->bindParam(':password', $hashed_password);

            $insertCredentialsStmt->execute();

            // Close connection
            $conn = null;

            // Success message handled via JavaScript
            echo "<script>";
            echo "alert('User registered successfully!');";
            echo "setTimeout(function() {";
            echo "window.location.href = 'LoginPage.php';";
            echo "}, 100);"; // Delay to ensure the alert completes
            echo "</script>";
            exit; // Stop further execution
        }
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    // Close connection
    $conn = null;
}
?>
