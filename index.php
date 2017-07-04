<?php
define('BASEPATH', true);

require 'system/config.php';
require 'system/core/autoload.php';

/**
 * Nivel de errores notificados
 */
error_reporting(ERROR_REPORTING_LEVEL);

/**
 * Inicializa Router y detección de valores de la URI
 */
$router = new Router();

$controller = $router->getController();
$method = $router->getMethod();
$param = $router->getParam();

/**
 * Validaciones e inclusión del controlador y el metodo 
 */
if(!CoreHelper::validateController($controller))
  $controller = 'ErrorPage';

require PATH_CONTROLLERS . "{$controller}/{$controller}Controller.php";

$controller .= 'Controller';

if(!CoreHelper::validateMethodController($controller, $method))
  $method = 'exec';

/**
 * Ejecución final del controlador, método y parámetro obtenido por URI
 */
$controller = new $controller;

$controller->$method($param);