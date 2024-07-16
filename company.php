<!DOCTYPE html>
<html lang="en">

<head>
  <title>Konnexio - News & Events</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="newsevents.css">
  <link rel="stylesheet" href="fundingpartners.css">
  <link rel="stylesheet" href="upcomingevents.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</head>

<body>
  <!-- Header Section -->
  <?php include 'header.php'; ?>

  <!-- News and Events Section -->
  <section class="news-events-section">
    <div class="container my-5">
      <h1>News and Events</h1>
      <p class="news-events-para">Stay updated with the latest news and events happening in our industry.</p>
    </div>
  </section>

  <!-- Carousel Section -->
  <div class="carousel-container">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="Images/Image2c.jpg" class="d-block w-100" alt="Hydrogen Fuel Cells">
          <div class="carousel-caption d-none d-md-block">
            <h3 class="card-title">Advancements in Hydrogen Fuel Cells</h3>
            <p class="card-text">Stay updated with the latest developments in the hydrogen fuel cells industry.
              Discover new technologies and breakthroughs.</p>
            <a href="#" class="btn btn-primary">Read More</a>
          </div>
        </div>
        <div class="carousel-item">
          <img src="Images/Image2b.jpg" class="d-block w-100" alt="Agriculture UVC">
          <div class="carousel-caption d-none d-md-block">
            <h3 class="card-title">UVC Technology in Agriculture</h3>
            <p class="card-text">Explore the benefits and applications of UVC technology in agriculture, enhancing
              crop yields and pest control.</p>
            <a href="#" class="btn btn-primary">Read More</a>
          </div>
        </div>
        <div class="carousel-item">
          <img src="Images/Image2a.jpg" class="d-block w-100" alt="Mechanical Automation vs Software">
          <div class="carousel-caption d-none d-md-block">
            <h3 class="card-title">Mechanical Automation vs Software</h3>
            <p class="card-text">Understand the benefits and differences between mechanical automation and software
              solutions in industrial applications.</p>
            <a href="#" class="btn btn-primary">Read More</a>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>

  <!-- Funding Partners Section -->
  <section class="funding-partners-section">
    <div class="container my-5 text-center">
      <h2>Funding Partners for Automation</h2>
      <div class="row">
        <div class="col-md-4 text-center">
          <div class="icon mb-3">
          <img src="Partners/Image_Konnerth.jpg" alt="Partner Konnerth" class="img-fluid mb-3">
          </div>
          <h3>Trust</h3>
          <p>Our commitment to precision and innovation has earned us the trust of industry leaders. By consistently
            delivering reliable and efficient automation solutions, we foster long-term partnerships grounded in mutual
            respect and proven results.</p>
        </div>
        <div class="col-md-4 text-center">
          <div class="icon mb-3">
          <img src="Partners/Image_OKU.jpg" alt="Partner OKU" class="img-fluid mb-3">
          </div>
          <h3>Family</h3>
          <p>We believe in building a community that supports and grows together. Our partners and clients are part of
            our extended family, and we dedicate ourselves to providing unwavering support and cutting-edge technology
            that they can rely on.</p>
        </div>
        <div class="col-md-4 text-center">
          <div class="icon mb-3">
          <img src="Partners/Image_Konnerth.jpg" alt="Partner Konnerth" class="img-fluid mb-3">
          </div>
          <h3>Choices</h3>
          <p>Our strategic decisions are guided by a commitment to excellence and ethical principles. We choose to work
            with partners who share our vision of advancing the automation industry through sustainable and
            forward-thinking solutions.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Upcoming Industry Events Section -->
  <section class="upcoming-events-section">
    <div class="container my-5">
      <h2>Upcoming Industry Events</h2>
      <div class="event-container mb-4">
        <div class="event-item d-flex align-items-center my-3 p-3 bg-light-blue">
          <div class="event-img">
            <img src="Images/Image2c.jpg" alt="Event 1" class="rounded-circle img-thumbnail">
          </div>
          <div class="event-content ms-4">
            
            <h3>Automation in Manufacturing</h3>
            <div class="event-date"><i class="bi bi-calendar"></i> March 15, 2024</div>
            <p class="event-details"><i class="bi bi-clock"></i> 09:00 am - 11:00 am</p>
            <p class="event-details"><i class="bi bi-geo-alt"></i> 123 Innovation Dr, Toronto, ON</p>
            
          </div>
        </div>
      </div>
      <div class="event-container mb-4">
        <div class="event-item d-flex align-items-center my-3 p-3 bg-light-green">
          <div class="event-img">
            <img src="Images/Image4b.jpg" alt="Event 2" class="rounded-circle img-thumbnail">
          </div>
          <div class="event-content ms-4">
            <h3>AI and Robotics Symposium</h3>
            <div class="event-date"><i class="bi bi-calendar"></i> March 20, 2024</div>
            <p class="event-details"><i class="bi bi-clock"></i> 10:00 am - 12:00 pm</p>
            <p class="event-details"><i class="bi bi-geo-alt"></i> 456 Tech Park, Vancouver, BC</p>
            
          </div>
        </div>
      </div>
      <div class="event-container mb-4">
        <div class="event-item d-flex align-items-center my-3 p-3 bg-light-yellow">
          <div class="event-img">
            <img src="Images/Image6d.jpg" alt="Event 3" class="rounded-circle img-thumbnail">
          </div>
          <div class="event-content ms-4">
            
            <h3>Innovations in Smart Factories</h3>
            <div class="event-date"><i class="bi bi-calendar"></i> March 25, 2024</div>
            <p class="event-details"><i class="bi bi-clock"></i> 01:00 pm - 03:00 pm</p>
            <p class="event-details"><i class="bi bi-geo-alt"></i> 789 Industrial Blvd, Montreal, QC</p>
            
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Pagination Section -->
  <section class="pagination-section">
    <div class="pagination-container">
      <nav aria-label="Page navigation example">
        <ul class="pagination">
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Previous">
              <span aria-hidden="true">&laquo;</span>
            </a>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
              <span aria-hidden="true">&raquo;</span>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </section>

  <!-- Footer Section -->
  <?php include 'footer.php'; ?>
