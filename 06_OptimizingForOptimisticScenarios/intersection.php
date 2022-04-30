<?php

function intersection($firstArray, $secondArray)
{
    $result = [];
    for ($i = 0; $i < count($firstArray); $i++) {
        for ($j = 0; $j < count($secondArray); $j++) {
            if ($firstArray[$i] == $secondArray[$j]) {
                $result[] = $firstArray[$i];
                break;
            }
        }
    }
    return $result;
}
