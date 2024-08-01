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
        $tableTitles = ['News and Events Id',  'userid', 'Title', 'Location', 'Content', 'Content Type', 'Date Posted','Image', 'Status','last_updated_date'];
        $tableColumnNames = ['newsid', 'userid', 'title', 'location', 'content', 'content_type', 'posted_date','image','isactive' , 'last_updated_date'];
        $tableName = 'News and Events';
        $tableDbName = 'news_events';
        $id = intval($_GET['id']); // Sanitize input
		$mainpage = 'NewsEvents.php';
        
		$disabletableColumnNames = ['newsid', 'userid', 'posted_date'];
		
		
        //Page body
        include 'AdminPagesBodyEdit.php';
    ?>

</body>
</html>