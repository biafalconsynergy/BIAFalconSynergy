<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    
<style>    
    .img-thumbnail {
            width: 50px; 
            height: 50px; 
            object-fit: cover; /* Ensure the image covers the box */
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
            color: #ffffff;
            background-color: #4169E1;
            text-align: left;
        }
</style>    
    
</head>

<body>

    <?php 
        
        $id = isset($_GET['id']) ? intval($_GET['id']) : 0;
		
		// Assume $currentPage is a variable that holds the name of the current page
		$currentPage = basename($_SERVER['PHP_SELF']); // Gets the current script name

		if ($currentPage === 'UserEdit.php') {
		//Creates and assigns the query 
        $query = 'SELECT ' . implode(',', $tableColumnNames) . ' , cs.roleid
                  FROM ' . $tableDbName . ' cs 
                  JOIN user_role r ON cs.roleid = r.roleid JOIN user_credentials cr ON cs.userid = cr.userid WHERE ' .$tableColumnNames[0].'='.$id;
        $result = $conn->query($query);	
		}	
		else {	
        //Creates and assigns the query 
        $query = 'SELECT ' . implode(',', $tableColumnNames) . ' FROM ' . $tableDbName . ' WHERE ' .$tableColumnNames[0].'='.$id;
        $result = $conn->query($query);
        }
		
		
        // Get the referer URL
        $referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'admin.php';  
        
        // Define the page name or identifier
        $pageName = basename($_SERVER['PHP_SELF']);

        $hideImageButton = ($pageName === 'CareersEdit.php' || $pageName === 'UserEdit.php');
        $showContentTypeButton = ($pageName === 'NewsEventEdit.php'); 
        
        // Handle form submission
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			
			$columnMapping = [
				'role_name' => 'roleid'
			];
            $updateValues = [];
            $setClauses = [];

            // Collect data from POST and sanitize
            foreach ($_POST as $column => $value) {
                if ($column !== 'id') {
					
					$mappedColumn = isset($columnMapping[$column]) ? $columnMapping[$column] : $column;
					
                    // Ensure values are escaped properly
                    $updateValues[$mappedColumn] = $conn->real_escape_string($value);
                }
            }
            
            // Handle file upload
            if (isset($_FILES['uploadfile']) && $_FILES['uploadfile']['error'] === UPLOAD_ERR_OK) {
                $fileTmpPath = $_FILES['uploadfile']['tmp_name'];
                $fileName = $_FILES['uploadfile']['name'];
                $fileSize = $_FILES['uploadfile']['size'];
                $fileType = $_FILES['uploadfile']['type'];
                $fileNameCmps = explode(".", $fileName);
                $fileExtension = strtolower(end($fileNameCmps));

                // Define allowed file extensions
                $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];

                if (in_array($fileExtension, $allowedExtensions)) {
                    // Create a new file name to prevent overwriting
                    $newFileName = md5(time() . $fileName) . '.' . $fileExtension;
                    $uploadFileDir = 'upload/';
                    $dest_path = $uploadFileDir . $newFileName;

                    if (move_uploaded_file($fileTmpPath, $dest_path)) {
                        $updateValues['image'] = $newFileName;
                    } else {
                        echo "<script>alert('Error uploading file.');</script>";
                    }
                } else {
                    echo "<script>alert('Unsupported file type.');</script>";
                }
            }

			$tableColumnNames = str_replace('cs.', '', $tableColumnNames);
			$tableColumnNames = str_replace('r.', '', $tableColumnNames);
			$tableColumnNames = str_replace('cr.', '', $tableColumnNames);
			
										
            // Construct the SET clauses for the UPDATE query
            foreach ($updateValues as $column => $value) {
                // Check if the value is a string and wrap it in quotes
                $escapedValue = is_numeric($value) ? $value : "'" . $value . "'";
                $setClauses[] = $column . " = " . $escapedValue;
            }

            // Construct the full UPDATE query
            $updateQuery = 'UPDATE ' . $tableDbName . ' SET ' . implode(', ', $setClauses) . ', last_updated_date = NOW() WHERE ' . $tableColumnNames[0] . ' = ' . intval($id);

            // Debug: Print the query to verify its correctness
            //echo '<div class="alert alert-info">Query: ' . htmlspecialchars($updateQuery) . '</div>';

            // Execute the query
            if ($conn->query($updateQuery) === TRUE) {
                echo "<script>
                alert('Record updated successfully');
                window.location.href = '$mainpage';
              </script>";
            } else {
                echo "<script>
                alert('Error inserting record: " . $conn->error . "');
                window.location.href = '$mainpage';
              </script>";
            }
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

                <!-- DataTables -->
                <div class="card shadow mb-4">

                    <div class="card-body">
                        <div class="table-responsive">
                            <!--Table-->
                            <?php
                                echo '<table class="table table-bordered styled-table" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>';
                                                for ($i = 0; $i < count($tableTitles); $i++) {
                                                    echo '<th scope="col">' . $tableTitles[$i] . '</th>';
                                                }
                                            echo '</tr>
                                        </thead>
                                        <tbody>';

                                    // Shows the result in the table previously created
                                    while ($row = $result->fetch_assoc()) {
                                        echo '<tr>';
                                        for ($i = 0; $i < count($tableColumnNames); $i++) {
                                            $columnName = $tableColumnNames[$i];
											$columnName = str_replace('cs.', '', $columnName);
											$columnName = str_replace('r.', '', $columnName);
											$columnName = str_replace('cr.', '', $columnName);											
                                            $value = $row[$columnName];
                                            
                                            // Handle 'image' column
                                            if ($columnName === 'image') {
                                                $imagePath = 'upload/' . $value;
                                                echo '<td><a href="#" class="thumbnail-link" data-toggle="modal" data-target="#imageModal" data-image="' . $imagePath . '">';
                                                echo '<img src="' . $imagePath . '" alt="image" class="img-thumbnail">';
                                                echo '</a></td>';
                                            } 
                                            // Handle 'isactive' column
                                            elseif ($columnName === 'isactive') {
                                                if ($value == 1) {
                                                    echo '<td><span style="color: green;">Active</span></td>';
                                                } else {
                                                    echo '<td><span style="color: red;">Inactive</span></td>';
                                                }
                                            } elseif ($columnName === 'form') {
												// displaying the script as plain text
												$scriptData = $row['form']; 
												echo '<td>' . htmlspecialchars($scriptData) . '</td>';
											}
                                            // Handle 'last_updated_date' column
                                            elseif ($columnName === 'last_updated_date' && (empty($value) || is_null($value))) {
                                                echo '<td>N/A</td>';
                                            } 
                                            // For all other columns
                                            else {
                                                echo '<td>' . $value . '</td>';
                                            }
                                        }
                                        echo '</tr>';
                                    }
                                    echo '</tbody>
                                    </table>';
                                ?>

                                <br><br>
                                <form method="post" enctype="multipart/form-data">
                                    <?php 
                                        // Fetch existing data
                                        $result = $conn->query($query);
                                        $row = $result->fetch_assoc();

                                        for ($i = 0; $i < count($tableColumnNames); $i++) {
                                            $columnName = $tableColumnNames[$i];
											$columnName = str_replace('cs.', '', $columnName);
											$columnName = str_replace('r.', '', $columnName);
											$columnName = str_replace('cr.', '', $columnName);	
                                            $columnTitle = $tableTitles[$i];

                                            // Check if the current column is one of the fields that should be disabled
                                            if (in_array($columnName, $disabletableColumnNames)) {
                                                // Make the field read-only if it's in the $disableTableColumnNames array
                                                echo '<div class="mb-3">
                                                    <label for="formGroupExampleInput'.$i.'" class="form-label">'.$columnTitle.'</label>
                                                    <input type="text" class="form-control" id="formGroupExampleInput'.$i.'" value="'.$row[$columnName].'" readonly>
                                                </div>';
                                            } elseif ($columnName == 'content') {
												// Add a textarea for 'content'
												echo '<div class="mb-3">
													<label for="formGroupExampleInput'.$i.'" class="form-label">'.$columnTitle.'</label>
													<textarea class="form-control" id="formGroupExampleInput'.$i.'" name="'.$columnName.'" rows="4">'.$row[$columnName].'</textarea>
												</div>';
											} elseif ($columnName == 'form') {
												// Add a textarea for 'content'
												echo '<div class="mb-3">
													<label for="formGroupExampleInput'.$i.'" class="form-label">'.$columnTitle.'</label>
													<textarea class="form-control" id="formGroupExampleInput'.$i.'" name="'.$columnName.'" rows="4">'.$row[$columnName].'</textarea>
												</div>';
											
										    } elseif ($columnName == 'last_updated_date') {
												continue;
											} elseif ($columnName == 'content_type') {
												// Add a dropdown for 'content_type'
												echo '<div class="mb-3">
													<label for="formGroupExampleInput'.$i.'" class="form-label">'.$columnTitle.'</label>
													<select class="form-control" id="formGroupExampleInput'.$i.'" name="'.$columnName.'">
														<option value="News"' . ($row[$columnName] == 'News' ? ' selected' : '') . '>News</option>
														<option value="Events"' . ($row[$columnName] == 'Events' ? ' selected' : '') . '>Events</option>
													</select>
												</div>';
											} elseif ($columnName == 'Gender') {
												// Add a dropdown for 'Gender'
												echo '<div class="mb-3">
													<label for="formGroupExampleInput'.$i.'" class="form-label">'.$columnTitle.'</label>
													<select class="form-control" id="formGroupExampleInput'.$i.'" name="'.$columnName.'">
														<option value="Male"' . ($row[$columnName] == 'Male' ? ' selected' : '') . '>Male</option>
														<option value="Female"' . ($row[$columnName] == 'Female' ? ' selected' : '') . '>Female</option>
														<option value="Other"' . ($row[$columnName] == 'Other' ? ' selected' : '') . '>Other</option>
													</select>
												</div>';
											} elseif ($columnName == 'isactive') {
												// Add a dropdown for 'isactive'
												echo '<div class="mb-3">
													<label for="formGroupExampleInput'.$i.'" class="form-label">'.$columnTitle.'</label>
													<select class="form-control" id="formGroupExampleInput'.$i.'" name="'.$columnName.'">
														<option value="1"' . ($row[$columnName] == '1' ? ' selected' : '') . '>Active</option>
														<option value="0"' . ($row[$columnName] == '0' ? ' selected' : '') . '>Inactive</option>
													</select>
												</div>';
											} elseif ($columnName == 'role_name') {
												// Fetch roles from database
												echo '<div class="mb-3">
														<label for="formGroupExampleInput'.$i.'" class="form-label">'.$columnTitle.'</label>
														<select class="form-control" id="formGroupExampleInput'.$i.'" name="roleid">'; 

												try {
													$stmt = $conn->query("SELECT roleid, role_name FROM user_role");
													$selectedRoleId = $row['roleid']; // Get the current role ID from the database
													while ($roleRow = $stmt->fetch_assoc()) {
														// Check if this role is the selected one
														$selected = ($selectedRoleId == $roleRow['roleid']) ? ' selected' : '';
														echo "<option value='" . $roleRow['roleid'] . "'" . $selected . ">" . $roleRow['role_name'] . "</option>";
													}
												} catch (Exception $e) {
													echo "Error: " . $e->getMessage();
												}

												echo '</select>
													</div>';

											} elseif ($columnName == 'image') {
												// Add an image upload field if $hideImageButton is false
												if (!$hideImageButton) {
													echo '<div class="form-group">
														<label for="uploadfile">Image</label>
														<input class="form-control" type="file" name="uploadfile" id="uploadfile" onchange="previewImage(event)">
														<img id="imagePreview" src="#" alt="Image Preview" style="display: none; margin-top: 10px; max-height: 200px;">
													</div>';
												}
                                        } else {
												// Default input for other fields
												echo '<div class="mb-3">
													<label for="formGroupExampleInput'.$i.'" class="form-label">'.$columnTitle.'</label>
													<input type="text" class="form-control" id="formGroupExampleInput'.$i.'" name="'.$columnName.'" value="'.$row[$columnName].'">
												</div>';
											}
										}
                                    ?>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                    <a href="<?php echo $referer; ?>" class="btn btn-secondary">Cancel</a>
                                </form>
                        </div>
                    </div>
                </div>
                <!--End DataTables -->
            </div>
        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer" background-color:#F0F1F5>
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

    <?php include 'ReferencesBottom.php' ?>

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

</body>
</html>
