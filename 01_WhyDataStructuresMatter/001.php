<?php

function print_numbers_version_one() {
    $number = 2;
    while ($number <= 100) {
        # If number is even, print it:
        if (($number % 2) == 0) {
            echo $number;
        }

        $number++;
    }
}

function print_numbers_version_two() {
    $number = 2;
    while ($number <= 100) {
        echo $number;

        # Increase number by 2, which, by definition
        # is the next even number.
        $number += 2;
    }
}
