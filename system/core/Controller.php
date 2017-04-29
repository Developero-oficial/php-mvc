<?php
/**
* Controlador base
*/
abstract class Controller
{
  /**
   * @var object
   */
  private $view;

  /**
   * Inicializa la vista
   */
  public function __construct()
  {
    
  }

  /**
   * Metodo estándar
   */
  abstract public function exec();
}