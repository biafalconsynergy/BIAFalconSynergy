<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Our Story</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <!-- Custom CSS -->
  <style>
    /* Custom styles for the page */
    .news-events-section {
      background-color: #f8f9fa; /* Light gray background */
      padding: 60px 0;
      text-align: center;
    }

    .news-events-section h1 {
      color: #343a40; /* Dark text color */
      font-size: 2.5rem;
    }

    .news-events-para {
      color: #6c757d; /* Medium dark text color */
      font-size: 1.2rem;
      margin-bottom: 0;
    }
  </style>
</head>
<body>

<section class="news-events-section">
  <div class="container my-5">
    <h1>Our Story</h1>
    <p class="news-events-para">Discover our journey and achievements.</p>
  </div>
</section>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <!-- Slide 1 -->
    <div class="carousel-item active" style="background-image: url('https://via.placeholder.com/1920x1080?text=Slide+1');">
      <div class="carousel-caption d-none d-md-block">
        <h3 class="card-title">Welcome to Our Company</h3>
        <p class="card-text">Explore our services and solutions designed to meet your needs.</p>
        <a href="#" class="btn btn-primary">Learn More</a>
      </div>
    </div>

    <!-- Slide 2 -->
    <div class="carousel-item" style="background-image: url('https://via.placeholder.com/1920x1080?text=Slide+2');">
      <div class="carousel-caption d-none d-md-block">
        <h3 class="card-title">Latest Innovations</h3>
        <p class="card-text">Discover the cutting-edge technologies driving our industry forward.</p>
        <a href="#" class="btn btn-primary">Explore Now</a>
      </div>
    </div>

    <!-- Slide 3 -->
    <div class="carousel-item" style="background-image: url('https://via.placeholder.com/1920x1080?text=Slide+3');">
      <div class="carousel-caption d-none d-md-block">
        <h3 class="card-title">Join Our Community</h3>
        <p class="card-text">Connect with us and be part of our growing network.</p>
        <a href="#" class="btn btn-primary">Join Us</a>
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js" integrity="sha384-JzY7IZDkF1LkDQyd/kf5t5ElqakyoAveY+YbVPMvAGATtNivjA/0xYR3f1yo2Dhc" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+Wy4/8/rx2PvJcXtc+0Jw1+8Uew+OrCXaRkfj" crossorigin="anonymous"></script>

</body>
</html>
