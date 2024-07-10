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
        $tableTitles = ['Career id', 'User id', 'Title', 'Content', 'Date Posted', 'Is active'];
        $tableColumnNames = ['careerid', 'userid', 'title', 'content', 'posted_date','isactive'];
        $tableName = 'Carreers';
        $tableDbName = 'careers';
        
        //Creates and assigns the query 
        $query = 'SELECT ' . implode(',', $tableColumnNames) . ' FROM ' . $tableDbName;
        $result = $conn->query($query);

        //Page standard body
        include 'AdminPagesBody.php';
    ?>
</body>
</html>