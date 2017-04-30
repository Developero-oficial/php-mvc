<?php
require_once ROOT . '/php-mvc/app/models/Home/HomeModel.php';
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
   * object 
   */
  public $model;

  /**
   * Inicializa valores 
   */
  public function __construct()
  {
    $this->model = new HomeModel();
    $this->nombre = 'Mundo';
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
  * Método de ejemplo con model. Obtiene un usuario segun ID
  */
  public function usuario($param)
  {
    $res = $this->model->getUser($param);
    $this->nombre = $res['usuario_dev'];
    $this->show();
  }


}