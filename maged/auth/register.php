<?php
var_dump($_POST);

$method = var_dump($_SERVER['REQUEST_METHOD']);

if ($method !== $_POST) die("POST method only");
