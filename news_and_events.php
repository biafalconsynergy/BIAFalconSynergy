<?php
include 'db_connection.php';

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM news_events WHERE isactive = 1 order by posted_date desc";
$result = $conn->query($sql);

$sql_1 = "SELECT * FROM news_events WHERE isactive = 1 order by posted_date desc LIMIT 3";
$result_1 = $conn->query($sql_1);

$sql_2 = "SELECT * FROM news_events WHERE isactive = 1 AND content_type = 'Event' ORDER BY posted_date DESC";
$result_2 = $conn->query($sql_2);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>KONNEXIO | News & Events</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="Logo/konnexio-icon.ico" type="image/x-icon">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/ne_styles.css">
    <!-- JS Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer></script>
    
       
</head>

<body>
    <!-- Header -->
    <?php include 'header.php'; ?>

     <!-- News and Events Section -->
  <section class="news-events-section">
    <div class="container my-5">
      <h1>News and Events</h1>
      <p class="news-events-para"><i>Stay updated with the latest news and events happening in our industry.</i></p>
    </div>
  </section>

  

 <!-- Carousel Section -->
<div class="carousel-container">
  <div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></button>
    </div>

    <div class="carousel-inner">
      <h1 class="carousel-heading">News Highlights</h1>

      <?php
      if ($result_1->num_rows > 0) {
          $first = true;
          while ($row = $result_1->fetch_assoc()) {
      ?>
        <div class="carousel-item <?php echo $first ? 'active' : ''; ?>">
          <img src="Upload/<?php echo $row['image']; ?>" alt="News Highlights">
          <div class="carousel-caption d-none d-md-block">
              <h3 ><?php echo $row["title"]; ?></h3>
              <p class="carousel-text"><?php echo $row["content"]; ?></p>
              <a href="#" class="btn btn-primary">Read More</a> 
            </div>
        </div>
      <?php
          $first = false;
          }
      } else {
          echo "<p>No active news found.</p>";
      }
      ?>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
      data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
      data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>
</div>

 <!-- Third Section (Image Containers) -->
        
 <div class="container mt-4">
            <!-- Search bar -->
            <div class="input-group mb-4">
                <input type="text" class="form-control" id="searchInput" onkeyup="filterCards()" placeholder="Search by title or content...">
                <div class="input-group-append">
                    <span class="input-group-text"><i class="bi bi-search"></i></span>
                </div>
            </div>

            <div id="newsContainer" class="news-grid">
                <?php
                // Check if there are any rows in the result set
                if ($result->num_rows > 0) {
                    // Output data of each row
                    while ($row = $result->fetch_assoc()) {
                        ?>
                        <div class="news-card">
                            <img src="Upload/<?php echo $row['image']; ?>" alt="News and Events">
                            <div class="news-content">
                                <h3 class="news-title"><?php echo $row["title"]; ?></h3>
                                <p class="news-content-text"><?php echo $row["content"]; ?></p>
                                <p class="content-type"><?php echo strtoupper($row["content_type"]); ?></p>
                            </div>
                        </div>
                        <?php
                    }
                    // Ensure the number of cards in a row is always 4
                    $remainingCards = $result->num_rows % 4;
                    if ($remainingCards > 0) {
                        for ($i = $remainingCards; $i < 4; $i++) {
                            echo '<div class="news-card placeholder-card"></div>';
                        }
                    }
                } else {
                    echo "<p>No active case studies found.</p>";
                }
                ?>
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
  <section class="upcoming-events-section bg-light">
    <div class="container my-5">
      <h2 class="events-heading">Upcoming Industry Events</h2>
      
        <?php
            if ($result_2->num_rows > 0) {
                while ($row = $result_2->fetch_assoc()) {
                    ?>
                    <div class="event-container mb-4">
                        <div class="event-item d-flex align-items-center my-3 p-3">
                            <div class="event-img">
                                <img src="Upload/<?php echo $row['image']; ?>" alt="Industry Event" class="rounded-circle img-thumbnail">
                            </div>
                            <div class="event-content ms-4">
                                <h3><?php echo $row["title"]; ?></h3>
                                <div class="event-date"><i class="bi bi-calendar"></i> <?php echo $row['posted_date']; ?></div>
                            </div>
                        </div>
                    </div>    
                    <?php
                }
            } else {
                echo "<p>No active events found.</p>";
            }
            ?>
     
      </div>
  </section>
  
        <!-- Footer Data -->
        <?php include 'footer.php'; ?>

    </main>
    <script src="ne_scripts.js" defer></script>
</body>

</html>
