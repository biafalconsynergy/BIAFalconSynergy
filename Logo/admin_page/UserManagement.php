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

// Variables particular to this page
$tableTitles = ['User id', 'First Name', 'Last Name', 'Role ID', 'Contact Number', 'Email', 'Gender', 'Address', 'Status'];
$tableColumnNames = ['userid', 'first_name', 'last_name', 'roleid', 'contact_no', 'email', 'Gender', 'Address', 'isactive'];
$tableName = 'Users';
$tableDbName = 'user';

// Creates and assigns the query 
$query = 'SELECT ' . implode(',', $tableColumnNames) . ' FROM ' . $tableDbName;
$result = $conn->query($query);

// Count active and inactive cases
$activeQuery = "SELECT COUNT(*) as active_count FROM $tableDbName WHERE isactive = 1";
$inactiveQuery = "SELECT COUNT(*) as inactive_count FROM $tableDbName WHERE isactive = 0";

$activeResult = $conn->query($activeQuery);
$inactiveResult = $conn->query($inactiveQuery);

$activeCount = $activeResult->fetch_assoc()['active_count'];
$inactiveCount = $inactiveResult->fetch_assoc()['inactive_count'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Users</title>

    <!-- References Top -->
    <?php include 'ReferencesTop.php'; ?>
    <!-- End of References -->

</head>

<body id="page-top">
    <?php
        // Page standard body
        include 'AdminPagesBody.php';
    ?>
</body>
</html>
