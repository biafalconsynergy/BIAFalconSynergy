<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Table Titles</title>
</head>
<body>
<?php
    

    include 'Connection.php';

    //Creates the query
    $query = "SELECT caseid,userid,title,content,posted_date,image,isactive FROM case_study";
    $result = $conn->query($query);


    $tableTitles = ['Case id', 'User id', 'Title', 'Content', 'Date Posted', 'Image', 'Is active'];
    $tableColumnNames = ['caseid', 'userid', 'title', 'content', 'posted_date', 'image', 'isactive'];

echo '<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>';
                for ($i=0; $i < count($tableTitles); $i++) {
                    echo '<th scope="col">' . $tableTitles[$i] . '</th>';
                }
echo            '</tr>
        </thead>
        <tbody>';

        //Shows the result in the table previously created
                while ($row = $result->fetch_assoc()) {
                  //  echo '<td>'.$row['$tableColumnNames[$i]'].'</td>
                    echo '<tr>';
                    for ($i=0; $i < count($tableColumnNames); $i++){
                        echo '<td>'.$row[$tableColumnNames[$i]].'</td>';
                    }
                    echo' <td><a href="#">Edit</a></td>
                          </tr>';
                }
                echo '</tbody>
                    </table>';

?>
</body>
</html>