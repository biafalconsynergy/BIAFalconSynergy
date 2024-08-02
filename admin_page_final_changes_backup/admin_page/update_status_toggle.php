<?php
// Include database connection
include 'connection.php';

// Start session to access logged-in user's information
session_start();

if (isset($_POST['id']) && isset($_POST['status']) && isset($_POST['tableDbName']) && isset($_POST['tablePrimaryKey'])) {
    $id = $_POST['id'];
    $status = $_POST['status'];
    $tableDbName = $_POST['tableDbName'];
    $tablePrimaryKey = $_POST['tablePrimaryKey'];

    // Get the current logged-in user's ID
    $loggedInUserId = $_SESSION['userid']; 

    // Update the status in the database
    if ($tableDbName === 'support_ticket') {
        $sql = "UPDATE $tableDbName SET isactive = ?, userid = ?, last_updated_date = NOW() WHERE $tablePrimaryKey = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('iii', $status, $loggedInUserId, $id);
    } else {
        $sql = "UPDATE $tableDbName SET isactive = ?, last_updated_date = NOW() WHERE $tablePrimaryKey = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('ii', $status, $id);
    }

    if ($stmt->execute()) {
        echo json_encode(['success' => true, 'newStatus' => $status]);
    } else {
        echo json_encode(['success' => false]);
    }

    $stmt->close();
    $conn->close();
} else {
    echo json_encode(['success' => false, 'error' => 'Invalid request']);
}
?>
