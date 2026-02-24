<?php

require __DIR__ . '/../vendor/autoload.php';

use Symfony\Component\VarDumper\VarDumper;

/*
|--------------------------------------------------------------------------
| Challenge 1
|--------------------------------------------------------------------------
*/

// Original array
$males = ['Hany', 'Nader', 'Karim', 'Ahmed'];

// Function to prepend title
function titleMale(string $name): string
{
    return 'MR. ' . $name;
}

// Update array using array_map
$malesWithTitle = array_map('titleMale', $males);

dump($malesWithTitle);



/*
|--------------------------------------------------------------------------
| Challenge 2
|--------------------------------------------------------------------------
*/

$females = ['Hana', 'Nada', 'Salma', 'Mona'];

// Function to prepend title
function titleFemale(string $name): string
{
    return 'Miss ' . $name;
}

$femalesWithTitle = array_map('titleFemale', $females);

dump($femalesWithTitle);



/*
|--------------------------------------------------------------------------
| Challenge 3
|--------------------------------------------------------------------------
*/

$nums = [5, 4, 9, 2, 10];

// Function to square numbers
function square(int $num): int
{
    return $num * $num;
}

// Update array using array_map
$squaredNums = array_map('square', $nums);

dump($squaredNums);
