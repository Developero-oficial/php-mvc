<?php
defined('BASEPATH') or exit('No se permite acceso directo');
/**
 * Identificacion de la URI
 */
class Router
{
  /**
   * @var string
   */
  public $uri;

  /**
   * @var string
   */
  public $controller;

  /**
   * @var string
   */
  public $method;

  /**
   * @var string
   */
  public $param;

  /**
   * Inicializa los atributos
   */
  public function __construct()
  {
    $this->setUri();
    $this->setController();
    $this->setMethod();
    $this->setParam();
  }

  /**
   * Asigna la uri completa
   */
  public function setUri()
  {
    $this->uri = explode('/', URI);
  }

  /**
   *Asigna el nombre del controlador
   */
  public function setController()
  {
    $this->controller = $this->uri[2] === '' ? DEFAULT_CONTROLLER : $this->uri[2];
  }

  /**
   * Asigna el nombre del metodo
   */
  public function setMethod()
  {
    $this->method = ! empty($this->uri[3]) ? $this->uri[3] : 'exec';
  }

  /**
   * Asigna el valor del parametro si existe segun el metodo de peticion
   */
  public function setParam()
  {
    if(REQUEST_METHOD === 'POST')
      $this->param = $_POST;
    else if (REQUEST_METHOD === 'GET')
      $this->param = ! empty($this->uri[4]) ? $this->uri[4] : '';
  }

  /**
   * @return $uri
   */
  public function getUri()
  {
    return $this->uri;
  }

  /**
   * @return $controller
   */
  public function getController()
  {
    return $this->controller;
  }

  /**
   * @return $method
   */
  public function getMethod()
  {
    return $this->method;
  }

  /**
   * @return $param
   */
  public function getParam()
  {
    return $this->param;
  }
}