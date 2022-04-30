<?php

function selectionSort(array $list): array
{
    for($i = 0; $i < count($list) - 1; $i++) {
        $lowestNumberIndex = $i;
        for($j = $i + 1; $j < count($list); $j++) {
            if($list[$j] < $list[$lowestNumberIndex]) {
                $lowestNumberIndex = $j;
            }
        }
        if($lowestNumberIndex != $i) {
            $temp = $list[$i];
            $array[$i] = $list[$lowestNumberIndex];
            $list[$lowestNumberIndex] = $temp;
        }
    }
    return $list;
}
