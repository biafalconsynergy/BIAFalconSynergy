<!DOCTYPE html>
<html lang="en">

<head>
  <title>Apply - Konnexio</title>
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

    <!-- Application Form Section -->
    <div class="container mt-5">
        <h1 class="mb-4">Apply for <?php echo htmlspecialchars($_GET['job']); ?></h1>
        <form action="submit_application.php" method="post">
            <input type="hidden" name="job_title" value="<?php echo htmlspecialchars($_GET['job']); ?>">
            <div class="mb-3">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="resume" class="form-label">Upload Resume</label>
                <input type="file" class="form-control" id="resume" name="resume" accept=".pdf,.doc,.docx" required>
            </div>
            <div class="mb-3">
                <label for="cover_letter" class="form-label">Cover Letter</label>
                <textarea class="form-control" id="cover_letter" name="cover_letter" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit Application</button>
        </form>
    </div>
</body>

</html>
