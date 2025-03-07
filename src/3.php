<?php
function calculate_bmi($height, $weight) {
    $bmi = $weight / ($height * $height);
    if ($bmi < 18.5) {
        return "You are underweight.";
    } elseif ($bmi >= 18.5 && $bmi <= 24.9) {
        return "You have a normal weight.";
    } elseif ($bmi >= 25 && $bmi <= 29.9) {
        return "You are overweight.";
    } else {
        return "You are obese.";
    }
}
?>