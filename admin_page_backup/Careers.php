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
    <title>Careers</title>

    <!-- References Top -->
    <?php include 'ReferencesTop.php'; ?>
    <!-- End of References -->

</head>

<body id="page-top">

    <?php
        //DB Connection
        include 'Connection.php';

        //Variables particular to this page
        $tableTitles = ['Career id', 'User id', 'Title', 'Content', 'Date Posted', 'Status'];
        $tableColumnNames = ['careerid', 'userid', 'title', 'content', 'posted_date','isactive'];
        $tableName = 'Carreers';
        $tableDbName = 'careers';
		$createButtonUrl = 'CareersNew.php';		
        
        //Creates and assigns the query 
        $query = 'SELECT ' . implode(',', $tableColumnNames) . ' FROM ' . $tableDbName;
        $result = $conn->query($query);

		// Count active and inactive cases
        $activeQuery = "SELECT COUNT(*) as active_count FROM $tableDbName WHERE isactive = 1";
        $inactiveQuery = "SELECT COUNT(*) as inactive_count FROM $tableDbName WHERE isactive = 0";

        $activeResult = $conn->query($activeQuery);
        $inactiveResult = $conn->query($inactiveQuery);

        $activeCount = $activeResult->fetch_assoc()['active_count'];
        $inactiveCount = $inactiveResult->fetch_assoc()['inactive_count'];		
        //Page standard body
        include 'AdminPagesBody.php';
    ?>
</body>
</html>