<?php
// Start output buffering as the first thing in the script
ob_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// DB Connection
include 'Connection.php';

// Variables particular to this page
$Date = date('Y-m-d H:i:s');
$tableTitles = ['Case id', 'User id', 'Title', 'Content', 'Date Posted', 'Image', 'Is active'];
$tableColumnNames = ['caseid', 'userid', 'title', 'content', 'posted_date', 'image', 'isactive'];
$tableDefaultValues = ['', 'userid', '', '', $Date, '', '0'];
$tableName = 'Case Studies';
$tableDbName = 'case_study';
$id = '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>CaseStudies</title>

    <!-- References Top -->
    <?php include 'ReferencesTop.php'; ?>
    <!-- End of References -->

</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">

    <!-- Sidebar -->
    <?php include 'Sidebar.php'; ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- DataTables -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <?php
                        echo '<h6 class="m-0 font-weight-bold text-primary">' . $tableName . '</h6>';
                        ?>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <?php 
                            // Form
                            for ($i = 0; $i < count($tableColumnNames); $i++) {
                                echo '<div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">' . $tableTitles[$i] . '</label>
                                <input type="text" class="form-control" id="formGroupExampleInput' . $i . '" value ="' . $tableDefaultValues[$i] . '">
                                </div>';
                            }
                            echo '
                            <a class="btn btn-primary" href="CaseStudy.php">Save</a><br><br>
                            <!-- End of Form -->';

                            // Close the connection
                            //$conn->close();   
                            ?>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer" background-color:#F0F1F5>
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Konnexio 2024</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <?php include 'ReferencesBottom.php'; ?>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>
</html>
