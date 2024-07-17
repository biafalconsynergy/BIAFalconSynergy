<!DOCTYPE html>
<html lang="en">

<head>
    <title>Template | KONNEXIO</title>
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

    <!-- JS Libraries -->
    <script src="script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</head>

<body>
    
    <!-- Header Section -->
    <?php include 'header.php'; ?>

    <h1>This is Heading h1 </h1>
    <h2>This is Subheading h2 </h2>
    <h3>This is Sub Sub Heading h3 </h3>
    <h4>This is Sub Sub Sub Heading h4 </h4>
    <h5>This is Sub Sub Sub Sub Heading h5 </h5>
    <p>This is Body p </p>
    This is the default size 
    <br>
    <button class="btn btn-dark btn-lg" onclick="location.href='#';">This is a black button</button>
    <br><br>
    <button class="btn btn-danger btn-lg">This is a red button</button>
    <br><br>

    <div class="content contact-us-google-maps">
        <hr>
        <h1>Testing Google Maps</h1>
        <p>Find us on the map below:</p>
        
        <!-- Embed Google Maps -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11670.04463076329!2d-81.17450500000001!3d43.009627!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882eed3828696603%3A0x8995d1593b38c989!2sKonnexio%20Inc.!5e0!3m2!1sen!2sus!4v1721086280924!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <div class="content">
        <hr>
        <h1>Testing HubSpot Contact Us</h1>
        <p>Fill out the form below:</p>
        
        <!-- Embed HubSpot Form -->
        <script charset="utf-8" type="text/javascript" src="https://js.hsforms.net/forms/embed/v2.js"></script>
        <script>
        hbspt.forms.create({
            region: "na1",
            portalId: "46249479",
            formId: "4e16fdb0-9d94-492c-9110-bac9843df13b"
        });
        </script>
    </div>




    <!-- Footer Section -->
    <?php include 'footer.php'; ?>

</body>
</html>