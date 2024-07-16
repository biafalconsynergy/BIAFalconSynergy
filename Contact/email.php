<?php
session_start();

if ($_SERVER['REQUEST_METHOD']=="POST") {
    $name = $_POST["fullname"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    $to = $email;
    $headers = "From: $email";
    if(mail($to, $subject, $message, $headers)) {
        $_SESSION['message'] = "Email Sent";
        //echo "Email Sent";
    }
    else {
        $_SESSION['message'] = "Email Sending Failed";
        //echo "Email Sending Failed";
    }
    header("Location: index.php");
    exit();
}
?>