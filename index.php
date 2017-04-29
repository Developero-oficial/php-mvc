<?php
require 'system/config.php';
require 'system/core/Router.php';
require 'system/core/Controller.php';

$router = new Router();
echo '<pre>';
print_r($router->getUri());
echo '</pre>';

$controlador = $router->getController();
$method = $router->getMethod();
$param = $router->getParam();
echo "Controlador: {$controlador} </br>";
echo "Método: {$method} </br>";
echo "Param: {$param} </br>";

$controller = new $controlador();
$controller->$method();