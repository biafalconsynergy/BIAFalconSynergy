<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
<?php include 'menu.php'; ?>

<!--PHP section user management starts-->|
<?php

//Credentials to stablish the connection
$servername = "localhost";
$username = "konnexio";
$password = "BIA2024$";
$dbname = "capstonetest";

//Connection
$conn = new mysqli($servername, $username, $password, $dbname);

//Connection error handling
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//Creates the query
$query = "SELECT id, name, active FROM casestudies ORDER BY id ASC";
$result = $conn->query($query);

//Creates the table to show the results
echo '<table class="table table-hover">
<thead>
 <tr>
  <th scope="col">id</th>
  <th scope="col">name</th>
  <th scope="col">active</th>
  <th scope="col">Edit</th>
 </tr>
</thead>
<tbody>';

//Shows the result in the table previously created
while ($row = $result->fetch_assoc()) {
    $field1name = $row['id'];
    $field2name = $row['name'];
    $field3name = $row['active'];

echo '<tr>
        <td>'.$field1name.'</td>
        <td>'.$field2name.'</td>
        <td>'.$field3name.'</td>
        <td><a href="#">Edit</a></td>
      </tr>';
}

echo '</tbody>
    </table>';

//deletes the information stored in $result
$result->free();

//Close the connection
$conn->close();
?>
<!--PHP section ends-->

</body>