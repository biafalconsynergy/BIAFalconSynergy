<?php 
    //starts session if it is not active
    if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
		
		// Check if user is logged in
	if (!isset($_SESSION['roleid']) || $_SESSION['roleid'] != 1 ) {
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
    <title>Admin Users | KONNEXIO</title>
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
        $tableTitles = ['User id', 'First Name', 'Last Name', 'Username', 'Role', 'Contact Number','Email', 'Gender', 'Address', 'Status', 'Last Updated Date'];
        $tableColumnNames = ['cs.userid', 'first_name', 'last_name', 'username', 'r.role_name', 'contact_no', 'email','Gender','Address', 'isactive','cs.last_updated_date'];
        $tableName = 'Users';
        $tableDbName = 'user';
        $id = intval($_GET['id']); // Sanitize input
		$mainpage = 'UserManagement.php';	        

		$disabletableColumnNames = ['userid', 'first_name', 'last_name', 'posted_date', 'username'];

		
        //Page body
        include 'AdminPagesBodyEdit.php';
    ?>

</body>
</html>