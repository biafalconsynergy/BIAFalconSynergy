<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>

    <!-- References Top -->
    <?php include 'ReferencesTop.php'; ?>
    <!-- End of References -->



</head>
<body>



        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="Admin.php">
                <div class="sidebar-brand-icon rotate-n-0">
                    <img src="smallLogo2.png" class="img-fluid" alt="Company Logo" width="30" height="auto">                </div>
                <div class="sidebar-brand-text mx-3">Menu</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider">  
            
            <!-- Heading -->
            <div class="sidebar-heading">
                Session
            </div>

            <!-- Nav Item - Admin Panel -->
            <li class="nav-item">
                <a class="nav-link" href="Admin.php">
                    <i class="fas fa-fw fa-home"></i>
                <span>Home</span></a>
            </li>

            <!-- Nav Item - Log Out -->
            <li class="nav-item">
                <a class="nav-link" href="LoginPage.php">
                    <i class="fas fa-fw fa-sign-out-alt"></i>
                <span>Log Out</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">  
            
            <!-- Heading -->
            <div class="sidebar-heading">
                Admin
            </div>
            
            <!-- Nav Item - User Management -->
            <li class="nav-item">
                <a class="nav-link" href="UserManagement.php">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Users</span></a>
            </li>
			
			<!-- Conditional Signup Button -->
			<?php if ($_SESSION['roleid'] == 1): ?>
				<li class="nav-item">
					<a class="nav-link" href="UsersNew.php">
						<i class="fas fa-fw fa-user-plus"></i>
						<span>New User</span>
					</a>
				</li>
			<?php endif; ?>

            <!-- Nav Item - Support Tickets -->
            <li class="nav-item">
                <a class="nav-link" href="SupportTicket.php">
                    <i class="fas fa-fw fa-exclamation-triangle"></i>
                <span>Support Tickets</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Website Content
            </div>

            <!-- Nav Item - Case Studies -->
            <li class="nav-item">
                <a class="nav-link" href="CaseStudy.php">
                    <i class="fas fa-fw fa-star"></i>
                <span>Case Studies</span></a>
            </li>

            <!-- Nav Item - Careers -->
            <li class="nav-item">
                <a class="nav-link" href="Careers.php">
                    <i class="fas fa-fw fa-smile"></i>
                <span>Careers</span></a>
            </li>

            <!-- Nav Item - Testimonials -->
            <li class="nav-item">
                <a class="nav-link" href="Testimonials.php">
                    <i class="fas fa-fw fa-bullhorn"></i>
                <span>Testimonials</span></a>
            </li>

            <!-- Nav Item - News and events -->
            <li class="nav-item">
                <a class="nav-link" href="NewsEvents.php">
                    <i class="fas fa-fw fa-rss"></i>
                <span>News & Events</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
			

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
            
        </ul>

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

    <!-- References Bottom -->
    <?php include 'ReferencesBottom.php'; ?>
    <!-- End of References -->

</body>
</html>

