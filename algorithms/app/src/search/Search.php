<?php

declare(strict_types=1);

function linearSearch(array $arr, mixed $value, int &$step = 0): int
{
    for ($i = 0; $i < count($arr); $i++) {
        $step++;

        if ($arr[$i] === $value) {
            return $i;
        }
    }

    return -1;
}

function binarySearch(array $arr, mixed $value, int &$step = 0): int
{
    sort($arr);

    $start = 0;
    $end = count($arr) - 1;

    while ($start <= $end) {
        $step++;
        $mid = floor(($start + $end) / 2);

        if ($arr[$mid] === $value) {
            return $mid;
        } elseif ($arr[$mid] > $value) {
            $end = $mid - 1;
        } elseif ($arr[$mid] < $value) {
            $start = $mid + 1;
        }
    }

    return -1;
}

function printResult(int $result, int $step): void
{
    if ($result != -1) {
        echo "The key of the value is " . $result;
        echo "<br>";
        echo "Number of steps is " . $step;
        echo "<br>";
    } else {
        echo "Error there is no result";
        echo "<br>";
    }
}
