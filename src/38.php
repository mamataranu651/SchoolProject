<?php
// Assuming this is part of an AJAX request handling function

function getRandomInteger(minValue, maxValue) {
    return rand(intval($minValue), intval($maxValue));
}

$randomInt = getRandomInteger(1, 10);
echo "Random number: $randomInt";
?>
