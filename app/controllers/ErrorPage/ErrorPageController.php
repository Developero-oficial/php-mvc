<?php
defined('BASEPATH') or exit('No se permite acceso directo');
/**
* 
*/
class ErrorPageController extends Controller
{
  public $path_inicio;

  public function __construct()
  {
    $this->path_inicio = FOLDER_PATH;
  }
  
  public function exec()
  {
    $this->render(__class__, array('path_inicio' => $this->path_inicio));
  }
}