<?php
require_once '../vendor/autoload.php';
Class Condision{

public static array $num=[

2,
3,
4,
5,
6,

];
 public static function checked() {
foreach (self::$num as $n) {
if ($n % 2 == 0) {
 echo "$n is even number<br>";
} 
else {echo "$n is odd number<br>";
 }
 }
 }
 private static$leapyear=2026;
 
public static function checyear($leapyear){
if($leapyear%4==0){
    echo "is leabyear";}
else($leapyear%100!==0);{
 echo"is not leabyer";
}
}
private static$a=100;
private static $b=35;
private static $c=400;
public static function checlargest($a, $b, $c) {
if ($a > $b && $a > $c) {
echo "$a is the largest<br>";
} elseif ($b > $a && $b > $c) {
echo "$b is the largest<br>";
} else {
 echo "$c is the largest<br>";      
}
}
}