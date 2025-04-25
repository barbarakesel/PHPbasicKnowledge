<?php

require __DIR__.'/../app/src/Sorting/Sort.php';

$arr = [80, 15, 2, 0, 0, 5, 5, 89, 89, 45 ,465, 64, 6, 68, 6, 3, 9, 5, 5, 5, 8, 1]; $words = [
    "Elephant",
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
    "Horizon"
];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Sorting Algorithms</title>
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
</body>
</html>