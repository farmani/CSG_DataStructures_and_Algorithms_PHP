<?php

function printNumbersVersionOne() {
    $number = 2;
    while ($number <= 100) {
        # If number is even, print it:
        if (($number % 2) == 0) {
            echo $number;
        }

        $number++;
    }
}

function printNumbersVersionTwo() {
    $number = 2;
    while ($number <= 100) {
        echo $number;

        # Increase number by 2, which, by definition
        # is the next even number.
        $number += 2;
    }
}
