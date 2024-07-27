<?php
// Include your database connection file
include 'connection.php';

// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the user ID and the new isactive value from the POST data
    $userId = $_POST['caseid'];
    $isActive = $_POST['isactive'];

    // Prepare an SQL statement to update the isactive column
    $sql = "UPDATE case_study SET isactive = ? WHERE caseid = ?";
    $stmt = $conn->prepare($sql);

    // Check if the statement was prepared successfully
    if ($stmt) {
        // Bind the parameters to the SQL query
        $stmt->bind_param('ii', $isActive, $userId);

        // Execute the statement
        if ($stmt->execute()) {
            // If the execution was successful, send a success response
            echo 'Success';
        } else {
            // If there was an error during execution, send an error response
            echo 'Error: ' . $stmt->error;
        }

        // Close the statement
        $stmt->close();
    } else {
        // If there was an error preparing the statement, send an error response
        echo 'Error: ' . $conn->error;
    }

    // Close the database connection
    $conn->close();
} else {
    // If the request method is not POST, send an error response
    echo 'Invalid request method';
}
?>
