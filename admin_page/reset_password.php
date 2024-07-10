<?php
// Validate and process the form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the email address from the form
    $email = $_POST['email'];

    // Validate the email (you can use additional validation here if needed)

    // Send the password reset email
    $to = $email;
    $subject = 'Password Reset Request';
    $message = 'Dear User, 
    Click the following link to reset your password: http://example.com/reset_password.php?email=' . $email;
    $headers = 'From: your-email@example.com' . "\r\n" .
        'Reply-To: your-email@example.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    if (mail($to, $subject, $message, $headers)) {
        echo '<h2>Email sent successfully!</h2>';
    } else {
        echo '<h2>Failed to send email. Please try again later.</h2>';
    }
}
?>
