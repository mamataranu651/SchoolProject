<?php
$students = array();
while ($row = $result->fetch_assoc()) {
  $student = new Student($row['name'], $row['age'], $row['grade']);
  array_push($students, $student);
}
?>