<?php
session_start();
if (!isset($_SESSION['first_name'])) {
    header('Location: Login.php');
    exit();
}

include 'connection.php'; // Include your database connection file

// Define the page name or identifier
$pageName = basename($_SERVER['PHP_SELF']);

// Check if it's the Users page to hide the Create button
$hideImageButton = ($pageName === 'CareersNew.php'); 
$showContentTypeButton = ($pageName === 'NewsEventsNew.php'); 

// Process form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
	$userid = $_SESSION['userid'];
    $content = $_POST['content'];
	$contentType = isset($_POST['contentType']) ? $_POST['contentType'] : null;
	$uploadfile = isset($_FILES['uploadfile']['name']) ? $_FILES['uploadfile']['name'] : null;

    
    // File upload handling
    if ($uploadfile) {
        $target_dir = "upload/";
        $target_file = $target_dir . basename($_FILES["uploadfile"]["name"]);
        move_uploaded_file($_FILES["uploadfile"]["tmp_name"], $target_file);
    }

    // Prepare SQL insert statement
	if ($hideImageButton && !$showContentTypeButton) {
		$stmt = $conn->prepare("INSERT INTO $tableDbName ($columns) VALUES (?, ?, ?)");
		$stmt->bind_param("iss", $userid, $title, $content);
	} else if (!$hideImageButton && !$showContentTypeButton) {
		$stmt = $conn->prepare("INSERT INTO $tableDbName ($columns) VALUES (?, ?, ?, ?)");
		$stmt->bind_param("isss", $userid, $title, $content, $uploadfile);
	} else if (!$hideImageButton && $showContentTypeButton) {
		$stmt = $conn->prepare("INSERT INTO $tableDbName ($columns) VALUES (?, ?, ?, ?, ?)");
		$stmt->bind_param("issss", $userid, $title, $content, $contentType, $uploadfile);		
	}
    if ($stmt->execute()) {
        echo "Record inserted successfully";
    } else {
        echo "Error inserting record: " . $conn->error;
    }
    
    $stmt->close();
    $conn->close();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $tableName; ?></title>
	
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
</head>
<body>



    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include 'Sidebar.php'; ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

            <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <div class="container-fluid">   
                        <!-- Sidebar Toggle (Topbar) -->
                        <form class="form-inline">
                            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                                <i class="fa fa-bars"></i>
                            </button>
                        </form>
                        <!-- Sidebar Toggle (Topbar) End -->
                        <h3 class="m-0 font-weight-bold text-dark"><?php echo $tableName; ?></h3>
                        <div class="top-right justify-content-right">
                            <span>Logged in as: <?php echo $_SESSION['first_name']; ?></span>
                        </div>
                    </div>
                </nav>
            <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Content -->
                    <form method="POST" action="" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-lg-8">
                                <!-- Title Input -->
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter title" value="<?php echo isset($row['title']) ? $row['title'] : ''; ?>">
                                </div>
                                
                                <!-- Content Type Dropdown -->
                                <?php if ($showContentTypeButton): ?>
                                <div class="form-group">
                                    <label for="contentType">Content Type</label>
                                    <select class="form-control" id="contentType" name="contentType">
                                        <option value="News" <?php echo (isset($row['contentType']) && $row['contentType'] == 'News') ? 'selected' : ''; ?>>News</option>
                                        <option value="Events" <?php echo (isset($row['contentType']) && $row['contentType'] == 'Events') ? 'selected' : ''; ?>>Events</option>
                                    </select>
                                </div>
                                <?php endif; ?>
                                
                                <!-- Content Input -->
                                <div class="form-group">
                                    <label for="content">Content</label>
                                    <textarea class="form-control" id="content" name="content" rows="4" placeholder="Enter content"><?php echo isset($row['content']) ? $row['content'] : ''; ?></textarea>
                                </div>

                                <!-- Image Input -->
                                <?php if (!$hideImageButton): ?>
                                <div class="form-group">
                                    <label for="uploadfile">Image</label>
                                    <input class="form-control" type="file" name="uploadfile" id="uploadfile">
                                </div>
                                <?php endif; ?>

                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </form>

                    <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Konnexio 2024</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

    </div>

    <?php include 'ReferencesBottom.php'; ?>
    
    <script>
        $(document).ready(function() {
            $('#postedDate').datepicker({
                format: 'yyyy-mm-dd',
                autoclose: true,
                todayHighlight: true
            });
        });
    </script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/sb-admin-2.min.js"></script>

</body>
</html>
