<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'admin_page/vendor/autoload.php';

if ($_SERVER['REQUEST_METHOD']=="POST") {
    $firstName = $_POST["firstNameSupport"];
    $lastName = $_POST["lastNameSupport"];
    $email = $_POST["emailSupport"];
    $subject = $_POST["subjectSupport"];
    $project = $_POST["projectNumberSupport"];
    $machine = $_POST["machineNumberSupport"];
    $company = $_POST["companyNameSupport"];
    $message = $_POST["messageSupport"];

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script type='text/javascript'>
            alert('Invalid email address');
            window.location.href = 'contact.php#formSupport'; // Redirect to the formSupport tab in contact.php
          </script>";
        exit();
    }

    include 'db_connection.php';

    // Check if the email exists and if the account is active
    $stmt = $conn->prepare('SELECT userid, isactive FROM user WHERE email = ?');
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows == 0) {
        // Email not found
        echo "<script type='text/javascript'>
            alert('Check Email ID. User not found.');
            window.location.href = 'contact.php#formSupport'; // Redirect to the formSupport tab in contact.php
          </script>";
        $stmt->close();
        $conn->close();
        exit();
    }

    $stmt->bind_result($userid, $isactive);
    $stmt->fetch();

    // Store the support ticket data in the database
    $sent_date = date('Y-m-d H:i:s');
    $stmt = $conn->prepare('INSERT INTO support_ticket (userid, title, description, sent_date, isactive) VALUES (?, ?, ?, ?, ?)');
    $stmt->bind_param('sssss', $userid, $subject, $message, $sent_date, $isactive);
    $stmt->execute();

    // Close the statement and connection
    $stmt->close();
    $conn->close();

    // Send the recovery email using PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'biafalconsynergy2024@gmail.com';               // SMTP username
        $mail->Password   = 'rqde fvsk krib nzlv';                  // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption
        $mail->Port       = 587;                                    // TCP port to connect to

        // Recipients
        $mail->setFrom('biafalconsynergy2024@gmail.com', 'Konnexio');
        $mail->addAddress($email);                                  // Add a recipient

        // Content
        $mail->isHTML(true);                                        // Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body    = "
        Hi $firstName,<br><br>
        We have received your message:<br>
        $message<br><br>
        We will get back to you shortly.<br><br>
        Best regards,<br>
        Team Konnexio
        ";
        $mail->AltBody = "Hi $firstName,\n\nWe have received your message:\n$message\n\nWe will get back to you shortly.\n\nBest regards,\nTeam Konnexio";

        $mail->send();
        echo "<script type='text/javascript'>
            alert('Email Sent Successfully');
            window.location.href = 'contact.php#formSupport'; // Redirect to the formSupport tab in contact.php
          </script>";
    } catch (Exception $e) {
        echo "<script type='text/javascript'>
            alert('Failed to send email. Mailer Error: ' . $mail->ErrorInfo);
            window.location.href = 'contact.php#formSupport'; // Redirect to the formSupport tab in contact.php
          </script>";
    }
}
?>