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
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/ab_styles.css">

    <!-- JS Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>


  <style>
    .carousel-item {
      position: relative;
      text-align: center;
      background-color: #f8f9fa;
      padding: 2rem;
    }
    .carousel-item img {
      border-radius: 50%;
      width: 100px;
      height: 100px;
      object-fit: cover;
      margin: 0 auto 1rem; 
      display: block; /* Ensure image is centered */
    }
    .carousel-caption {
      position: absolute;
      bottom: 10%;
      left: 50%;
      transform: translateX(-50%);
      background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent background for text */
      padding: 1rem;
      border-radius: 5px;
      color: #fff;
      width: 80%;
      text-align: center;
    }
    .carousel-control-prev, .carousel-control-next {
      filter: invert(1); /* edit1 Lightens the control icons for better visibility */
    }
  </style>




</head>

<body>
  <!-- Header Section -->
  <?php include 'header.php'; ?>

    <!-- Main -->
    <div class="page-sec-main">
        <h1>Our Story</h1>
        <br>
        <div class="page-sec-main-text">
            <h5>KONNEXIO Inc, based in London, Ontario Canada designs and builds machines for the automation of assembly and test processes for automotive, consumer goods, and medical device industries.adapto™, a unique and innovative assembly automation and testing machine system comprised of modular Smart Cells, was developed to offer customers the highest degree of flexibility in their assembly applications while providing unparalleled return on investment and simple, effortless options for future retooling requirements.</h5>
        </div>
    </div>

  

  <!-- Our People -->
  <section class="funding-partners-section" id="our_people">
    <div class="container my-5 text-center">
      <h2>Our People</h2>
      <div class="row">
        <div class="col-md-4 text-center">
          <div class="icon mb-3">
          <img src="/SHIV/Images/Image7a.jpg" alt="Partner Konnerth" class="img-fluid mb-3">
          </div>
          <h3>Founder</h3>
          <p>Our commitment to precision and innovation has earned us the trust of industry leaders.</p>
        </div>
        <div class="col-md-4 text-center">
          <div class="icon mb-3">
          <img src="/SHIV/Images/Image7b.jpg" alt="Partner OKU" class="img-fluid mb-3">
          </div>
          <h3>HR Manager</h3>
          <p>We believe in building a community that supports and grows together. </p>
        </div>
        <div class="col-md-4 text-center">
          <div class="icon mb-3">
          <img src="/SHIV/Images/image7c.jpg" alt="Partner Konnerth" class="img-fluid mb-3">
          </div>
          <h3>Mechanical Engineer</h3>
          <p>Our strategic decisions are guided by a commitment to excellence and ethical principles.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Associations -->
  <section class="associations-section" id="associations">
    <div class="container my-5 text-center">
      <h2 style="margin-bottom: 2rem;">Our Associations</h2>
      <div class="row">
        <div class="col-md-4 text-center">
          <div class="association-item d-flex align-items-center p-3 bg-light">
            <div class="association-logo">
              <img src="https://via.placeholder.com/100x100" alt="Association 1" class="img-fluid rounded-circle">
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
              <img src="https://via.placeholder.com/100x100" alt="Association 2" class="img-fluid rounded-circle">
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


  <!-- Testimonials Carousel Section -->
  <section class="my-5">
    <div class="container" id="testimonials">
      <h2 class="text-center mb-4">What Our Clients Say</h2>
      <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="/SHIV/Images/Image7a.jpg" alt="Client 1">
            <div class="carousel-caption d-none d-md-block">
              <p class="mb-0">“This is the best service we’ve ever used. Highly recommend it to anyone!”</p>
              <h5>Jane Doe</h5>
              <p>CEO, Example Corp</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="https://via.placeholder.com/100x100?text=Client+2" alt="Client 2">
            <div class="carousel-caption d-none d-md-block">
              <p class="mb-0">“Amazing experience. The team went above and beyond to deliver results.”</p>
              <h5>John Smith</h5>
              <p>Marketing Manager, Sample Ltd</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="https://via.placeholder.com/100x100?text=Client+3" alt="Client 3">
            <div class="carousel-caption d-none d-md-block">
              <p class="mb-0">“The quality of work is outstanding. We couldn’t be happier!”</p>
              <h5>Emily Johnson</h5>
              <p>Product Lead, Demo Inc</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </section>

<!-- Career Section -->
<section class="career-section py-5">
    <div class="container" id="careers.php">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="section-title">Careers</h1>
                <p class="section-subtitle">Join our team and be a part of our success story</p>
            </div>
        </div>
        <div class="row">
            <!-- Job Listing -->
            <div class="col-md-6">
                <div class="card job-listing">
                    <div class="card-body">
                        <h2 class="card-title job-title">Data Analyst</h2>
                        <p class="card-text job-location">London, ON</p>
                        <p class="card-text job-description">We are looking for a Data Analyst to join our team. The ideal candidate will have experience in data analysis, SQL, and Python.</p>
                        <a href="#" class="btn btn-primary apply-button">Apply Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card job-listing">
                    <div class="card-body">
                        <h2 class="card-title job-title">Software Developer</h2>
                        <p class="card-text job-location">Toronto, ON</p>
                        <p class="card-text job-description">We are seeking a Software Developer to work on our exciting projects. Experience in Java and web development frameworks is a plus.</p>
                        <a href="#" class="btn btn-primary apply-button">Apply Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>







  <!-- Footer Section -->


  <?php include 'footer.php'; ?>


</body>

</html>
