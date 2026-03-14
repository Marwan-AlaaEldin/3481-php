<?php
namespace App\Aly\Challenges\Challenge_17;
class Conditions
{
    # Even or Odd
    public static function if($num)
    {
        if($num % 2 == 0) {
            echo "This number is even";
        }
        else{
            echo "This number is odd";
        }
    }

    # *Largest of Three:*
    public static function largest($a, $b, $c)
    {
        if ($a > $b) {
            if ($a > $c){
                echo "$a is the largest";

            } else{
                echo "$c is the largest";
            }

        } else {
            if ($b > $c){
                echo "$b is the largest";

            } else{
                echo "$c is the largest";
            }
        }
    }

    # *Simple Calculator:

    public static function calc(int $n1, $n2, $op)
    {
        if ($op == '+'){
            $result = $n1 + $n2;
            echo "The result of $n1 + $n2 is $result"; 
        }
        elseif ($op == '-'){
            $result = $n1 - $n2;
            echo "The result of $n1 - $n2 is $result"; 
        }
        elseif ($op == '*'){
            $result = $n1 * $n2;
            echo "The result of $n1 * $n2 is $result"; 
            }
        elseif ($op == '/'){
            if ($n2 != 0){
                $result = $n1 / $n2;     
                echo "The result of $n1 / $n2 is $result"; 

            } else{
                echo "Error: Division by zero is not allowed";
            }
        }
        else{
            echo "Error: Invalid operator";
        }
    }

    
}