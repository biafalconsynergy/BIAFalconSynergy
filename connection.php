<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = "fanshawe-biafs-dev-server.mysql.database.azure.com";
$username = "fbwdktfjwf";
$password = 'ERY0yr9jamVeev$M';
$dbname = "konnexio";

// Path to the CA certificate file
$ca_cert_path = "/home/site/wwwroot/cert/DigiCertGlobalRootCA.crt.pem";

// Verify the CA certificate file path
if (!file_exists($ca_cert_path)) {
    die("CA certificate file not found.");
}

// Create connection with SSL
$conn = mysqli_init();
mysqli_ssl_set($conn, NULL, NULL, $ca_cert_path, NULL, NULL);

if (!mysqli_real_connect($conn, $servername, $username, $password, $dbname, 3306, NULL, MYSQLI_CLIENT_SSL)) {
    die("Connection failed.");
}
?>