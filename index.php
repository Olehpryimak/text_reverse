<?php

// FRONT CONTROLLER

// Загальні налаштування
ini_set('display_errors',1);
error_reporting(E_ALL);

// Підключення файлів системи
define('ROOT', dirname(__FILE__));
require_once(ROOT.'/components/Autoload.php');



// Виклик Router
$router = new Router();
$router->run();
