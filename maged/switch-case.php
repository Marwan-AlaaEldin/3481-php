<?php
require_once '../vendor/autoload.php';

use App\Maged\Http\Controllers\ControlStructureController;

ControlStructureController::switchCase(dayNumber: 3);


$enDayName= 'Wednesday';
$arDayName = ControlStructureController::getDayArName($enDayName);
echo "<h2>The Aabic day name for $enDayName is $arDayName</h2>";
echo"<hr>";
echo"<hr>";

$day = 'Friday';
$message = ControlStructureController::weekDaysMessage($message);
echo "<h2>Hey since it is $day so, $message</h2>";
echo"<hr>";
echo"<hr>";