</body>

</html>
make my code 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Company</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="styles.css"> <!-- Your custom styles -->
    <link rel="stylesheet" href="company_styles.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>

<!-- Navigation Pane -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="Images/Image1a.jpg" alt="Logo" class="rounded img-fluid"> 
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav mx-auto">
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
                        <li><a class="dropdown-item" href="#">Associations</a></li>
                        <li><a class="dropdown-item" href="#">Testimonials</a></li>
                        <li><a class="dropdown-item" href="#">Careers</a></li>
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

<!-- First Section (Carousel) -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">
    <!-- Indicators/dots -->
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    </div>
    <!-- Slides -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="slide1.jpg" alt="Slide 1" class="d-block w-100">
            <div class="carousel-caption">
                <h3>Welcome to Our Company</h3>
                <p>Innovating the Future</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="slide2.jpg" alt="Slide 2" class="d-block w-100">
            <div class="carousel-caption">
                <h3>Our Solutions</h3>
                <p>Customized for Your Needs</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="slide3.jpg" alt="Slide 3" class="d-block w-100">
            <div class="carousel-caption">
                <h3>Join Us</h3>
                <p>Explore Career Opportunities</p>
            </div>
        </div>
    </div>
    <!-- Controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>

<!-- About Company Section -->
<div class="container mt-5">
    <h1 class="text-center mb-4">About Company</h1>
    <hr>
    <div class="row">
        <div class="col-lg-6">
            <h2>Company Overview</h2>
            <p>KONNEXIO Inc., based in London, Ontario Canada designs and builds machines for the automation of assembly and test processes for automotive, consumer goods, and medical device industries.</p>
            <p>adapto™, a unique and innovative assembly automation and testing machine system comprised of modular Smart Cells, was developed to offer customers the highest degree of flexibility in their assembly applications while providing unparalleled return on investment and simple, effortless options for future retooling requirements.</p>
        </div>
        <div class="col-lg-6">
            <h2>Our Vision</h2>
            <p>KONNEXIO’s commitment to excellence provides customers with the confidence that their project’s priorities will be addressed
            with the greatest of care and respect.</p>
        </div>
    </div>
</div>

<!-- Footer Section -->
<footer class="footer bg-dark text-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4 footer-section">
                <div class="footer-logo">
                    <img src="Logo/konnexio-logo-white.png" alt="Konnexio Logo" class="rounded img-fluid">
                </div>
                <p><i class="bi bi-envelope-fill"></i> info@konnexio.com</p>
                <p><i class="bi bi-telephone-fill"></i> +1 (519) 457-8836</p>
                <p><i class="bi bi-geo-alt-fill"></i> 70 Pacific Court, Unit 14<br>London, ON N5V 3R5</p>
                <div class="d-flex">
                    <a class="f-icon me-2" href="#"><i class="bi bi-facebook"></i></a>
                    <a class="f-icon me-2" href="#"><i class="bi bi-youtube"></i></a>
                    <a class="f-icon me-2" href="#"><i class="bi bi-twitter"></i></a>
                    <a class="f-icon" href="#"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 footer-section">
                <h5 class="footer-heading"><a href="#">About</a></h5>
                <ul class="list-unstyled">
                    <li><a href="#">Company Story</a></li>
                    <li><a href="#">Our People</a></li>
                    <li><a href="#">Associations</a></li>
                    <li><a href="#">Testimonials</a></li>
                    <li><a href="#">Careers</a></li>
                </ul>
            </div>
            <div class="col-lg-2 col-md-4 footer-section">
                <h5 class="footer-heading"><a href="#">Solutions</a></h5>
                <ul class="list-unstyled">
                    <li><a href="#">adapto™</a></li>
                    <li><a href="#">Custom Machines</a></li>
                    <li><a href="#">Case Studies</a></li>
                </ul>
            </div>
            <div class="col-lg-2 col-md-4 footer-section">
                <h5 class="footer-heading"><a href="#">Services</a></h5>
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