<!DOCTYPE html>
<html lang="en">

<head>
  <title>Konnexio</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="styles.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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
                        <a class="nav-link" href="" role="button" data-bs-toggle="dropdown">About</a>
                        <ul class="dropdown-menu">
                           
                           
                            <li><a class="dropdown-item" href="company.html">Company Story</a></li>
                            <li><a class="dropdown-item" href="OurPeople.html">OurPeople</a></li>
                            <li><a class="dropdown-item" href="Associations.html">Associations</a></li>
                            <li><a class="dropdown-item" href="Testimonials.html">Testimonials</a></li>
                            <li><a class="dropdown-item" href="Careers.html">Careers</a></li>


                            
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
  
        <!-- The slideshow/carousel -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="Images/Image1a.jpg" alt="Image1a" class="d-block w-100">
                <div class="carousel-caption">
                    <h1>Welcome</h1>
                    <p>This is the welcome page!</p>
                    <button class="btn btn-danger btn-lg">Contact Us</button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="Images/Image1b.jpg" alt="Image1b" class="d-block w-100">
                <div class="carousel-caption">
                    <h1>adapto™</h1>
                    <p>This is the adapto page!</p>
                    <button class="btn btn-danger btn-lg">Contact Us</button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="Images/Image1c.jpg" alt="Image1c" class="d-block w-100">
                <div class="carousel-caption">
                    <h1>Mission</h1>
                    <p>This is the mission page!</p>
                    <button class="btn btn-danger btn-lg">Contact Us</button>
                </div>
            </div>
        </div>
  
        <!-- Left and right controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>

    <!--Second Section (Cards)-->
    <div class="container-fluid" style="padding: 0;">
        <div class="row no-gutters"> <!-- Added no-gutters class -->
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-inner">
                        <div class="card-front">
                            <img src="Images/Image2a.jpg" class="img-fluid" alt="Image2a">
                            <div class="card-body sec2a">
                                <h1 class="card-title">Industrial</h1>
                                <!--<p class="card-text">This is a test section</p>-->
                                <!--<button class="btn btn-primary">Know More</button>-->
                            </div>
                        </div>
                        <div class="card-back">
                            <div class="card-body sec2a">
                                <h3 class="card-title">Industrial</h3>
                                <p class="card-text">Description for this section</p>
                                <button class="btn btn-dark">Know More</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-inner">
                        <div class="card-front">
                            <img src="Images/Image2b.jpg" class="img-fluid" alt="Image2b">
                            <div class="card-body sec2b">
                                <h1 class="card-title">Agriculture</h1>
                                <!--<p class="card-text">This is a test section</p>-->
                                <!--<button class="btn btn-primary">Know More</button>-->
                            </div>
                        </div>
                        <div class="card-back">
                            <div class="card-body sec2b">
                                <h3 class="card-title">Agriculture</h3>
                                <p class="card-text">Description for this section</p>
                                <button class="btn btn-light">Know More</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-inner">
                        <div class="card-front">
                            <img src="Images/Image2c.jpg" class="img-fluid" alt="Image2c">
                            <div class="card-body sec2c">
                                <h1 class="card-title">Hydrogen<br>Fuel Cells</h1>
                                <!--<p class="card-text">This is a test section</p>-->
                                <!--<button class="btn btn-primary">Know More</button>-->
                            </div>
                        </div>
                        <div class="card-back">
                            <div class="card-body sec2c">
                                <h3 class="card-title">Hydrogen Fuel Cells</h3>
                                <p class="card-text">Description for this section</p>
                                <button class="btn btn-dark">Know More</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-inner">
                        <div class="card-front">
                            <img src="Images/Image2d.jpg" class="img-fluid" alt="Image2d">
                            <div class="card-body sec2d">
                                <h1 class="card-title">Other<br>Industries</h1>
                                <!--<p class="card-text">This is a test section</p>-->
                                <!--<button class="btn btn-primary">Know More</button>-->
                            </div>
                        </div>
                        <div class="card-back">
                            <div class="card-body sec2d">
                                <h3 class="card-title">Other Industries</h3>
                                <p class="card-text">Description for this section</p>
                                <button class="btn btn-light">Know More</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Third Section (Image Containers)-->
    <div class="container-fluid sec3 p-5 bg-light text-dark">
        <hr>
        <p><i>Discover adaptable automation solutions with KONNEXIO's innovative adapto™ technology, offering customizable, modular Smart Cells for seamless integration and rapid adaptation to streamline your production and testing processes.</i></p>
        <hr>
    </div>
    <div class="container-fluid" style="padding: 0;">
        <div class="row no-gutters">
            <div class="image-container stretch">
                <img src="Images/Image3a.jpg" alt="Image3a">
                <div class="transparent-overlay">
                    <div class="sec3a">
                        <h1>adapto™ Technology</h1>
                        <p>A unique and innovative assembly automation and testing machine system comprised of modular Smart Cells.</p>
                        <button class="btn btn-danger btn-lg">Learn More</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="sec3b bg-light">
                    <img src="Images/Image3b.jpg" alt="Image3b">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="sec3b bg-light">
                    <h1>Custom Machines</h1>
                    <p>Explore KONNEXIO's custom automation solutions, where our team of experts transforms your project vision into reality with tailored machine designs, efficient project management and seamless integration for optimal production efficiency.</p>
                    <button class="btn btn-danger btn-lg">Learn More</button>
                </div>
            </div>
        </div>
    </div>

    <!--Fourth Section-->
    <div class="container-fluid p-3 bg-light text-dark">
        <hr>
        <h1>Solutions and Services</h1>
    </div>
    <div class="container-fluid p-3 bg-light">
        <div class="row no-gutters">
            <div class="col-sm-4">
                <a href="#">
                    <div class="sec4">
                        <img src="Images/Image4a.jpg" class="img-fluid" alt="Image4a">
                        <div class="sec4-body">
                            <h1>Design</h1>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-4">
                <a href="#">
                    <div class="sec4">
                        <img src="Images/Image4b.jpg" class="img-fluid" alt="Image4b">
                        <div class="sec4-body">
                            <h1>Build</h1>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-4">
                <a href="#">
                    <div class="sec4">
                        <img src="Images/Image4c.jpg" class="img-fluid" alt="Image4c">
                        <div class="sec4-body">
                            <h1>Support</h1>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="container-fluid p-3 bg-light text-dark">
        <hr>
    </div>

    <!--Fifth Section (Partners)-->
    <div class="container-fluid" style="padding: 0;">
        <div class="row no-gutters">
            <div class="col-sm-4">
                <div class="card partners">
                    <div class="card-body partners-image">
                        <h1 class="partners-title">Partners</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <img src="Images/Image5a.jpg" class="img-fluid" alt="Image5a">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <img src="Images/Image5b.jpg" class="img-fluid" alt="Image5b">
                </div>
            </div>
        </div>
    </div>

    <!--Sixth Section (Testimonials)-->
    <div class="container-fluid p-3 bg-light text-dark">
        <hr>
            <div class="col-lg-10 offset-lg-1 pt-5 pb-5 bg-dark text-light">
                <div id="client-testimonial-carousel" class="carousel slide" data-ride="carousel" style="height:200px;">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active text-center p-4">
                            <blockquote class="blockquote text-center">
                                <p class="mb-0"><i class="fa fa-quote-left"></i> Everybody is a genius. But if you judge a fish by its ability to climb a tree, it will live its whole life believing that it is stupid.
                                </p>
                                <footer class="blockquote-footer">Albert Einstein <cite title="Source Title">genius</cite></footer>
                                <!-- Client review stars -->
                                <!-- "fas fa-star" for a full star, "far fa-star" for an empty star, "far fa-star-half-alt" for a half star. -->
                                <p class="client-review-stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                                </p>
                            </blockquote>
                        </div>
                        <div class="carousel-item text-center p-4">
                            <blockquote class="blockquote text-center">
                                <p class="mb-0"><i class="fa fa-quote-left"></i> Imagination is more important than knowledge. Knowledge is limited. Imagination encircles the world.
                                </p>
                                <footer class="blockquote-footer">Albert Einstein <cite title="Source Title">genius</cite></footer>
                                <!-- Client review stars -->
                                <!-- "fas fa-star" for a full star, "far fa-star" for an empty star, "far fa-star-half-alt" for a half star. -->
                                <p class="client-review-stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                </p>
                            </blockquote>
                        </div>
                        <div class="carousel-item text-center p-4">
                            <blockquote class="blockquote text-center">
                                <p class="mb-0"><i class="fa fa-quote-left"></i> A person who never made a mistake never tried anything new.
                                </p>
                                <footer class="blockquote-footer">Albert Einstein <cite title="Source Title">genius</cite></footer>
                                <!-- Client review stars -->
                                <!-- "fas fa-star" for a full star, "far fa-star" for an empty star, "far fa-star-half-alt" for a half star. -->
                                <p class="client-review-stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                </p>
                            </blockquote>
                        </div>
                    </div>
                    <ol class="carousel-indicators">
                        <li data-target="#client-testimonial-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#client-testimonial-carousel" data-slide-to="1"></li>
                        <li data-target="#client-testimonial-carousel" data-slide-to="2"></li>
                    </ol>
                </div>
            </div>
        <hr>
    </div>

    <!--Footer Section-->
    <footer class="footer">
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
                    <a class="f-icon" href="https://www.facebook.com/konnexioinc"><i class="bi bi-facebook"></i></a>
                    <a class="f-icon" href="https://www.youtube.com/@konnexio5801/videos"><i class="bi bi-youtube"></i></a>
                    <a class="f-icon" href="https://twitter.com/konnexio"><i class="bi bi-twitter-x"></i></a>
                    <a class="f-icon" href="https://www.linkedin.com/company/konnexio-inc-/"><i class="bi bi-linkedin"></i></a>
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