<?php
require_once '../vendor/autoload.php';

use App\Aly\Http\Controllers\ControlStructureController;

ControlStructureController::switchCase(dayNumber: 3);

$enDayName = 'Wednesday';
$arDayName = ControlStructureController::getDayArName($enDayName);
echo "<h2>The Aabic day name for $enDayName is $arDayName</h2>";