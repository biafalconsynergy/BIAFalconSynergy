<?php
	include 'db_connection.php';

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$sql = "SELECT * FROM testimonial WHERE isactive = 1";
	$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home | KONNEXIO</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Konnexio is a custom machine builder located in London Ontario. Our specialty is adapto™ which is a modular assembly line construction technology.">
    <link rel="icon" href="Logo/konnexio-icon.ico" type="image/x-icon">

    <!-- CSS Libraries -->
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

    <main>
        <!-- First Section (Carousel) -->
        <section id="carouselSection">
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
                        <div class="carousel-caption main">
                            <h1>Welcome</h1>
                            <p>Welcome to Konnexio - where dedication meets innovation. As your trusted partners in automation excellence, we bring expertise and reliable solutions to every challenge you face. No matter what your industry is, we are here to transform your production processes and lead you to new heights of success.</p>
                            <button class="btn btn-danger btn-lg" onclick="location.href='contact.php';">Contact Us</button>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="Images/Image1b.jpg" alt="Image1b" class="d-block w-100">
                        <div class="carousel-caption main">
                            <h1>adapto™</h1>
                            <p>Optimize your Investments, Elevate Productivity, and Stay Market-Responsive with Adapto's Groundbreaking Automation - Build for the Future!</p>
                            <button class="btn btn-danger btn-lg" onclick="location.href='contact.php';">Contact Us</button>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="Images/Image1c.jpg" alt="Image1c" class="d-block w-100">
                        <div class="carousel-caption main">
                            <h1>Mission</h1>
                            <p>Empowering manufacturers to revolutionize their production with Adapto's pioneering automation solutions. By making your operations smarter, more efficient, and Market responsive, we transform your investments into scalable, reliable growth, positioning you as the leader in your industry.</p>
                            <button class="btn btn-danger btn-lg" onclick="location.href='contact.php';">Contact Us</button>
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
        <section id="cardsSection" class="container-fluid bg-light" style="padding: 0;">
            <div class="row no-gutters">
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="card card-industries bg-light">
                        <div class="card-inner">
                            <div class="card-front">
                                <div class="card-body sec2">
                                    <h1 class="card-title">Increased<br>Productivity</h1>
                                </div>
                            </div>
                            <div class="card-back">
                                <div class="card-body sec2">
                                    <h3 class="card-title">Increased Productivity</h3>
                                    <p class="card-text">Description for this section</p>
                                    <button class="btn btn-dark" onclick="location.href='industries.php#industrial';" aria-label="Know more about Increased Productivity">Know More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="card card-industries bg-light">
                        <div class="card-inner">
                            <div class="card-front">
                                <div class="card-body sec2">
                                    <h1 class="card-title">Scalability</h1>
                                </div>
                            </div>
                            <div class="card-back">
                                <div class="card-body sec2">
                                    <h3 class="card-title">Scalability</h3>
                                    <p class="card-text">Description for this section</p>
                                    <button class="btn btn-dark" onclick="location.href='industries.php#agriculture';" aria-label="Know more about Scalability">Know More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="card card-industries bg-light">
                        <div class="card-inner">
                            <div class="card-front">
                                <div class="card-body sec2">
                                    <h1 class="card-title">Competitive<br>Edge</h1>
                                </div>
                            </div>
                            <div class="card-back">
                                <div class="card-body sec2">
                                    <h3 class="card-title">Competitive Edge</h3>
                                    <p class="card-text">Description for this section</p>
                                    <button class="btn btn-dark" onclick="location.href='industries.php#hydrogen_fuel_cells';" aria-label="Know more about Competitive Edge">Know More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="card card-industries bg-light">
                        <div class="card-inner">
                            <div class="card-front">
                                <div class="card-body sec2">
                                    <h1 class="card-title">Reduce<br>Human<br>Error</h1>
                                </div>
                            </div>
                            <div class="card-back">
                                <div class="card-body sec2">
                                    <h3 class="card-title">Reduce Human Error</h3>
                                    <p class="card-text">Description for this section</p>
                                    <button class="btn btn-dark" onclick="location.href='industries.php#other_industries';" aria-label="Know more about Reduce Human Error">Know More</button>
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
            <p><i>Discover adaptable automation solutions with KONNEXIO's innovative adapto™ technology, offering customizable, modular Smart Cells for seamless integration and rapid adaptation to streamline your production and testing processes.</i></p>
            <hr>
        </section>
        <section class="container-fluid" style="padding: 0;">
            <div class="row no-gutters">
                <div class="image-container stretch">
                    <img src="Images/Image3a.gif" alt="Image3a">
                    <div class="transparent-overlay">
                        <div class="sec3a">
                            <h1>adapto™ Technology</h1>
                            <p>A unique and innovative assembly automation and testing machine system comprised of modular Smart Cells.</p>
                            <button class="btn btn-danger btn-lg" onclick="location.href='adapto.php';" aria-label="Learn more about Adapto Technology">Learn More</button>
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
                        <button class="btn btn-danger btn-lg" onclick="location.href='custom_machines.php';" aria-label="Learn more about Custom Machines">Learn More</button>
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
                    <a href="services.php#design" aria-label="Learn more about Design">
                        <div class="sec4">
                            <img src="Images/Image4a.jpg" class="img-fluid" alt="Image4a">
                            <div class="sec4-body">
                                <h1>Design</h1>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="services.php#build" aria-label="Learn more about Build">
                        <div class="sec4">
                            <img src="Images/Image4b.jpg" class="img-fluid" alt="Image4b">
                            <div class="sec4-body">
                                <h1>Build</h1>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="services.php#support" aria-label="Learn more about Support">
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
        <section class="container-fluid p-3 bg-light text-dark" id="testimonials">
        <?php
            // Check if there are any rows in the result set
            if ($result->num_rows > 0) {
            ?>    
        <hr>
   <div class="col-lg-10 offset-lg-1 pt-5 pb-5">
    <h2 class="text-center mb-4">What Our Clients Say</h2>
    <div id="testi-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
        <div class="carousel-inner" role="listbox" style="border-radius: 20px;">
            <?php
                $activeClass = "active";
                $indicatorIndex = 0;
                while ($row = $result->fetch_assoc()) {
            ?>
            <div class="carousel-item testi-carousel-item <?php echo $activeClass; ?> text-center p-4">
                <blockquote class="blockquote text-center">
                    <p class="mb-0"><i class="fa fa-quote-left"></i><?php echo $row["content"]; ?></p>
                    <br><?php echo $row["title"]; ?>
                </blockquote>
            </div>
            <?php
                $activeClass = ""; // Only the first item should be active
                $indicatorIndex++;
                }
            ?>
        </div>
        <a class="carousel-control-prev" href="#testi-carousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon testi-carousel-control-prev-icon" aria-hidden="true">
                <i class="fa fa-chevron-left"></i>
            </span>
            <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#testi-carousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon testi-carousel-control-next-icon" aria-hidden="true">
                <i class="fa fa-chevron-right"></i>
            </span>
            <span class="visually-hidden">Next</span>
        </a>
		
		<ol class="carousel-indicators testi-carousel-indicators">
            <?php
                for ($i = 0; $i < $indicatorIndex; $i++) {
            ?>
            <button type="button" data-bs-target="#testi-carousel" data-bs-slide-to="<?php echo $i; ?>" class="<?php echo ($i === 0) ? 'active' : ''; ?>"></button>
            <?php
                }
            ?>
        </ol>
        
    </div>
</div>
        <?php
            } else {
                ?>
                <hr>
                <div class="col-lg-10 offset-lg-1 pt-5 pb-5">
                    <h2 class="text-center mb-4">What Our Clients Say</h2>
                    <div id="testi-carousel" class="carousel slide" data-ride="carousel" data-interval="5000">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item testi-carousel-item active text-center p-4">
                                <blockquote class="blockquote text-center">
                                    <p class="mb-0"><i class="fa fa-quote-left"></i> No active Testimonials found.</p>
                                </blockquote>
                            </div>
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
                            <button type="button" data-target="#testi-carousel" data-slide-to="0" class="active"></button>
                        </ol>
                    </div>
                </div>
                <?php
            }
        ?>
        </section>
    </main>
    <br>
    <br>
    <!-- Footer Section -->
    <?php include 'footer.php'; ?>

</body>
</html>