<?php
$host     = "localhost"; // Database Host
$user     = "Database usernae here"; // Database Username
$password = "Example password for database"; // Database's user Password
$database = "u313696685_cac"; // Database Name
//contact me here if you face difficulties in editint this file : https://www.linkedin.com/in/david-funyi-t-56360389/
$mysqli = new mysqli($host, $user, $password, $database);

// Checking Connection
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}

$mysqli->set_charset("utf8mb4");

// Settings
include "config_settings.php";
?>

