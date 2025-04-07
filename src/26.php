<?php
// Assuming you have a MySQL database connection and table name "students"
$servername = "your_servername";
$username = "your_username";
$password = "your_password";
$dbname = "your_db_name";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Example query
$sql = "SELECT * FROM students WHERE student_id = 123";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "Number of rows matched: " . $result->num_rows;
} else {
  echo "No rows matched.";
}

$conn->close();
?>
