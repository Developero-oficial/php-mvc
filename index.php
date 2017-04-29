<?php
require 'system/config.php';
require 'system/core/autoload.php';

$router = new Router();
echo '<pre>';
print_r($router->getUri());
echo '</pre>';

$controller = $router->getController();
$method = $router->getMethod();
$param = $router->getParam();
echo "Controlador: {$controller} </br>";
echo "Método: {$method} </br>";
echo "Param: {$param} </br>";

require PATH_CONTROLLERS . "{$controller}/{$controller}Controller.php";
$controller .= 'Controller';

$controller = new $controller;

$controller->$method();