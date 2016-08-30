<?php

//Показуємо помилки
ini_set('display-errors', 1);
error_reporting(E_ALL);

//Пвдключаємо необхідні файли
define('ROOT', dirname(__FILE__));
require_once(ROOT . '/components/Router.php');
require_once (ROOT . '/components/Db.php');

//Підключення до БД

//Виклик роутера
$router = new Router();
$router->run();