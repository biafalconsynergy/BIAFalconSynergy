<?php
    include 'db_connection.php';

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM careers WHERE isactive = 1";
    $result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>KONNEXIO | Careers</title>
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
        /* Added margin to separate sections */
    }

    .card-body {
        background: linear-gradient(to right, #f0f0f0, #e0e0e0); /* Light gradient grey */
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        overflow-y: auto; /* Enable vertical scrolling if content exceeds height */
    }

    .table-responsive {
        /* Ensure table is responsive on smaller screens */
        overflow-x: auto;
    }

    table {
        width: 100%; /* Make table fill entire card-body width */
        table-layout: fixed; /* Fixed table layout to prevent columns from resizing based on content */
    }

    table th,
    table td {
        text-align: left; /* Align text to the left within table cells */
        word-wrap: break-word; /* Break long words to prevent content from overflowing */
        vertical-align: top; /* Align content at the top of cells */
        padding: 10px; /* Add padding to cells for better readability */
    }
</style>

	
    <script>
        // Function to handle filtering based on input value
        function filterTable() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("searchInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("jobPostingsTable");
            tr = table.getElementsByTagName("tr");

            // Loop through all table rows, and hide those who don't match the search query
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[0]; // Column index 0 corresponds to the Title column
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
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
            <h1 class="text-center text-black font-weight-bold">Job Postings</h1>
            <p><i>At Konnexio Inc. we're committed to driving innovation and creating meaningful change. Join us in
                    shaping a better future and experience firsthand the impact of your work</i></p>
            <hr>
        </section>

         <div class="container mt-4">
            <div class="card">
                    <!-- Search bar -->
					<div class="input-group mb-3">
						<input type="text" class="form-control" id="searchInput" onkeyup="filterTable()" placeholder="Search by title...">
						<div class="input-group-append">
							<span class="input-group-text"><i class="bi bi-search"></i></span>
						</div>
					</div>
                    <div class="table-responsive">
                        <table id="jobPostingsTable" class="table table-striped">
							<thead>
								<tr>
									<th>Title</th>
									<th>Content</th>
									<th class="text-right pr-4">Posted Date</th> 
								</tr>
							</thead>
							<tbody>
								<?php
								// Check if there are any rows in the result set
								if ($result->num_rows > 0) {
									// Output data of each row
									while ($row = $result->fetch_assoc()) {
										?>
										<tr>
											<td><?php echo $row["title"]; ?></td>
											<td><?php echo $row["content"]; ?></td>
											<td class="text-right pr-4"><?php echo $row["posted_date"]; ?></td> 
										</tr>
										<?php
									}
								} else {
									echo "<tr><td colspan='3' class='text-center'>We currently have no job openings</td></tr>";
								}
								?>
							</tbody>
                        </table>
                    </div>
                </div>
        </div>
		

		

        <!-- Footer Data -->
        <?php include 'footer.php'; ?>

    </main>

</body>

</html>
