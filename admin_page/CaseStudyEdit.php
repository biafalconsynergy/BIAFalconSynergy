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
        $tableTitles = ['Case id', 'User id', 'Title', 'Content', 'Date Posted', 'Image', 'Is active', 'Last Updated Date'];
        $tableColumnNames = ['caseid', 'userid', 'title', 'content', 'posted_date', 'image', 'isactive','last_updated_date'];
        $tableName = 'Case Studies';
        $tableDbName = 'case_study';
        $id = isset($_GET['id']) ? intval($_GET['id']) : 0;
		$mainpage = 'CaseStudy.php';
        

		$disabletableColumnNames = ['caseid', 'userid', 'posted_date'];
		
		
        //Page body
        include 'AdminPagesBodyEdit.php';
    ?>

</body>
</html>