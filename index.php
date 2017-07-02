<?php
require 'system/config.php';
require 'system/core/autoload.php';

$router = new Router();

$controller = $router->getController();
$method = $router->getMethod();
$param = $router->getParam();

if(!CoreHelper::validateController($controller))
  throw new Exception("Controlador $controller no fue encontrado");

require PATH_CONTROLLERS . "{$controller}/{$controller}Controller.php";

$controller .= 'Controller';

if(!CoreHelper::validateMethodController($controller, $method))
  throw new Exception("El método {$method} del controlador {$controller} no fue encontrado");

$controller = new $controller;

$controller->$method($param);