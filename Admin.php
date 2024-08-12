<?php 
//starts session if it is not active
if (session_status() === PHP_SESSION_NONE) {
         session_start();
}
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="icon" href="Logo/konnexio-icon.ico" type="image/x-icon">
    <!-- References Top -->
    <?php include 'ReferencesTop.php'; ?>
    <!-- End of References --> 
</head>
<body>

<?php
//session_start();
if(!isset($_SESSION['first_name'])) {
    header('Location: Login.php');
	
    exit();
	}
$role = $_SESSION['roleid'];	

?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include 'sidebar.php'; ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    
                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>
                    <!-- Sidebar Toggle (Topbar) End -->

                    <h2>Welcome to the Admin Panel, <?php echo $_SESSION['first_name']; ?></h2>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <?php if ($_SESSION['roleid'] == 1): ?>
			
                        <!-- Page Heading -->
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-gray-800">Admin</h1>
                        </div>

                        <!-- Content Row -->
                        <div class="row">

                            <!-- Users -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-m font-weight-bold text-primary text-uppercase mb-1">
                                                    Users</div>
                                                <a class="h7 mb-0 font-weight-bold text-gray-800" href="UserManagement.php">View</a><br>
                                                <a class="h7 mb-0 font-weight-bold text-gray-800" href="signup.php">Create</a>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-user fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    </div>

                            <!-- View Support Tickets -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-warning shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-m font-weight-bold text-warning text-uppercase mb-1">Support Tickets</div>
                                                <a class="h7 mb-0 font-weight-bold text-gray-800" href="SupportTicket.php">View</a>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-exclamation-triangle fa-2x text-gray-300" ></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    </div>
                        </div>
                    
                    <?php endif; ?>

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Content Management</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Case Studies -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-m font-weight-bold text-primary text-uppercase mb-1">Case Studies</div>
                                            <a class="h7 mb-0 font-weight-bold text-gray-800" href="CaseStudy.php">View</a><br>
                                            <a class="h7 mb-0 font-weight-bold text-gray-800" href="CaseStudyNew.php">Create</a>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-star fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>

                        <!-- Careers -->
                        <div class="col-xl-3 col-md-6 mb-4" >
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-m font-weight-bold text-warning text-uppercase mb-1">Careers</div>
                                            <a class="h7 mb-0 font-weight-bold text-gray-800" href="Careers.php">View</a><br>
                                            <a class="h7 mb-0 font-weight-bold text-gray-800" href="CareersNew.php">Create</a>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-smile fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonials -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-m font-weight-bold text-success text-uppercase mb-1">Testimonials</div>
                                            <a class="h7 mb-0 font-weight-bold text-gray-800" href="Testimonials.php">View</a><br>
                                            <a class="h7 mb-0 font-weight-bold text-gray-800" href="TestimonialNew.php">Create</a>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-bullhorn fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- News and Events -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-m font-weight-bold text-info text-uppercase mb-1">News & Events
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <a class="h7 mb-0 mr-3 font-weight-bold text-gray-800" href="NewsEvents.php">View</a><br>
                                                    <a class="h7 mb-0 mr-3 font-weight-bold text-gray-800" href="NewsEventsNew.php">Create</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-rss fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer">
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

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <?php include 'ReferencesBottom.php' ?>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
