<?php

// Connect to the database
$db = mysqli_connect('localhost', 'root', '', 'schoolproject');

// Check connection
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get data from form
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Insert data into database
$sql = "INSERT INTO messages (name, email, message) VALUES ('$name', '$email', '$message')";
mysqli_query($db, $sql);

// Close connection to the database
mysqli_close($db);

?>