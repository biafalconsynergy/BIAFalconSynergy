<?php 
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
        //DB Connection
        include 'connection.php';

        //Variables particular to this page
        $tableTitles = ['Career id', 'userid', 'Title', 'Content',  'Date Posted', 'Status','last_updated_date'];
        $tableColumnNames = ['careerid', 'userid', 'title', 'content',  'posted_date' ,'isactive',  'last_updated_date'];
        $tableName = 'Careers';
        $tableDbName = 'careers';
        $id = intval($_GET['id']); // Sanitize input
		$mainpage = 'Careers.php';		
        
		$disabletableColumnNames = ['careerid', 'userid', 'posted_date'];
		
		
        //Page body
        include 'AdminPagesBodyEdit.php';
    ?>

</body>
</html>