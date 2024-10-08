<?php 
    // Prevent caching
    header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
    header("Cache-Control: post-check=0, pre-check=0", false);
    header("Pragma: no-cache");

    //starts session if it is not active
    if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
		
		// Check if user is logged in
	if (!isset($_SESSION['roleid'])  ) {
		// Redirect to a different page or show an error message
		header('Location: no_access.php'); 
		exit();
	}	
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Admin Careers | KONNEXIO</title>
	<link rel="icon" href="Logo/konnexio-icon.ico" type="image/x-icon">

    <!-- References Top -->
    <?php include 'ReferencesTop.php'; ?>
    <!-- End of References -->

</head>

<body id="page-top">

<?php

include 'connection.php';


$tableColumnNames = ['userid','title', 'content'];
$columns = implode(',', $tableColumnNames);
$placeholders = implode(',', array_fill(0, count($tableColumnNames), '?'));


		
		
// Database details
$tableDbName = "careers";
$tableName = 'Job Postings';


    // Prepare SQL insert statement
   // $stmt = $conn->prepare("INSERT INTO $tableDbName ($columns) VALUES ($placeholders)");
   // $stmt->bind_param($SESSION['user_id'], $title, $content, $contentType, $uploadfile);

   
	

    //Page standard body
        include 'AdminPagesBodyCreate.php';
    ?>

    
</body>
</html>

<!-- page1.php -->

