<?php

require_once('../config/config.php');
require_once('../core/Router.php');

$uri = $_SERVER['REQUEST_URI'];
$dir = __DIR__;
$path = substr($dir, strlen($_SERVER['DOCUMENT_ROOT']) - 1);
$route = substr($uri, strlen($path));

$router = new Router();
$response = $router->run($route);

echo $response;
