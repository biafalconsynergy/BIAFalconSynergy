<?php
	include 'db_connection.php';

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$sql = "SELECT * FROM careers WHERE isactive = 1";
	$sql2 = "SELECT * FROM testimonial WHERE isactive = 1";	
	$result = $conn->query($sql);
	$result2 = $conn->query($sql2);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>About | KONNEXIO</title>
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
    <link rel="stylesheet" href="css/css/About.css">
	<link rel="stylesheet" href="css/styles.css">
	
	
    <!-- JS Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
 
	
</head>


<body>
	<!--Header Data-->
    <?php include 'header.php'; ?>

    <div class="page-sec-main">
        <h1>About</h1>
        <br>
        <div class="page-sec-main-text">
	        <h5>KONNEXIO Inc., based in London, Ontario, designs and builds cutting-edge automation machines for diverse industries, offering unparalleled flexibility and ROI with our innovative adapto™ system</h5>
		</div>
    </div>	
        
		  <!-- Our Story -->
		  <section class="container-fluid p-3 bg-light text-dark" id="company_story">
		  <hr>
			<div class="row justify-content-center text-center">
					<div class="col-lg-8 col-12">
			  <h2 class="mb-4 mt-5" data-aos="fade-up">Our Story</h2>
			  <p class="text-center" data-aos="fade-up" data-aos-delay="300">KONNEXIO Inc, based in London, Ontario Canada designs and builds machines for the automation of assembly and test processes for automotive, consumer goods, and medical device industries. adapto™, a unique and innovative assembly automation and testing machine system comprised of modular Smart Cells, was developed to offer customers the highest degree of flexibility in their assembly applications while providing unparalleled return on investment and simple, effortless options for future retooling requirements. Results-driven: KONNEXIO’s commitment to excellence provides customers with the confidence that their project’s priorities will be addressed with the greatest of care and respect. Right-sized: We’re small enough to be nimble, flexible and accessible from the top down, plus have the resources, experience and judgement to have been trusted for engagements from a top-tier clientele around the globe for 30 years and counting..</p>
					</div>
			</div>
		</section>  
		
		<!-- Our People -->
		<section class="funding-partners-section" id="our_people">
    <div class="container my-5 text-center">
        <h2>Our People</h2>
        <div class="row">
            <div class="col-md-4 text-center">
                <div class="person">
                    <div class="icon mb-3">
                        <img src="Images/Image7a.jpg" alt="Founder" class="img-fluid mb-3">
                    </div>
                    <h3>Founder</h3>
                    <p>Our commitment to precision and innovation has earned us the trust of industry leaders.</p>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="person">
                    <div class="icon mb-3">
                        <img src="Images/Image7b.jpg" alt="Operations Manager" class="img-fluid mb-3">
                    </div>
                    <h3>Operations Manager</h3>
                    <p>We believe in building a community that supports and grows together.</p>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="person">
                    <div class="icon mb-3">
                        <img src="Images/image7c.jpg" alt="Mechanical Engineer" class="img-fluid mb-3">
                    </div>
                    <h3>Mechanical Engineer</h3>
                    <p>Our strategic decisions are guided by a commitment to excellence and ethical principles.</p>
                </div>
            </div>
        </div>
    </div>
