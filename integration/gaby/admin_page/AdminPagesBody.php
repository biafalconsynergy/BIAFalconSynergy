<?php
session_start();
if (!isset($_SESSION['first_name'])) {
    header('Location: Login.php');
    exit();
}

// Define the page name or identifier
$pageName = basename($_SERVER['PHP_SELF']);

// Check if it's the Users page to hide the Create button
$hideCreateButton = ($pageName === 'UserManagement.php'); // Adjust the page name as per your actual page filename

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
    
    <style>
        .card {
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            transition: 0.3s;
            border: none;
            border-radius: 25px; /* Increased border radius */
        }
        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        }
        .card-body {
            padding: 15px;
            text-align: center;
        }
        .card-title {
            font-size: 1.5em;
            font-weight: bold;
        }
        .card-text {
            font-size: 1.2em;
        }
        .img-thumbnail {
            width: 50px; 
            height: 50px; 
            object-fit: cover; /* Ensure the image covers the box */
        }
        .left-align {
            text-align: left;
        }
		
		/* Style for table header (th) */
        table.dataTable thead th {
            font-weight: bold;
            color: white;
			text-align: left;
        }
        .dataTables_length {
            text-align: left !important;
            margin-left: 20px; /* Adjust this value to move it to the right */
        }
        .dataTables_filter {
            text-align: right !important;
            margin-right: 20px; /* Adjust this value to move it to the left */
        }
        .no-margin {
            margin: 0 !important;
            padding: 0 !important;
        }
        .table-card {
            display: flex;
            justify-content: center;
        }
        /* Adjust DataTables styling */
        .dataTables_wrapper .dataTables_length,
        .dataTables_wrapper .dataTables_filter {
            margin-top: 10px; /* Adjust as needed */
            margin-right: 20px; /* Adjust margin as needed */
            margin-top: 10px; /* Adjust top margin if necessary */         
        }
		.table-title {
			/* Remove background-color property */
			/* background-color: #4e73df; */
			color: #333; /* Set text color */
			padding: 10px;
			margin-bottom: 20px;
		}
		.top-right {
			display: flex;
			justify-content: flex-end; /* Align items to the right */
			align-items: center; /* Center items vertically */
			gap: 10px; /* Add space between the button and the text */
		}

        .top-right .btn-create {
            background-color: #4169E1; 
            color: #fff;
        }
		/* Rounded corners for table cells */
		table.dataTable tbody td {
			border-radius: 0px; /* Adjust the radius as needed */
		}
				.styled-table {
			border-collapse: collapse;
			margin: 25px 0;
			font-size: 0.9em;
			font-family: sans-serif;
			min-width: 400px;
			box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
		}
		.styled-table thead tr {
			background-color: #4169E1;
			color: #ffffff;
			text-align: left;
		}

    </style>
    
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
                        <?php if (!$hideCreateButton): ?>
                            <a href="<?php echo $createButtonUrl; ?>" class="btn btn-primary btn-create">Create</a>
                        <?php endif; ?>
                        <span>Logged in as: <?php echo $_SESSION['first_name']; ?></span>
                    </div>
            </div>
            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">
                <!-- DataTables -->
				<div class="card shadow mb-4">
					<div class="card-body">
                        <!-- Cards Row -->
                        <div class="row justify-content-center mb-4">
                            <div class="col-sm-3 mb-1">
                                <div class="card text-white bg-success rounded">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo isset($activeUsers) ? 'Active Users' : 'Active Count'; ?></h5>
                                        <p class="card-text"><?php echo $activeCount; ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 mb-1">
                                <div class="card text-white bg-danger rounded">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo isset($activeUsers) ? 'Deactivated Users' : 'Inactive Count'; ?></h5>
                                        <p class="card-text"><?php echo $inactiveCount; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="table-responsive">
                            <!--Table-->
                            <?php
                                echo '<table class="table table-bordered dataTable styled-table" id="dataTable" width="100%" cellspacing="0" >

                                        <thead>
                                            <tr>';
                                                foreach ($tableTitles as $title) {
                                                    echo '<th scope="col">'.$title.'</th>';
                                                }
                                                if ($tableDbName != 'Support_Ticket') {
                                                    echo '<th scope="col">Action</th>';
                                                }
                                            echo'</tr>
                                        </thead>
                                        <tbody>';

                                // Loop through each row in the result set
                                while ($row = $result->fetch_assoc()) {
                                    echo '<tr>';
                                    foreach ($tableColumnNames as $columnName) {
                                        echo '<td class="left-align">';
                                        if ($columnName === 'image') {
                                            // Display original image with link to modal
                                            $imagePath = 'upload/'.$row[$columnName];
                                            echo '<a href="#" class="thumbnail-link" data-toggle="modal" data-target="#imageModal" data-image="'.$imagePath.'">';
                                            echo '<img src="'.$imagePath.'" alt="image" class="img-thumbnail">';
                                            echo '</a>';
                                        } elseif ($columnName === 'isactive') {
                                            // Display Active/Inactive with appropriate color
                                            if ($row[$columnName] == 1) {
                                                echo '<span style="color: green;">Active</span>';
                                            } else {
                                                echo '<span style="color: red;">Inactive</span>';
                                            }
                                        } else {
                                            echo $row[$columnName];
                                        }
                                        echo '</td>';
                                    }
                                    // Adding the "Edit" action link
                                    echo '<td><a href="CaseStudyEdit.php?id='.$row['userid'].'">Edit</a></td>';
                                    echo '</tr>';
                                }

                                echo '</tbody>
                                    </table>';

                                // Free result set
                                $result->free();

                                // Close connection
                                $conn->close();
                            ?>

                            <!--End of Table-->
                        </div>
                    </div>
                </div>

            </div>
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

<?php include 'ReferencesBottom.php'?>

<!-- Image Modal -->
<div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="imageModalLabel">Image Preview</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img id="modalImage" src="" alt="Full Image" class="img-fluid">
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap JS and other custom scripts -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- DataTables JS -->
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

<script>
    $(document).ready(function(){
        // Initialize DataTables
        $('#dataTable').DataTable();

        // When a thumbnail is clicked, update the modal image src
        $('.thumbnail-link').on('click', function(){
            var imageSrc = $(this).data('image');
            $('#modalImage').attr('src', imageSrc);
        });
    });
</script>

</body>
</html>
