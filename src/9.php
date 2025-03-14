<?php
// Get the list of students and their grades from the database
$students = array(
  array('name' => 'John Doe', 'grade' => 85),
  array('name' => 'Jane Doe', 'grade' => 92),
  array('name' => 'Bob Smith', 'grade' => 75),
);

// Determine the average grade for all students
$totalGrade = 0;
foreach ($students as $student) {
  $totalGrade += $student['grade'];
}
$averageGrade = $totalGrade / count($students);

// Print out the list of students and their grades, along with the average grade
echo '<table>';
foreach ($students as $student) {
  echo '<tr><td>' . $student['name'] . '</td><td>' . $student['grade'] . '</td></tr>';
}
echo '<tr><td>Average: </td><td>' . $averageGrade . '</td></tr>';
echo '</table>';
?>