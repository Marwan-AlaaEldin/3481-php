<?php

require_once '../vendor/autoload.php';

use App\Fayad\Http\Controllers\ControlStructureController;

foreach (ControlStructureController::create_even_array(1, 500) as $num) {
    echo "$num <br>";
}