<?php

function getRandomNumber($max) {
    return mt_rand(1, $max);
}

$randomNumber = getRandomNumber(50);

?>
