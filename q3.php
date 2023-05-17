<?php

function findSmallestNumber($arr)
{
    $smallest = 1;
    sort($arr);
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] <= $smallest && $arr[$i] > 0) {
            $smallest = $arr[$i] + 1;
        }
    }

    return $smallest;
}

echo findSmallestNumber([-1, 3, 1, 4]) . "\n";
echo findSmallestNumber([-1, -2, -3]) . "\n";
echo findSmallestNumber([1, 2, -2, -3]) . "\n";
