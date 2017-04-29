<?php
/**
 * Home controller
 */
class HomeController extends Controller
{
  /**
  * Home controller
  */
  public function __construct()
  {
    $lenguajes_favoritos = array('Javascript', 'Php');
    $params = array('nombre' => 'Juan', 'lenguajes' => $lenguajes_favoritos);
    $this->render(__CLASS__, $params);
  }

  /**
  * Método estándar
  */
  public function exec()
  {
    
  }
}