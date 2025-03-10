<?php

// Connect to the database
$conn = mysqli_connect("localhost", "root", "", "schoolproject");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Query to get all students
$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql);

// Loop through the result and display in HTML
echo "<table>";
while ($row = mysqli_fetch_array($result)) {
    echo "<tr><td>" . $row['name'] . "</td><td>" . $row['age'] . "</td></tr>";
}
echo "</table>";

// Close connection
mysqli_close($conn);
?>