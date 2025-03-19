<?php
// Randomly generates a grade between 0 and 100
$grade = rand(0, 100);

// Checks if the grade is above or below 75
if ($grade > 75) {
    echo "You passed!";
} else {
    echo "Try again next time.";
}
?>