</section>

		<!-- Associations -->
		  <section class="container-fluid p-3 bg-light text-dark" id="associations">
		  <hr>
			<div class="container my-5 text-center" >
			  <h2 style="margin-bottom: 2rem;">Our Associations</h2>
			  <div class="row">
				<div class="col-md-4 text-center">
				  <div class="association-item d-flex align-items-center p-3 bg-light">
					<div class="association-logo">
					  <img src="Images/Image5a.jpg" alt="Association 1" class="img-fluid rounded-circle">
					</div>
					<div class="association-content ms-3">
					  <h4>Association One</h4>
					  <p>We collaborate with Association One to enhance automation solutions and drive innovation in the industry.</p>
					</div>
				  </div>
				</div>
				<div class="col-md-4 mb-4">
				  <div class="association-item d-flex align-items-center p-3 bg-light">
					<div class="association-logo">
					  <img src="Images/Image5b.jpg" alt="Association 2" class="img-fluid rounded-circle">
					</div>
					<div class="association-content ms-3">
					  <h4>Association Two</h4>
					  <p>Association Two partners with us to bring cutting-edge technology to the market and enhance our capabilities.</p>
					</div>
				  </div>
				</div>
				<div class="col-md-4 mb-4">
				  <div class="association-item d-flex align-items-center p-3 bg-light">
					<div class="association-logo">
					  <img src="https://via.placeholder.com/100x100" alt="Association 3" class="img-fluid rounded-circle">
					</div>
					<div class="association-content ms-3">
					  <h4>Association Three</h4>
					  <p>Our partnership with Association Three supports mutual growth and innovation in the automation sector.</p>
					</div>
				  </div>
				</div>
			  </div>
			</div>
		  </section>
		
        <!-- Testimonials -->
			<section class="container-fluid p-3 bg-light text-dark" id="testimonials">
				<?php
				// Check if there are any rows in the result set
				if ($result2->num_rows > 0) {
					?>
					<hr>
					<div class="col-lg-10 offset-lg-1 pt-5 pb-5" >
					<h2 class="text-center mb-4">What Our Clients Say</h2>
						<div id="testi-carousel" class="carousel slide" data-ride="carousel" data-interval="5000">
							<div class="carousel-inner" role="listbox">
								<?php
								$activeClass = "active";
								$indicatorIndex = 0;
								while ($row = $result2->fetch_assoc()) {
									?>
									<div class="carousel-item testi-carousel-item <?php echo $activeClass; ?> text-center p-4">
										<blockquote class="blockquote text-center">
										<img src="<?php echo $row["image_url"]; ?>" alt="Client Image" class="img-fluid rounded-circle mb-3" style="width: 100px; height: 100px;">
											<p class="mb-0"><i class="fa fa-quote-left"></i><?php echo $row["content"]; ?></p>
											<br><?php echo $row["title"]; ?>
										</blockquote>
									</div>
									<?php
									$activeClass = ""; // the first item should be active
									$indicatorIndex++;
								}
								?>
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
								<?php
								for ($i = 0; $i < $indicatorIndex; $i++) {
									?>
									<li data-target="#testi-carousel" data-slide-to="<?php echo $i; ?>" class="<?php echo ($i === 0) ? 'active' : ''; ?>"></li>
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
								<li data-target="#testi-carousel" data-slide-to="0" class="active"></li>
							</ol>
						</div>
					</div>
					<?php
				}
				?>
			</section>

	
        <!-- Careers Section -->
            <section id="careers" class="container-fluid p-3 bg-light text-dark">
                <div class="text-center mb-4">
                    <h1 class="section-title">Join Our Team</h1>
                    <p class="section-subtitle">Explore exciting career opportunities and be a part of our success story</p>
					<p class="section-subtitle">Please feel free to send your resume to <a href="mailto:careers@konnexio.ca">careers@konnexio.ca</a></p>
                </div>
				<div class="row justify-content-center">
					<div class="col-lg-8">
						<div class="accordion" id="accordionExample">
                    <?php 
                    // Check if there are any rows in the result set
                    if ($result->num_rows > 0) {
                        $counter = 0;
                        while ($row = $result->fetch_assoc()) {
                            $counter++;
                            echo '<div class="accordion-item">
                            <h2 class="accordion-header" id="heading'.$counter.'">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse'.$counter.'" aria-expanded="false" aria-controls="collapse'.$counter.'">'
                            .htmlspecialchars($row["title"]).'
                            </button>
                            </h2>
                            <div id="collapse'.$counter.'" class="accordion-collapse collapse" aria-labelledby="heading'.$counter.'" data-bs-parent="#accordionExample">
                            <div class="accordion-body">'
                            .htmlspecialchars($row["content"]).'
                            </div>
                            </div>
                            </div>';
                        }
                    } else {
                        echo '<p>No records found.</p>';
                    }
                    ?>
                </div>
			</div>
		</div>	
            </section>

			<!-- Careers Section End -->
    </main>

    <!--footer data -->
    <?php include 'footer.php'; ?>  

</body>

</html>