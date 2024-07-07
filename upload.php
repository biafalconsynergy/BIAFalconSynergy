<?php
error_reporting(0);

$msg = "";

// If upload button is clicked ...
if (isset($_POST['upload'])) {

    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "./image/" . $filename;

    $db = mysqli_connect("localhost", "root", "", "konnexio");

    if (!$db) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Escape the filename to prevent SQL injection
    $filename = mysqli_real_escape_string($db, $filename);

    // SQL query to insert image details into database
    $sql = "INSERT INTO case_study (userid, title, content, posted_date, image, isactive) VALUES (1, 'cd', 'def', NULL, '$filename', 1)";

    // Execute query
    if (mysqli_query($db, $sql)) {
        echo "<h3> Image uploaded successfully!</h3>";

        // Move uploaded file to specified directory
        if (move_uploaded_file($tempname, $folder)) {
            echo "<p>File moved successfully.</p>";
        } else {
            echo "<p>Failed to move file.</p>";
        }
    } else {
        echo "<h3> Failed to upload image!</h3>";
    }

    mysqli_close($db);
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Image Upload</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
    <div id="content">
        <form method="POST" action="" enctype="multipart/form-data">
            <div class="form-group">
                <input class="form-control" type="file" name="uploadfile" value="" />
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit" name="upload">UPLOAD</button>
            </div>
        </form>
    </div>
    <div id="display-image">
        <?php
        $db = mysqli_connect("localhost", "root", "", "konnexio");

        if (!$db) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $query = "SELECT * FROM case_study";
        $result = mysqli_query($db, $query);

        while ($data = mysqli_fetch_assoc($result)) {
            ?>
            <img src="./image/<?php echo $data['image']; ?>">
        <?php
        }

        mysqli_close($db);
        ?>
    </div>
</body>

</html>
