<?php
/**
 * Home controller
 */
class HomeController extends Controller
{
  /**
   * string 
   */
  public $nombre;

  /**
   * array 
   */
  public $lenguajes_favoritos;

  /**
   * Inicializa render 
   */
  public function __construct()
  {
    $this->nombre = 'Juan';
    $this->lenguajes_favoritos = array('Javascript', 'Php');
  }

  /**
  * Método estándar
  */
  public function exec()
  {
    $this->show();
  }

  /**
  * Método de ejemplo con parámetro
  */
  public function show()
  {
    $params = array('nombre' => $this->nombre, 'lenguajes' => $this->lenguajes_favoritos);
    $this->render(__CLASS__, $params); 
  }

  /**
  * Método de ejemplo con parámetro
  */
  public function mostrar($param)
  {
    $this->show();
    echo "Recibí el parámetro: {$param}"; 
  }


}