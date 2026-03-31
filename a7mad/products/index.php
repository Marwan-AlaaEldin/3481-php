<?php
require_once '../../vendor/autoload.php';

use App\A7mad\Http\Controllers\ProductController;

header('Content-Type: application/json');

$jsonData = ProductController::list_all();

echo $jsonData;
