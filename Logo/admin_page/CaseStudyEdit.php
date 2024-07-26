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
include 'Connection.php';

// Variables particular to this page
$tableTitles = ['Case id', 'User id', 'Title', 'Content', 'Date Posted', 'Image', 'Is active'];
$tableColumnNames = ['caseid', 'userid', 'title', 'content', 'posted_date', 'image', 'isactive'];
$tableName = 'Case Studies';
$tableDbName = 'case_study';
$id = '6';
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
        // Page body
        include 'AdminPagesBodyEdit.php';
    ?>
</body>
</html>
