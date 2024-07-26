<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Testimonials Carousel</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
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
      margin: 0 auto 1rem; /* Center image and space below it */
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
      filter: invert(1); /* Lightens the control icons for better visibility */
    }
  </style>
</head>
<body>

  <!-- Testimonials Carousel Section -->
  <section class="my-5">
    <div class="container">
      <h2 class="text-center mb-4">What Our Clients Say</h2>
      <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://via.placeholder.com/100x100?text=Client+1" alt="Client 1">
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

  <!-- Bootstrap JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
