<?php
	include 'db_connection.php';

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$sql = "SELECT * FROM case_study WHERE isactive = 1";
	$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Case Studies | KONNEXIO</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="Logo/konnexio-icon.ico" type="image/x-icon">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/cs_styles.css">

    <!-- JS Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    
    <script>
    $(document).ready(function() {
        $('.learn-more-btn').click(function() {
            var title = $(this).data('title');
            $('#caseStudyTitle').val(title);
            $('#emailModal').modal('show');
        });

        $('#emailForm').submit(function(event) {
            event.preventDefault();
            var formData = $(this).serialize(); // Serialize form data

            $.ajax({
                type: 'POST',
                url: 'handle_email.php', // PHP script to handle email
                data: formData, // Send serialized form data
                success: function(response) {
                    alert(response); // Display response from PHP script
                    $('#emailModal').modal('hide');
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText); // Log the detailed error
                    alert('Error submitting email. Please try again.');
                }
            });
        });
    });
    </script>

    <style>
        #main-content {
            margin-top: 20px; 
        }
        .section-separator {
            margin-top: 40px; /* Added margin to separate sections */
        }
    </style>
	
</head>

<body>
	<!--Header Data-->
    <?php include 'header.php'; ?>

    <main id="main-content">

    <div class="page-sec-main">
        <h1>Case Studies</h1>
        <br>
        <div class="page-sec-main-text">
            <h5>Explore how Konnexio has transformed businesses through innovative solutions and cutting-edge technology in our comprehensive case studies.</h5>
        </div>
    </div>

        <section class="container section-separator">
            <?php
            // Check if there are any rows in the result set
            if ($result->num_rows > 0) {
                // Output data of each row
                while ($row = $result->fetch_assoc()) {
                    ?>
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <div class="sec3b bg-light">
                                <img src="upload/<?php echo $row['image']; ?>" alt="Case Study Image" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="sec3b bg-light p-3">
                                <h2><?php echo $row["title"]; ?></h2>
                                <p><?php echo $row["content"]; ?></p>
                                <button class="btn btn-danger btn-lg learn-more-btn" data-title="<?php echo $row['title']; ?>">Learn More</button>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            } else {
                echo "<div class='row'><div class='col'><p>No active case studies found.</p></div></div>";
            }
            ?>
        </section>

        <!-- Modal for Email -->
        <div class="modal fade" id="emailModal" tabindex="-1" aria-labelledby="emailModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="emailModalLabel">Enter Your Email Address</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="emailForm">
                            <div class="mb-3">
                                <label for="emailInput" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="emailInput" name="email" required>
                            </div>
                            <input type="hidden" id="caseStudyTitle" name="case_study_title">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!--footer data -->
    <?php include 'footer.php'; ?>  

</body>

</html>
