<?php
// Define some constants
$server = "localhost";
$username = "root";
$password = "";

// Initialize database connection
$connection = mysqli_init();
if ($connection) {
    // Connect to the database
    $db = mysqli_connect($server, $username, $password);
    if ($db) {
        echo "Connected successfully to the database.";
    } else {
        echo "Failed to connect to the database.";
    }
} else {
    echo "Failed to initialize database connection.";
}
?>
