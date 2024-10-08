<?php

//starts session if it is not active
if (session_status() === PHP_SESSION_NONE) {
         session_start();
}
		
if (!isset($_SESSION['first_name'])) {
    header('Location: Login.php');
    exit();
}

include 'connection.php'; 

// Define the page name or identifier
$pageName = basename($_SERVER['PHP_SELF']);

// Check if it's the Users page to hide the Create button
$hideImageButton = ($pageName === 'CareersNew.php'); 
$showContentTypeButton = ($pageName === 'NewsEventsNew.php'); 
$showHubSpotForm = ($pageName === 'CaseStudyNew.php'); 
$showEventURL = ($pageName === 'NewsEventsNew.php'); 
$showEventDate = ($pageName === 'NewsEventsNew.php'); 
$showNewsLocationField = ($pageName === 'NewsEventsNew.php'); 

// Get the referer URL
$referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'admin.php';  

// Process form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
	$userid = $_SESSION['userid'];
    $content = $_POST['content'];
	$contentType = isset($_POST['contentType']) ? $_POST['contentType'] : null;
	$URL = $_POST['URL'] ?? null;
	$event_date = $_POST['event_date'] ?? null;
	$uploadfile = isset($_FILES['uploadfile']['name']) ? $_FILES['uploadfile']['name'] : null;
	$form = $_POST['form'] ?? null;
	$location = $_POST['location'] ?? null;
    
    // File upload handling
    if ($uploadfile) {
        $target_dir = "upload/";
        $target_file = $target_dir . basename($_FILES["uploadfile"]["name"]);
        move_uploaded_file($_FILES["uploadfile"]["tmp_name"], $target_file);
    }

    // Prepare SQL insert statement
	if ($hideImageButton && !$showContentTypeButton && !$showHubSpotForm &&  !$showEventURL && !$showNewsLocationField && !$showEventDate) {
		$stmt = $conn->prepare("INSERT INTO $tableDbName ($columns) VALUES (?, ?, ?)");
		$stmt->bind_param("iss", $userid, $title, $content);
	} else if (!$hideImageButton && !$showContentTypeButton && !$showHubSpotForm && !$showEventURL && !$showNewsLocationField && !$showEventDate) {
		$stmt = $conn->prepare("INSERT INTO $tableDbName ($columns) VALUES (?, ?, ?, ?)");
		$stmt->bind_param("isss", $userid, $title, $content, $uploadfile);
	} else if (!$hideImageButton && !$showContentTypeButton && $showHubSpotForm && !$showEventURL && !$showNewsLocationField && !$showEventDate) {
		$stmt = $conn->prepare("INSERT INTO $tableDbName ($columns) VALUES (?, ?, ?, ?, ?)");
		$stmt->bind_param("issss", $userid, $title, $content, $uploadfile, $form);
	} else if (!$hideImageButton && $showContentTypeButton && !$showHubSpotForm && $showEventURL && $showNewsLocationField && $showEventDate) {
		$stmt = $conn->prepare("INSERT INTO $tableDbName ($columns) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("isssssss", $userid, $title, $location, $content, $contentType, $URL, $uploadfile, $event_date);		
	}
    if ($stmt->execute()) {
        echo "<script>
                alert('Record inserted successfully');
                window.location.href = '$pageName';
              </script>";
    } else {
        echo "<script>
                alert('Error inserting record: " . $conn->error . "');
                window.location.href = '$pageName';
              </script>";
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
					<div class="card shadow mb-4">
					<div class="card-body">
                    <!-- Page Content -->
                    <form method="POST" action="" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-lg-8">
                                <!-- Title Input -->
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter title" value="<?php echo isset($row['title']) ? $row['title'] : ''; ?>" required>
                                </div>
                                
                                <!-- Content Type Dropdown -->
                                <?php if ($showContentTypeButton): ?>
                                <div class="form-group">
                                    <label for="contentType">Content Type</label>
                                    <select class="form-control" id="contentType" name="contentType" required>
                                        <option value="News" <?php echo (isset($row['contentType']) && $row['contentType'] == 'News') ? 'selected' : ''; ?>>News</option>
                                        <option value="Events" <?php echo (isset($row['contentType']) && $row['contentType'] == 'Events') ? 'selected' : ''; ?>>Events</option>
                                    </select>
                                </div>
                                <?php endif; ?>
								
                             
                                <!-- Content Input -->
                                <div class="form-group">
                                    <label for="content">Content</label>
                                    <textarea class="form-control" id="content" name="content" rows="4" placeholder="Enter content" required><?php echo isset($row['content']) ? $row['content'] : ''; ?></textarea>
                                </div>
								
								<!-- URL Input -->
								<?php if ($showEventURL): ?>
                                <div class="form-group">
                                    <label for="URL">URL</label>
                                    <textarea class="form-control" id="URL" name="URL" rows="4" placeholder="Enter URL" required><?php echo isset($row['URL']) ? $row['URL'] : ''; ?></textarea>
                                </div>
								<?php endif; ?>
								
								<!-- Event Date Input -->
								<?php if ($showEventDate): ?>
								<div class="form-group">
									<label for="event_date">Event Date</label>
									<input type="date" class="form-control" id="event_date" name="event_date" value="<?php echo isset($row['event_date']) ? $row['event_date'] : ''; ?>" required>
								</div>
								<?php endif; ?>								
								
								<!-- Location Input -->
								<?php if ($showNewsLocationField): ?>
                                <div class="form-group">
                                    <label for="location">Location</label>
                                    <input type="text" class="form-control" id="location" name="location" placeholder="Enter location" value="<?php echo isset($row['location']) ? $row['location'] : ''; ?>" required>
                                </div>
								<?php endif; ?>
								
								<!-- HubSpot Form -->
								<?php if ($showHubSpotForm): ?>
									<div class="form-group">
										<label for="form">HubSpot Form</label>
										<textarea id="form" name="form" class="form-control" rows="5" required ><?php echo isset($row['form']) ? $row['form'] : ''; ?></textarea>
									</div>
								<?php endif; ?>								

                                <!-- Image Input -->
                                <?php if (!$hideImageButton): ?>
                                <div class="form-group">
									<label for="uploadfile">Image</label>
									<input class="form-control" type="file" name="uploadfile" id="uploadfile" onchange="previewImage(event)" required>
									<img id="imagePreview" src="#" alt="Image Preview" style="display: none; margin-top: 10px; max-height: 200px;">
								</div>

                                <?php endif; ?>

                                <button type="submit" class="btn btn-primary">Save</button>
								<a href="<?php echo $referer; ?>" class="btn btn-secondary">Cancel</a>
                            </div>
                        </div>
                    </form>
					
				</div>	

                    <!-- /.container-fluid -->
				</div>
                </div>
				
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



    <?php include 'ReferencesBottom.php'; ?>
    
    <script>
        $(document).ready(function() {
            $('#postedDate').datepicker({
                format: 'yyyy-mm-dd',
                autoclose: true,
                todayHighlight: true
            });
        });
		
		function validateForm() {
            const title = document.getElementById('title').value;
            const content = document.getElementById('content').value;
            const contentType = document.getElementById('contentType');
			const form = document.getElementById('form').value;
			const location = document.getElementById('location').value;	
			const event_date = document.getElementById('event_date').value;	
			const URL = document.getElementById('URL').value;
            const uploadfile = document.getElementById('uploadfile').value;

		if (!title || !content || !event_date || !URL || !form || !location || (contentType && !contentType.value) || (uploadfile && !uploadfile)) {
                alert("All fields are mandatory.");
                return false;
            }
            return true;
        }
		function previewImage(event) {
            const reader = new FileReader();
            reader.onload = function(){
                const output = document.getElementById('imagePreview');
                output.src = reader.result;
                output.style.display = 'block';
            };
            reader.readAsDataURL(event.target.files[0]);
		}
    </script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/sb-admin-2.min.js"></script>

</body>
</html>
