<?php
include 'db_connection.php';

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare the SQL statement to retrieve all case studies with their forms
$sql = "SELECT caseid, title, content, image, form FROM case_study WHERE isactive = 1";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result1 = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Case Studies | KONNEXIO</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Konnexio is a custom machine builder located in London Ontario. Our specialty is adapto™ which is a modular assembly line construction technology.">
    <link rel="icon" href="Logo/konnexio-icon.ico" type="image/x-icon">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/id_styles.css">

    <!-- JS Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <style>
        #main-content {
            margin-top: 20px; 
        }
        .section-separator {
            margin-top: 40px; 
        }
		.modal-dialog.custom-margin {
        max-width: 50%; 
        margin: 30px auto; 
        padding-right: 20px; 
		}

		.modal-content {
			padding: 20px; 
		}
    </style>
</head>
<body>
    <!--Header Data-->
    <?php include 'header.php'; ?>

    <div class="page-sec-main">
        <h1>Industries</h1>
        <br>
        <div class="page-sec-main-text">
            <h5>Explore how Konnexio has transformed businesses through innovative solutions and cutting-edge technology in our comprehensive case studies</h5>
        </div>
    </div>
        
    <section class="container section-separator">
        <?php
        // Check if there are any rows in the result set
        if ($result1->num_rows > 0) {
            // Output data of each row
            while ($row = $result1->fetch_assoc()) {
                ?>
                <div class="row mb-4">
                    <div class="col-md-6">
                        <div class="sec3b bg-light">
                            <img src="./admin_page_final_changes/admin_page/upload/<?php echo htmlspecialchars($row['image']); ?>" alt="Case Study Image" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="sec3b bg-light p-3">
                            <h2><?php echo htmlspecialchars($row["title"]); ?></h2>
                            <p><?php echo htmlspecialchars($row["content"]); ?></p>
                            <button class="btn btn-danger btn-lg learn-more-btn" data-caseid="<?php echo htmlspecialchars($row['caseid']); ?>" data-bs-toggle="modal" data-bs-target="#infoModal<?php echo htmlspecialchars($row['caseid']); ?>">Receive More Info</button>
                        </div>
                    </div>
                </div>

                <!-- Modal for each case study -->
				<div class="modal fade" id="infoModal<?php echo htmlspecialchars($row['caseid']); ?>" tabindex="-1" aria-labelledby="infoModalLabel<?php echo htmlspecialchars($row['caseid']); ?>" aria-hidden="true">
					<div class="modal-dialog custom-margin modal-lg">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title text-center" id="infoModalLabel<?php echo htmlspecialchars($row['caseid']); ?>">Enter Your Details Below</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">
								<?php
								if (!empty($row['form'])) {
									echo $row['form'];
								} else {
									echo "<p class='text-danger'>Error! Form Script not Found</p>";
								}
								?>
							</div>
						</div>
					</div>
				</div>

                <?php
            }
        } else {
            echo "<div class='row'><div class='col'><p>No active case studies found</p></div></div>";
        }
        ?>
    </section>

    <!-- Footer Data -->
    <?php include 'footer.php'; ?>  

    <!-- JavaScript to handle the state and modal behavior -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var modals = document.querySelectorAll('.modal');

            modals.forEach(function(modal) {
                modal.addEventListener('show.bs.modal', function () {
                    // Save the current state
                    history.pushState(null, null, location.href);
                });

                modal.addEventListener('hidden.bs.modal', function () {
                    // Go back to the saved state
                    history.back();
                });
            });
        });
    </script>

</body>
</html>
