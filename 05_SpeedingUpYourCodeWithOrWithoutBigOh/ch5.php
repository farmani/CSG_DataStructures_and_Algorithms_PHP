<?php

function printNumbersVersionOne($upperLimit) {
    $number = 2;
    while ($number <= $upperLimit) {
        # If number is even, print it:
        if (($number % 2) == 0) {
            echo $number;
        }
        $number++;
    }
}

function printNumbersVersionTwo($upperLimit) {
    $number = 2;
    while ($number <= $upperLimit) {
        echo $number;
        # Increase number by 2, which, by definition,
        # is the next even number:
        $number +=2;
    }
}
