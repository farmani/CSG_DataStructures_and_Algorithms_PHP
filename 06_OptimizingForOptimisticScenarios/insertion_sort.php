<?php

function insertionSort(array $list)
{
    for ($index = 1; $index <= count($list); $index++) {
        $tmpValue = $list[$index];
        $position = $index - 1;
        while ($position >= 0) {
            if ($list[$position] > $tmpValue) {
                $list[$position + 1] = $list[$position];
                $position = $position - 1;
            } else {
                break;
            }
        }
        $list[$position + 1] = $tmpValue;
    }

    return $list;
}
