<?php
include 'db_connection.php';

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM news_events WHERE isactive = 1 AND content_type = 'News' order by posted_date DESC";
$result = $conn->query($sql);

$sql_1 = "SELECT * FROM news_events WHERE isactive = 1 order by posted_date DESC LIMIT 3";
$result_1 = $conn->query($sql_1);

$sql_2 = "SELECT * FROM news_events WHERE isactive = 1 AND content_type = 'Events' ORDER BY posted_date DESC";
$result_2 = $conn->query($sql_2);
?>

<!DOCTYPE html>
<html lang="en">

<head>    
    <title>News and Events | KONNEXIO</title>
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
    <link rel="stylesheet" href="css/ne_styles.css">

    <!-- JS Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
       
</head>

<body>
    <!-- Header -->
    <?php include 'header.php'; ?>

 <!-- Carousel Section -->
<div class="carousel-container">
  <div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></button>
    </div>

    <div class="carousel-inner">

      <?php
      if ($result_1->num_rows > 0) {
          $first = true;
          while ($row = $result_1->fetch_assoc()) {
      ?>
        <div class="carousel-item <?php echo $first ? 'active' : ''; ?>">
          <img src="./admin_page/upload/<?php echo $row['image']; ?>" alt="News Highlights" class="d-block w-100 carousel-img">
          <div class="carousel-caption main">
              <button class="btn btn-danger btn-lg carousel-btn" onclick="location.href='<?php echo $row['URL']?>';" aria-label="Read more">Read more</button>
            </div>
        </div>
      <?php
          $first = false;
          }
      } else {
          echo "<h2>No highlights found.</h2>";
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
        
 <div class="container mt-4" style="margin-top: 50px !important;">
          
 <!-- Search bar -->
<div class="d-flex justify-content-center mb-4">
    <div class="input-group" style="width: 50%;">
        <input type="text" class="form-control" id="searchInput" onkeyup="filterCards()" placeholder="Search by title or content...">
        <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="button">
                <i class="bi bi-search"></i>
            </button>
        </div>
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
                            <img src="./admin_page/upload/<?php echo $row['image']; ?>" alt="News and Events">
                            <div class="news-content">
                                <h3 class="news-title"><?php echo $row["title"]; ?></h3>
                                <p class="news-content-text"><?php echo $row["content"]; ?></p>
                                <p class="content-type"><?php echo strtoupper($row["posted_date"]); ?></p>
                                <button class="btn btn-danger btn-lg" onclick="location.href='<?php echo $row['URL']?>';" aria-label="Read more">Read more</button>
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
                    echo "<h2>No active news found.</h2>";
                }
                ?>
            </div>
        </div>

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
                            <div class="event-img" style="background-image: url(./admin_page/upload/<?php echo $row['image']; ?>)" alt="Industry Event">
                            </div>
                            <div class="event-content ms-4">
                                <h3><?php echo $row["title"]; ?></h3>
                                <p class="news-content-text"><?php echo $row["content"]; ?></p>
                                <div class="event-location"><i class="bi bi-geo-alt"></i> <?php echo $row['location']; ?></div>
                                <div class="event-date"><i class="bi bi-calendar"></i> <?php echo $row['posted_date']; ?></div>
                                <button class="btn btn-danger btn-lg" onclick="location.href='<?php echo $row['URL']?>';" aria-label="Read more">Check event</button>
                            </div>
                        </div>
                    </div>    
                    <?php
                }
            } else {
                echo "<h2>No active events found.</h2>";
            }
            ?>
     
      </div>
  </section>

  <!-- Funding Partners Section -->
  <section class="funding-partners-section">
    <div class="container my-5 text-center">
      <h2>Funding Partners for Automation</h2>
      <div class="row">
        <div class="col-md-4 text-center">
          <div class="fundingimg">
            <img src="Images/ne_canada_flag.PNG" alt="Partner OKU" class="img-fluid mb-3">
          </div>
          <h3>Canada Government</h3>
          <p>Find programs and services to help your business grow from the Government for entrepreneurs, businesses and not-for-profit organizations.</p>
          <button class="btn btn-danger btn-lg" onclick="location.href='https://innovation.ised-isde.canada.ca/innovation/s/?language=en_CA';" aria-label="Visit Canada Government Business Benefits Finder">More information</button>
        </div>

        <div class="col-md-4 text-center">
          <div class="fundingimg">
            <img src="Images/ne_sbcontario.png" alt="Sbc Ontario Logo.png" class="img-fluid mb-3">
          </div>
          <h3>Small Business Centre</h3>
          <p>Find support for entrepreneurs and business owners who are looking to launch a start-up or grow their small business.</p>
          <button class="btn btn-danger btn-lg" onclick="location.href='https://www.sbcontario.ca/';" aria-label="Visit Small Business Enterprise Centre">More information</button>
        </div>

        <div class="col-md-4 text-center">
          <div class="fundingimg">
            <img src="Images/ne_DMS_Logo.png" alt="Digital Main Street" class="img-fluid mb-3">
          </div>
          <h3>Digital Main Street</h3>
          <p>As part of a partnership between the Government of Canada and the Province of Ontario, delivers different programs to support businesses.</p>
          <button class="btn btn-danger btn-lg" onclick="location.href='https://digitalmainstreet.ca/ontario/';" aria-label="Visit Digital Main Street">More information</button>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer Data -->
  <?php include 'footer.php'; ?>

  <script src="js/ne_scripts.js" defer></script>
</body>

</html>
