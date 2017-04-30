<?php
require 'system/config.php';
require 'system/core/autoload.php';

$router = new Router();

$controller = $router->getController();
$method = $router->getMethod();
$param = $router->getParam();

require PATH_CONTROLLERS . "{$controller}/{$controller}Controller.php";
$controller .= 'Controller';

$controller = new $controller;

$controller->$method($param);