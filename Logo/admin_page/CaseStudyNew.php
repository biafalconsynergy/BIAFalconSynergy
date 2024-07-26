<?php
// Start output buffering as the first thing in the script
ob_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// DB Connection
include 'connection.php';

$tableColumnNames = ['userid', 'title', 'content', 'image'];
$columns = implode(',', $tableColumnNames);
$placeholders = implode(',', array_fill(0, count($tableColumnNames), '?'));

// Database details
$tableDbName = "case_study";
$tableName = 'Case Studies';

// Prepare SQL insert statement
// $stmt = $conn->prepare("INSERT INTO $tableDbName ($columns) VALUES ($placeholders)");
// $stmt->bind_param($SESSION['user_id'], $title, $content, $contentType, $uploadfile);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>CaseStudies</title>

    <!-- References Top -->
    <?php include 'ReferencesTop.php'; ?>
    <!-- End of References -->

</head>

<body id="page-top">
    <?php
        // Page standard body
        include 'AdminPagesBodyCreate.php';
    ?>
</body>
</html>
