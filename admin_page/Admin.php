<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <!-- References Top -->
    <?php include 'ReferencesTop.php'; ?>
    <!-- End of References --> 
</head>
<body>

<?php
session_start();
if(!isset($_SESSION['first_name'])) {
    header('Location: Login.php');

    exit();
}
?>


<div>
    <h1>Welcome to the Admin Panel, <?php echo $_SESSION['first_name']; ?></h1>
</div>

    <!-- Sidebar -->
    <?php include 'sidebar.php'; ?>
    <!-- End of Sidebar -->

</body>