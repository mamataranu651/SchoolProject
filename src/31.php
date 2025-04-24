<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "schoolproject";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$students = [];
$sql = "SELECT * FROM students";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $student = [
      'id' => $row['id'],
      'name' => $row['name'],
      'age' => $row['age']
    ];
    $students[] = $student;
  }
} else {
  echo "0 results";
}

$conn->close();
?>
