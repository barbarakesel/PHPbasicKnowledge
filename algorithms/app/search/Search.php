<?php
function linearSearch($arr, $value, &$step = 0){
   for ($i=0; $i<count($arr); $i++){
       $step++;
       if($arr[$i] === $value) {
           return $i;
       }
   }
   return -1;
}

function binarySearch($arr, $value, &$step = 0){
    sort($arr);

    $start = 0;
    $end = count($arr) - 1;
    while($start <= $end){
        $step++;
        $med = floor(($start + $end) / 2);

        if($arr[$med] === $value) {
            return $med;
        }
        else if($arr[$med] > $value){
            $end = $med - 1;
        }
        else if($arr[$med] < $value){
            $start = $med + 1;
        }
    }
    return -1;
}
function printRes($result, $step){
    if ($result != -1){
        echo "The key of the value is " . $result;
        echo "<br>";
        echo "Number of steps is ".$step ;
        echo "<br>";
    }
    else {
        echo "Error there is no result";
        echo "<br>";
    }
}
