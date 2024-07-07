<?php

// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Set SMTP settings for testing
ini_set('SMTP', 'smtp.yourprovider.com');
ini_set('smtp_port', 587); // Adjust the port number based on your SMTP provider's requirements
ini_set('sendmail_from', 'your-email@example.com'); // Set the "from" address
require('tcpdf/tcpdf.php'); // Include TCPDF library

// Function to generate PDF
function generatePDF($title, $content) {
    // Initialize TCPDF
    $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
    $pdf->SetCreator(PDF_CREATOR);
    $pdf->SetAuthor('Konnexio');
    $pdf->SetTitle($title);

    $pdf->setPrintHeader(false);
    $pdf->setPrintFooter(false);

    $pdf->AddPage();

    // Example content in PDF
    $html = '
    <h1>' . $title . '</h1>
    <p>' . $content . '</p>
    ';

    $pdf->writeHTML($html, true, false, true, false, '');

    return $pdf;
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and retrieve form data
    $email = isset($_POST['email']) ? filter_var($_POST['email'], FILTER_SANITIZE_EMAIL) : '';
    $title = isset($_POST['title']) ? htmlspecialchars($_POST['title']) : 'Untitled'; // Default to 'Untitled' if not set
    $content = isset($_POST['content']) ? htmlspecialchars($_POST['content']) : '';
    //$image = isset($_POST['image']) ? htmlspecialchars($_POST['image']) : '';

    // Validate required fields
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die('Invalid email address.');
    }
    // You can add additional validation for $title, $content, $image if required.

    // Generate PDF
    //$imagePath = 'image/' . $image; // Adjust path based on your directory structure
    $pdf = generatePDF($title, $content);

    // Get PDF as string
    $file_attachment = $pdf->Output('case_study.pdf', 'S');

    // Set up email headers
    $mailto = $email;
    $from_mail = "info@konnexio.com"; // Update with your email
    $from_name = "Konnexio";
    $replyto = "info@konnexio.com"; // Update with your email
    $subject = "Case Study PDF";

    $semi_rand = md5(time());
    $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";

    $headers = "From: " . $from_name . " <" . $from_mail . ">\r\n";
    $headers .= "Reply-To: " . $replyto . "\r\n";
    $headers .= "Content-type: multipart/mixed; boundary=\"{$mime_boundary}\"";

    // Email body
    $message = "This is a multi-part message in MIME format.\n\n" .
               "--{$mime_boundary}\n" .
               "Content-Type: text/html; charset=\"iso-8859-1\"\n" .
               "Content-Transfer-Encoding: 7bit\n\n" .
               "Here is the case study PDF you requested.\n\n";

    // Attachment
    $message .= "--{$mime_boundary}\n" .
                "Content-Type: application/octet-stream;\n" .
                " name=\"case_study.pdf\"\n" .
                "Content-Disposition: attachment;\n" .
                " filename=\"case_study.pdf\"\n" .
                "Content-Transfer-Encoding: base64\n\n" .
                chunk_split(base64_encode($file_attachment)) . "\n\n" .
                "--{$mime_boundary}--\n";

    // Send email
    $ok = mail($mailto, $subject, $message, $headers);

    if ($ok) {
        echo "Email sent successfully!";
    } else {
        echo "Error sending email. Please try again.";
    }
} else {
    echo "Invalid request method.";
}
?>
