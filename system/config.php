<?php
defined('BASEPATH') or exit('No se permite acceso directo');

//////////////////////////////////////
// Valores de uri
/////////////////////////////////////

define('URI', $_SERVER['REQUEST_URI']);

//////////////////////////////////////
// Valores de rutas
/////////////////////////////////////

define('FOLDER_PATH', '/php-mvc');

define('ROOT', $_SERVER['DOCUMENT_ROOT']);

define('PATH_VIEWS', FOLDER_PATH . '/app/views/');

define('PATH_CONTROLLERS', 'app/controllers/');

define('HELPER_PATH', 'system/helpers/');

//////////////////////////////////////
// Valores de core
/////////////////////////////////////

define('CORE', 'system/core/');
define('DEFAULT_CONTROLLER', 'Home');

//////////////////////////////////////
// Valores de base de datos
/////////////////////////////////////

define('HOST', 'localhost');
define('USER', 'root');
define('PASSWORD', '');
define('DB_NAME', 'mi_blog');

//////////////////////////////////////
// Valores configuracion
/////////////////////////////////////

define('ERROR_REPORTING_LEVEL', -1);