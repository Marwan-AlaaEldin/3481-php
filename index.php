<?php
////                Conditions                          //// 
// Ternary operator // logical condition ? " " : " "
//if stament = if some condition is true , do something . 
//              if condition is false, don't do it .

$age = 21;

if ($age == 0) {
    echo "you are {$age} ,So you were just born";
} elseif ($age <= 6 & $age > 0) {
    echo "you are {$age} ,So too young to enter this website";
} elseif ($age >= 100) {
    echo "you are{$age} ,So you too old to enter this website";
} elseif ($age >= 6) {
    echo "you are {$age} ,So you allowed to enter this website";
} else {
    echo "you not allowed to enter this website";
}

// Ternary operator // logical condition ? " " : " "
$mobilePrice = "27000";
$wallet = "0+";
echo $wallet >= $mobilePrice
    ? "You have EGP$wallet, You can buy it :)<hr >"
    : "Mobile price is $mobPrice, and you have $wallet, so you are too pooooor<hr >";
