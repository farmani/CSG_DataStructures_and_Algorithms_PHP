<?php

function averageOfEvenNumbers(array $list)
{
    # The mean average of even numbers will be defined as the sum of
    # the even numbers divided by the count of even numbers, so we
    # keep track of both the sum and the count:
    $sum = 0.0;
    $countOfEvenNumbers = 0;
    # We iterate through each number in the array, and if we encounter
    # an even number, we modify the sum and the count:
    foreach ($list as $key => $number) {
        if ($number % 2 === 0) {
            $sum += $number;
            $countOfEvenNumbers++;
        }
    }
    # We return the mean average:
    return $sum / $countOfEvenNumbers;
}
