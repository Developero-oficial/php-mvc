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
    var_dump(__CLASS__);
  }

  /**
  * Método estándar
  */
  public function exec()
  {
    echo '<h1>Hola mundo!</h1>';
  }
}