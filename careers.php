<!DOCTYPE html>
<html lang="en">

<head>
    <title>Careers | KONNEXIO</title>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>

<body>

    <!-- Header Section -->
    <?php include 'header.php'; ?>

    <!-- Careers Section -->
    <div class="container mt-5">
        <h1 class="mb-4">Career Opportunities</h1>
        <div class="row">
            <?php
            // Sample array of career opportunities
            $careers = [
                ["title" => "Mechanical Engineer", "location" => "City A", "description" => "We are looking for a skilled mechanical engineer to join our team."],
                ["title" => "Software Developer", "location" => "City B", "description" => "Seeking a passionate software developer with experience in web technologies."],
                ["title" => "Project Manager", "location" => "City C", "description" => "Looking for an experienced project manager to lead our projects."],
                ["title" => "Quality Assurance Specialist", "location" => "City D", "description" => "QA specialist needed to ensure the highest quality of our products."],
            ];

            foreach ($careers as $career) {
                echo '
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">' . $career["title"] . '</h5>
                            <h6 class="card-subtitle mb-2 text-muted">' . $career["location"] . '</h6>
                            <p class="card-text">' . $career["description"] . '</p>
                            <a href="apply.php?job=' . urlencode($career["title"]) . '" class="btn btn-primary">Apply Now</a>
                        </div>
                    </div>
                </div>
                ';
            }
            ?>
        </div>
    </div>

    <!-- Footer Section -->
    <?php include 'footer.php'; ?>

</body>

</html>
