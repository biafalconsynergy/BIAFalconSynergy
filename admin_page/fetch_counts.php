<?php

//header('Content-Type: application/json');

// Include database connection
include 'connection.php';

// Get the table name from the request
$tableDbName = $_POST['tableDbName'];

// Fetch updated counts
if ($tableDbName === 'user') {
    $activeCountQuery = "SELECT COUNT(*) AS activeCount FROM user WHERE isactive = 1";
    $inactiveCountQuery = "SELECT COUNT(*) AS inactiveCount FROM user WHERE isactive = 0";
    
    $activeCountResult = $conn->query($activeCountQuery);
    $inactiveCountResult = $conn->query($inactiveCountQuery);

    if ($activeCountResult && $inactiveCountResult) {
        $activeCount1 = $activeCountResult->fetch_assoc()['activeCount'];
        $inactiveCount1 = $inactiveCountResult->fetch_assoc()['inactiveCount'];

        echo json_encode([
            'success' => true,
            'activeCount' => $activeCount1,
            'inactiveCount' => $inactiveCount1
        ]);
    } else {
        echo json_encode(['success' => false]);
    }
} else {
    echo json_encode(['success' => false]);
}

$conn->close();
?>
