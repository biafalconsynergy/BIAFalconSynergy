<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home | KONNEXIO</title>
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
    <link rel="stylesheet" type="text/css" href="styles.css">

    <!-- JS Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" defer></script>
    <!--<script src="https://code.jquery.com/jquery-3.5.1.min.js" defer></script>-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" defer></script>
</head>

<body>
    
    <!-- Header Section -->
    <?php include 'header.php'; ?>

    <main>
        <!-- First Section (Carousel) -->
        <section id="carouselSection">
            <div id="homeCarousel" class="carousel slide" data-bs-ride="carousel">
                <!-- Indicators/dots -->
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="2"></button>
                </div>

                <!-- The slideshow/carousel -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="Images/Image1a.jpg" alt="Image1a" class="d-block w-100">
                        <div class="carousel-caption">
                            <h1>Welcome</h1>
                            <h4>KONNEXIO Inc., based in London, Ontario Canada designs and builds machines for the automation of assembly and test processes for automotive, consumer goods, and medical device industries.</h4><br>
                            <button class="btn btn-danger btn-lg">Contact Us</button>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="Images/Image1b.jpg" alt="Image1b" class="d-block w-100">
                        <div class="carousel-caption">
                            <h1>adapto™</h1>
                            <h4>adapto™, a unique and innovative assembly automation and testing machine system comprised of modular Smart Cells, was developed to offer customers the highest degree of flexibility in their assembly applications while providing unparalleled return on investment and simple, effortless options for future retooling requirements.</h4><br>
                            <button class="btn btn-danger btn-lg">Contact Us</button>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="Images/Image1c.jpg" alt="Image1c" class="d-block w-100">
                        <div class="carousel-caption">
                            <h1>Mission</h1>
                            <h4>"Our greatest desire is that our customers enjoy the experience of working with us on their machine building project; accomplishing their automation goals, and receiving the best return-on-investment possible." - Konrad Konnerth, President</h4><br>
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
        </section>

        <!--Second Section (Cards)-->
        <section id="cardsSection" class="container-fluid" style="padding: 0;">
            <div class="row no-gutters">
                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-inner">
                            <div class="card-front">
                                <div class="box sec2a-front"></div>
                                <div class="card-body sec2a">
                                    <h2 class="card-title">Industrial</h2>
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
                                <div class="box sec2b-front"></div>
                                <div class="card-body sec2b">
                                    <h2 class="card-title">Agriculture</h2>
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
                                <div class="box sec2c-front"></div>
                                <div class="card-body sec2c">
                                    <h2 class="card-title">Hydrogen<br>Fuel Cells</h2>
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
                                <div class="box sec2d-front"></div>
                                <div class="card-body sec2d">
                                    <h2 class="card-title">Other<br>Industries</h2>
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
        </section>

        <!--Third Section (Image Containers)-->
        <section class="container-fluid sec3 p-5 bg-light text-dark">
            <hr>
            <h4><i>Discover adaptable automation solutions with KONNEXIO's innovative adapto™ technology, offering customizable, modular Smart Cells for seamless integration and rapid adaptation to streamline your production and testing processes.</i></h4>
            <hr>
        </section>
        
        <section class="container-fluid" style="padding: 0;">
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
        </section>

        <!--Fourth Section-->
        <section class="container-fluid p-3 bg-light text-dark">
            <hr>
            <h1>Solutions and Services</h1>
        </section>
        <section class="container-fluid p-3 bg-light">
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
        </section>
        <section class="container-fluid p-3 bg-light text-dark">
            <hr>
        </section>

        <!--Fifth Section (Partners)-->
        <section class="container-fluid partners-section">
            <div class="row no-gutters align-items-center justify-content-center partners-row">
                <div class="col-12 d-flex justify-content-center align-items-center text-center">
                    <h1 class="partners-title">Partners</h1>
                    <div class="d-flex justify-content-center align-items-center mx-4">
                        <img src="Partners/konnerth2.png" class="img-fluid partners-logo" alt="Konnerth Gruppe">
                    </div>
                    <div class="d-flex justify-content-center align-items-center mx-4">
                        <img src="Partners/oku.png" class="img-fluid partners-logo" alt="OKU">
                    </div>
                </div>
            </div>
        </section>

        <!--Sixth Section (Testimonials)-->
        <section class="container-fluid p-3 bg-light text-dark">
            <hr>
            <h2>What our clients say</h2>
            <div class="col-lg-10 offset-lg-1 pt-5 pb-5">
                <div id="testi-carousel" class="carousel slide" data-ride="carousel" data-interval="5000">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item testi-carousel-item active text-center p-4">
                            <blockquote class="blockquote text-center">
                                <p class="mb-0"><i class="fa fa-quote-left">Konnexio's custom automation solutions have transformed our production line. Their innovative approach and attention to detail allowed us to streamline our processes and significantly reduce our time-to-market. The team was incredibly professional and delivered exactly what we needed.</i></p>
                                <br><br>
                                <p>Emily Harris<br>Operations Manager at AutoTech Corp</p>
                            </blockquote>
                        </div>
                        <div class="carousel-item testi-carousel-item text-center p-4">
                            <blockquote class="blockquote text-center">
                                <p class="mb-0"><i class="fa fa-quote-left"></i> Working with Konnexio has been a game-changer for our business. Their expertise in automation has not only improved our efficiency but also increased our production capacity. The team's commitment to excellence and customer satisfaction is unparalleled.<br>
                                <br>John Smith<br>CEO at Tech Innovations Ltd</p>
                            </blockquote>
                        </div>
                        <div class="carousel-item testi-carousel-item text-center p-4">
                            <blockquote class="blockquote text-center">
                                <p class="mb-0"><i class="fa fa-quote-left"></i> Konnexio's automation solutions have revolutionized our manufacturing process. Their tailored approach and cutting-edge technology have significantly boosted our productivity and reduced operational costs. The team's professionalism and dedication were evident throughout the project.<br>
                                <br>Sarah Johnson<br>Production Manager at Industrial Solutions Inc</p>
                            </blockquote>
                        </div>
                        <!-- Add more testimonials here -->
                    </div>
                    <a class="carousel-control-prev" href="#testi-carousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon testi-carousel-control-prev-icon" aria-hidden="true">
                            <i class="fa fa-chevron-left"></i>
                        </span>
                        <span class="sr-only"></span>
                    </a>
                    <a class="carousel-control-next" href="#testi-carousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon testi-carousel-control-next-icon" aria-hidden="true">
                            <i class="fa fa-chevron-right"></i>
                        </span>
                        <span class="sr-only"></span>
                    </a>
                    <ol class="carousel-indicators testi-carousel-indicators">
                        <li data-target="#testi-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#testi-carousel" data-slide-to="1"></li>
                        <li data-target="#testi-carousel" data-slide-to="2"></li>
                        <!-- Add more indicators here -->
                    </ol>
                </div>
            </div>
            <br><br>
        </section>
    </main>

    <!-- Footer Section -->
    <?php include 'footer.php'; ?>

</body>
</html>
