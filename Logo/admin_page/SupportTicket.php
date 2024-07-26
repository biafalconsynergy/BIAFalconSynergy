<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Admin</title>

    <!-- References Top -->
    <?php include 'ReferencesTop.php'; ?>
    <!-- End of References -->

</head>

<body id="page-top">

    <?php
        //DB Connection
        include 'Connection.php';

        //Variables particular to this page
        $tableTitles = ['Ticket id', 'User id', 'Title', 'Description', 'Sent Date'];
        $tableColumnNames = ['ticketid', 'userid', 'title', 'description', 'sent_date'];
        $tableName = 'Support Tickets';
        $tableDbName = 'Support_Ticket';
        
        //Creates and assigns the query 
        $query = 'SELECT ' . implode(',', $tableColumnNames) . ' FROM ' . $tableDbName;
        $result = $conn->query($query);

        //Page standard body
        include 'AdminPagesBody.php';
    ?>
</body>
</html>