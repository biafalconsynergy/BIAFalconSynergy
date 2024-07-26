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

include 'connection.php';


$tableColumnNames = ['userid','title', 'content'];
$columns = implode(',', $tableColumnNames);
$placeholders = implode(',', array_fill(0, count($tableColumnNames), '?'));


		
		
// Database details
$tableDbName = "user";
$tableName = 'Users';


    // Prepare SQL insert statement
   // $stmt = $conn->prepare("INSERT INTO $tableDbName ($columns) VALUES ($placeholders)");
   // $stmt->bind_param($SESSION['user_id'], $title, $content, $contentType, $uploadfile);

    ?>

<?php
    //Page standard body
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
                                
                                <?php include 'signup.php'?>

                            </div>
                        </div>
                    </form>

                    <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Konnexio 2024</span>
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


    
</body>
</html>

<!-- page1.php -->

