<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connection</title>
</head>

<body>
<?php
    //Credentials to stablish the connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "konnexio";

    //Connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    //Connection error handling
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>

</body>
</html>
