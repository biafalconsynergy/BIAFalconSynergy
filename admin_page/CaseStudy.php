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
        include 'Connection.php';

        //Variables particular to this page
        $tableTitles = ['Case id', 'User id', 'Title', 'Content', 'Date Posted', 'Image', 'Is active'];
        $tableColumnNames = ['caseid', 'userid', 'title', 'content', 'posted_date', 'image', 'isactive'];
        $tableName = 'Case Studies';
        $tableDbName = 'case_study';
        
        //Creates and assigns the query 
        $query = 'SELECT ' . implode(',', $tableColumnNames) . ' FROM ' . $tableDbName;
        $result = $conn->query($query);

        //Page standard body
        include 'AdminPagesBody.php';
    ?>
</body>
</html>