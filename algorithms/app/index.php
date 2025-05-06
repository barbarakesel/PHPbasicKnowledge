<?php

require __DIR__.'/../app/src/Sorting/Sort.php';
require __DIR__.'/../app/src/search/Search.php';
require __DIR__.'/../app/src/structure/Stack.php';
require __DIR__.'/../app/src/structure/Deque.php';

$arr = [80, 15, 2, 0, 0, 5, 5, 89, 89, 45 ,465, 64, 6, 68, 6, 3, 9, 5, 5, 5, 8, 1];
$words = ["Elephant", "Glimmer", "Juggle", "Ocean", "Puzzle", "Whisper", "Marvel", "Tranquil", "Symphony", "Lantern", "Solar", "Mirage", "Bumblebee", "Velvet","Horizon"];
$value = 64;
$word = 'Ocean';
$str1 = 'Привет Hello, World!';
$str2 = '';
$str3 = 'Лёша на полке клопа нашёл';
$step = 0;
?>
<!DOCTYPE html>
<html>
<head>
    <title>Algorithms</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="container">
    <h1>Sorting Algorithms</h1>
    <div class="array-display">
        <h3>Original Array 1:</h3>
        <p>80, 15, 2, 0, 0, 5, 5, 89, 89, 45 ,465, 64, 6, 68, 6, 3, 9, 5, 5, 5, 8, 1</p>
    </div>
    <div class="array-display">
        <h3>Original Array 2:</h3>
        <p>"Elephant",
            "Glimmer",
            "Juggle",
            "Ocean",
            "Puzzle",
            "Whisper",
            "Marvel",
            "Tranquil",
            "Symphony",
            "Lantern",
            "Solar",
            "Mirage",
            "Bumblebee",
            "Velvet",
            "Horizon"</p>
    </div>

        <div class="array-display">
            <h3>Sorted Array Simple sort:</h3>
            <?php
            $sortedArray = simpleSort($arr);
            $sortedWords = simpleSort($words);
            printArray($sortedArray);
            printArray($sortedWords);
            ?>
            <h3>Sorted Array Bubble sort:</h3>
            <?php
            $sortedArray = bubbleSort($arr);
            $sortedWords = bubbleSort($words);
            printArray($sortedArray);
            printArray($sortedWords);
            ?>

            <h3>Sorted Array Quick sort:</h3>
            <?php
            $sortedArray = quickSort($arr);
            $sortedWords = quickSort($words);
            printArray($sortedArray);
            printArray($sortedWords);
            ?>
        </div>
</div>
<div class="container">
    <h1>Searching Algorithms</h1>
    <div class="array-display">
        <h3>Original Array 1:</h3>
        <p>80, 15, 2, 0, 0, 5, 5, 89, 89, 45 ,465, 64, 6, 68, 6, 3, 9, 5, 5, 5, 8, 1</p>
        <h3>Original Array 2:</h3>
        <p>"Elephant",
            "Glimmer",
            "Juggle",
            "Ocean",
            "Puzzle",
            "Whisper",
            "Marvel",
            "Tranquil",
            "Symphony",
            "Lantern",
            "Solar",
            "Mirage",
            "Bumblebee",
            "Velvet",
            "Horizon"</p>
    </div>
    <div class="array-display">
        <p><b>Number 64</p>
        <p>Word "Ocean"</b></p>
        <h3>Linear search:</h3>
        <?php
            $resultL = linearSearch($arr, $value, $step);
            printResalt($resultL, $step);
            $resultL = linearSearch($words, $word, $step);
            printResalt($resultL, $step);
        ?>
        <h3>Binary search:</h3>
        <?php
            $resultB = binarySearch($arr, $value, $step);
            printResalt($resultB, $step);
            $resultB = binarySearch($words, $word, $step);
            printResalt($resultB, $step);
        ?>
    </div>
</div>

<div class="container">
    <h1>Structures</h1>
    <div class="array-display">
        <h3>Strings</h3>
        <p>$str1 = 'Привет Hello, World!';</p>
        <p> $str2 = '';</p>
        <p>$str3 = 'Лёша на полке клопа нашёл';</p>
    </div>
    <div class="array-display">
        <h3>Stack</h3>
       <p>
           <?php
           Stack($str1);
           ?>
       </p>
        <br>
        <p>
            <?php
            Stack($str2);
            ?>
        </p> <p>
            <?php
            Stack($str3);
            ?>
        </p>

    </div>

    <div class="array-display">
        <h3>Deque</h3>
        <?php
        $deque = new Deque();
        $deque->pushBack("one");
        $deque->pushFront("two");
        $deque->pushBack("three");

        echo $deque->popFront() . PHP_EOL;
        echo $deque->popBack() . PHP_EOL;
        echo $deque->popFront() . PHP_EOL;

        ?>
    </div>


</div>


</body>
</html>
