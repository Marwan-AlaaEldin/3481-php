<?php
require_once './vendor/autoload.php';

App\Http\Controllers\UserController::index();
App\Http\Controllers\UserController::destroy(2);
App\Http\Controllers\UserController::show(99);
App\Http\Controllers\UserController::store();