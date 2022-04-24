<?php

function bubbleSort(array $list): array
{
    $unsorted_until_index = count($list) - 1;
    $sorted = false;

    while (!$sorted) {
        $sorted = true;
        for ($i=0; $i < $unsorted_until_index; $i++) {
            if ($list[$i] > $list[$i+1]) {
                [$list[$i], $list[$i + 1]] = [$list[$i + 1], $list[$i]];
                $sorted = false;
            }
        }
        $unsorted_until_index -= 1;
    }

    return $list;
}

function hasDuplicateValue(array $array) {
    for($i = 0; $i < count($array); $i++) {
        for($j = 0; $j < count($array); $j++) {
            if($i !== $j && $array[$i] === $array[$j]) {
                return true;
            }
        }
    }
    return false;
}

function hasDuplicateValueLinear(array $array) {
    $existingNumbers = [];
    for($i = 0; $i < count($array); $i++) {
        if($existingNumbers[$array[$i]] === 1) {
            return true;
        } else {
            $existingNumbers[$array[$i]] = 1;
        }
    }
    return false;
}
