<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Users</title>

    <!-- References Top -->
    <?php include 'ReferencesTop.php'; ?>
    <!-- End of References -->

</head>

<body id="page-top">



	
    <?php
        //DB Connection
        include 'db_connection.php';

        //Variables particular to this page
        $tableTitles = ['User id', 'First Name', 'Last Name', 'Role ID', 'Contact Number','Email', 'Gender', 'Address'];
        $tableColumnNames = ['userid', 'first_name', 'last_name', 'roleid', 'contact_no', 'email','Gender','Address'];
        $tableName = 'Users';
        $tableDbName = 'user';

        //Creates and assigns the query 
        $query = 'SELECT ' . implode(',', $tableColumnNames) . ' FROM ' . $tableDbName;
        $result = $conn->query($query);

        //Page standard body
        include 'AdminPagesBody.php';
    ?>
</body>
</html>