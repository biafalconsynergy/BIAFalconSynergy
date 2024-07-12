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
        $tableTitles = ['News and Events Id', 'User id', 'Title', 'Content', 'Content Type', 'Date Posted','Image', 'Status'];
        $tableColumnNames = ['newsid', 'userid', 'title', 'content', 'content_type', 'posted_date','image','isactive'];
        $tableName = 'News and Events';
        $tableDbName = 'news_events';
		$createButtonUrl = 'NewsEventsNew.php';		

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