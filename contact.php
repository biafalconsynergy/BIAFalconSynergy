<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contact Us | KONNEXIO</title>
        <link rel="icon" href="Logo/konnexio-icon.ico" type="image/x-icon">

        <!-- CSS Libraries -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap">
        <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="css/ct_styles.css">

        <!-- JS Libraries -->
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" defer></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
        <script src="js/ct_scripts.js"></script>
        
    </head>
    <body>
        <!-- Header Section -->
        <?php include 'header.php'; ?>

        <?php if (isset($_SESSION['message'])) { ?>
            <div id="sessionMessage" style="display:none;">
                <?php echo $_SESSION['message']; ?>
            </div>
            <?php
            unset($_SESSION['message']);
        } ?>
        <div class="container-fluid mt-5">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="jumbotron">
                        <h4 class="display-5 mb-4 text-center">Contact Us</h4>
                        <form action="email.php" method="post">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control mb-4" name="fullname" id="fullname" placeholder="Full Name" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control mb-4" name="email" id="email" placeholder="Enter Email" required>
                            </div>
                            <div class="form-group">
                                <label for="subject">Subject</label>
                                <input type="text" class="form-control mb-4" name="subject" id="subject" placeholder="Enter Subject" required>
                            </div>
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea class="form-control mb-4" name="message" id="message" placeholder="Enter Message" required></textarea>
                            </div>
                            <div class="text-center">
                                <input type="submit" class="btn btn-primary mt-4" value="Submit" name="submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-center align-items-center my-4">
            <h1>Our Office Location</h1>
        </div>
        <div class="container mb-5">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10">
                    <div class="map-responsive">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2917.5109869850908!2d-81.17708012437848!3d43.009630593817604!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882eed3828696603%3A0x8995d1593b38c989!2sKonnexio%20Inc.!5e0!3m2!1sen!2sca!4v1721086683724!5m2!1sen!2sca" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Footer Section -->
        <?php include 'footer.php'; ?>
    
        <!-- Bootstrap JS and dependencies -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
</html>
