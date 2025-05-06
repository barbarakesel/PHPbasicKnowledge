<?php

declare(strict_types=1);

function arraySort(array $arr): array
{
    sort($arr);

    return $arr;
}

function (array $arr): array
{
    for ($i = 0; $i < count($arr); $i++) {
        for ($j = 0; $j < count($arr) - $i - 1; $j++) {
            if ($arr[$j] > $arr[$j + 1]) {
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }

    return $arr;
}

function quickSort(array $arr): array
{
    if (count($arr) <= 1) {
        return $arr;
    }

    $pivot = $arr[0];
    $left = $right = [];

    for ($i = 1; $i < count($arr); $i++) {
        if ($arr[$i] < $pivot) {
            $left[] = $arr[$i];
        } else {
            $right[] = $arr[$i];
        }
    }

    return array_merge(quickSort($left), [$pivot], quickSort($right));
}

function printArray($array)(array $array): void
{
    echo implode(", ", $array);
    echo "<br>";
}
