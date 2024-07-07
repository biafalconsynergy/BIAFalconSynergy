<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "konnexio";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM case_study where isactive = 1";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>KONNEXIO</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" href="konnexio-icon.png" type="image/vnd.microsoft.icon" />

	<!-- put JS library first  --> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>	
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
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

</head>

<body>
    <header>
        <!--Navigation Pane-->
        <nav class="navbar navbar-expand-lg bg-light" aria-label="Main Navigation">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="konnexio-logo.png" alt="Konnexio Logo" class="rounded img-fluid" loading="lazy"
                        typeof="foaf:Image">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Solutions</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">adapto™</a></li>
                                <li><a class="dropdown-item" href="#">Custom Machines</a></li>
                                <li><a class="dropdown-item" href="#">Case Studies</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Services</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Design</a></li>
                                <li><a class="dropdown-item" href="#">Build</a></li>
                                <li><a class="dropdown-item" href="#">Support</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Industries</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Industrial</a></li>
                                <li><a class="dropdown-item" href="#">Agriculture</a></li>
                                <li><a class="dropdown-item" href="#">Hydrogen Fuel Cells</a></li>
                                <li><a class="dropdown-item" href="#">Other Industries</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">News & Events</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">About</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Company Story</a></li>
                                <li><a class="dropdown-item" href="#">Our People</a></li>
                                <li><a class="dropdown-item" href="#">Associations</a></li>
                                <li><a class="dropdown-item" href="#">Testimonials</a></li>
                                <li><a class="dropdown-item" href="#">Careers</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <button class="btn btn-dark btn-lg">Contact</button>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <!--Third Section (Image Containers)-->
        <section class="container">
            <?php
            // Check if there are any rows in the result set
            if ($result->num_rows > 0) {
                // Output data of each row
                while ($row = $result->fetch_assoc()) {
                    ?>
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <div class="sec3b bg-light">
                                <img src="image/<?php echo $row['image']; ?>" alt="Case Study Image"
                                    class="img-fluid">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="sec3b bg-light p-3">
                                <h2><?php echo $row["title"]; ?></h2>
                                <p><?php echo $row["content"]; ?></p>
                                <button class="btn btn-danger btn-lg learn-more-btn"
                                    data-title="<?php echo $row['title']; ?>">Learn More</button>
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
                            <input type="hidden" id="caseStudyTitle">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer Section -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 footer-section">
                    <div class="footer-logo">
                        <img src="konnexio-logo-white.png" alt="Konnexio Logo" class="rounded img-fluid">
                    </div>
                    <p><i class="bi bi-envelope-fill"></i> info@konnexio.com</p>
                    <p><i class="bi bi-telephone-fill"></i> +1 (519) 457-8836</p>
                    <p><i class="bi bi-geo-alt-fill"></i> 70 Pacific Court, Unit 14<br>London, ON N5V 3R5</p>
                    <div class="d-flex">
                        <a class="f-icon" href="https://www.facebook.com/konnexioinc"><i class="bi bi-facebook"></i></a>
                        <a class="f-icon" href="https://www.youtube.com/@konnexio5801/videos"><i
                                class="bi bi-youtube"></i></a>
                        <a class="f-icon" href="https://twitter.com/konnexio"><i class="bi bi-twitter-x"></i></a>
                        <a class="f-icon"
                            href="https://www.linkedin.com/company/konnexio-inc-/"><i
                                class="bi bi-linkedin"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 footer-section">
                    <h5 class="footer-heading"><a href="">About</a></h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Company Story</a></li>
                        <li><a href="#">Our People</a></li>
                        <li><a href="#">Associations</a></li>
                        <li><a href="#">Testimonials</a></li>
                        <li><a href="#">Careers</a></li>
                    </ul>
                    <h5 class="footer-heading"><a href="#">News and Events</a></h5>
                    <h5 class="footer-heading"><a href="#">Contact Us</a></h5>
                </div>
                <div class="col-lg-2 col-md-4 footer-section">
                    <h5 class="footer-heading"><a href="">Solutions</a></h5>
                    <ul class="list-unstyled">
                        <li><a href="#">adapto™</a></li>
                        <li><a href="#">Custom Machines</a></li>
                        <li><a href="#">Case Studies</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-4 footer-section">
                    <h5 class="footer-heading"><a href="">Services</a></h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Design</a></li>
                        <li><a href="#">Build</a></li>
                        <li><a href="#">Support</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-4 footer-section">
                    <h5 class="footer-heading"><a href="#">Industries</a></h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Industrial</a></li>
                        <li><a href="#">Agriculture</a></li>
                        <li><a href="#">Hydrogen Fuel Cells</a></li>
                        <li><a href="#">Other Industries</a></li>
                    </ul>
                </div>
            </div>
            <div class="text-center mt-2">
                <p>© 2024 Konnexio Inc. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

</body>

</html>
