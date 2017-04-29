<?php
/**
* Controlador base
*/
class Controller
{
  /**
   * object
   */
  private $view;

  /**
   * Inicializa la vista
   */
  public function __construct()
  {
    echo __CLASS__ . ' instanciado';
  }

  /**
   * Metodo estándar
   */
  public function exec()
  {
    echo '</br>Ejecutando método exec()</br>';
  }
}