<?php 
    //starts session if it is not active
    if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
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
        //DB Connection
        include 'connection.php';

        //Variables particular to this page
        $tableTitles = ['User id', 'First Name', 'Last Name', 'Role ID', 'Contact Number','Email', 'Gender', 'Address', 'Status', 'Last Updated Date'];
        $tableColumnNames = ['userid', 'first_name', 'last_name', 'roleid', 'contact_no', 'email','Gender','Address', 'isactive','last_updated_date'];
        $tableName = 'Users';
        $tableDbName = 'user';
        $id = intval($_GET['id']); // Sanitize input
		$mainpage = 'UserManagement.php';	        

		$disabletableColumnNames = ['userid', 'first_name', 'last_name', 'roleid', 'posted_date'];
		
		
        //Page body
        include 'AdminPagesBodyEdit.php';
    ?>

</body>
</html>