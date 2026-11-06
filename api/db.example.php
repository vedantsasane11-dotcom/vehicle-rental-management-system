
<?php

$host = "127.0.0.1";
$username = "rental_app";
$password = "MyNewPassword123!";
$database = "vehicle_rental";
$port = 3306;

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$conn = new mysqli(
    $host,
    $username,
    $password,
    $database,
    $port
);

$conn->set_charset("utf8mb4");

?>
