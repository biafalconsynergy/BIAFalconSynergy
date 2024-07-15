<?php
include 'db_connection.php';

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM news_events WHERE isactive = 1 order by posted_date desc";
$result = $conn->query($sql);
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
    <link rel="stylesheet" href="styles.css">

    <!-- JS Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer></script>

    <style>
        #main-content {
            margin-top: 20px;
        }

        .section-separator {
            margin-top: 40px;
        }

        .news-card {
            margin-bottom: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            overflow: hidden;
            background-color: #fff;
        }

        .news-card img {
            width: 100%;
            height: 150px;
            object-fit: cover;
        }

        .news-card .news-content {
            padding: 15px;
        }

        .news-card .news-title {
            font-weight: bold;
            text-align: center;
        }

        .news-card .news-content-text {
            text-align: center;
        }

        .news-card .content-type {
            color: green;
            text-transform: uppercase;
            font-weight: bold;
            text-align: center;
        }

        .news-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
        }

        .news-card {
            flex: 1 1 calc(25% - 15px);
        }

        @media (max-width: 1200px) {
            .news-card {
                flex: 1 1 calc(33.33% - 15px);
            }
        }

        @media (max-width: 992px) {
            .news-card {
                flex: 1 1 calc(50% - 15px);
            }
        }

        @media (max-width: 768px) {
            .news-card {
                flex: 1 1 100%;
            }
        }

        .placeholder-card {
            visibility: hidden;
        }
    </style>

    <script>
        // Function to handle filtering based on input value
        function filterCards() {
            var input, filter, cards, card, i, txtValueTitle, txtValueContent;
            input = document.getElementById("searchInput");
            filter = input.value.toUpperCase();
            cards = document.getElementsByClassName("news-card");

            // Loop through all cards
            for (i = 0; i < cards.length; i++) {
                card = cards[i];
                txtValueTitle = card.getElementsByClassName("news-title")[0].textContent || card.getElementsByClassName("news-title")[0].innerText;
                txtValueContent = card.getElementsByClassName("news-content-text")[0].textContent || card.getElementsByClassName("news-content-text")[0].innerText;
                if (txtValueTitle.toUpperCase().indexOf(filter) > -1 || txtValueContent.toUpperCase().indexOf(filter) > -1) {
                    card.style.display = "";
                } else {
                    card.style.display = "none";
                }
            }
        }
    </script>
</head>

<body>
    <!-- Header Data -->
    <?php include 'header.php'; ?>

    <main id="main-content">
        <!-- Third Section (Image Containers) -->
        <section class="container-fluid sec3 p-5 bg-light text-dark">
            <hr>
            <h1 class="text-center text-black font-weight-bold">News & Events</h1>
            <p><i>Dive deep into the heart of Konnexio Inc. with our exclusive blog posts. From inception to the forefront of innovation, explore the stories, achievements, and aspirations that drive our passion</i></p>
            <hr>
        </section>

        <div class="container mt-4">
            <!-- Search bar -->
            <div class="input-group mb3">
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
                            <img src="upload/<?php echo $row['image']; ?>" alt="Case Study Image">
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

        <!-- Footer Data -->
        <?php include 'footer.php'; ?>

    </main>
</body>

</html>
