<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>

    <!-- References Top -->
    <?php include 'ReferencesTop.php'; ?>
    <!-- End of References -->
</head>
<body>
    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
    <div class="container-fluid">   
    <!-- Sidebar Toggle (Topbar) -->
    <form class="form-inline">
        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
        </button>
    </form>
    <!-- Sidebar Toggle (Topbar) End -->

    <h3 class="m-0 font-weight-bold text-dark"><?php echo $tableName; ?></h3>
    <div class="top-right justify-content-right">
        <span>Logged in as: <?php echo $_SESSION['first_name']; ?></span>
    </div>
    </nav>
    <!-- End of Topbar -->
</body>
</html>

