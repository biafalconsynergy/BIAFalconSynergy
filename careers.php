<!DOCTYPE html>
<html lang="en">

<head>
  <title>Careers - Konnexio</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="styles.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <!--Navigation Pane-->
    <nav class="navbar navbar-expand-sm bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="logo.png" alt="Logo" class="rounded img-fluid"> 
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav mx-5">
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown">Solutions</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">adapto™</a></li>
                            <li><a class="dropdown-item" href="#">Custom Machines</a></li>
                            <li><a class="dropdown-item" href="#">Case Studies</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown">Services</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Design</a></li>
                            <li><a class="dropdown-item" href="#">Build</a></li>
                            <li><a class="dropdown-item" href="#">Support</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown">Industries</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Industrial</a></li>
                            <li><a class="dropdown-item" href="#">Agriculture</a></li>
                            <li><a class="dropdown-item" href="#">Hydrogen Fuel Cells</a></li>
                            <li><a class="dropdown-item" href="#">Other Industries</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown">About</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Company Story</a></li>
                            <li><a class="dropdown-item" href="#">Our People</a></li>
                            <li><a class="dropdown-item" href="careers.php">Careers</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">News & Events</a>
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-dark btn-lg">Contact</button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

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
</body>

</html>
