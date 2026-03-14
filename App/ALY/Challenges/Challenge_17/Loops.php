<?php

# Sum of Numbers
$x = 0;
$sum = 0;

for ($x = 1; $x <= 100; $x++){
    $sum += $x;
    }
echo "Sum of numbers from 1 to 100 is: $sum";


#*Fibonacci Series:
$num1 = 0;
$num2 = 1;
$terms = 10;

for($i = 2; $i < $terms; $i++){
    $num3 = $num1 + $num2;
    $num1 = $num2;
    $num2 = $num3;
}


# Pattern Printing
$h = 5;

for($i = 1; $i <= $h; $i++){
    for($j = $i; $j < $h; $j++){
        echo" ";
    }

    for ($k = 1; $k <= (2 * $i - 1); $k++) {
        echo "*";
    }
    echo "\n";
}


# Array Filtering:
$numbers = [35, 45, 52, 55, 60, 58, 15, 47];
$target = 50;

foreach($numbers as $num => $value){
    if ($value > $target){
        echo "This number is greater than $target";
    }
}









