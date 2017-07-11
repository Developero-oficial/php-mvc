<?php
defined('BASEPATH') or exit('No se permite acceso directo');

require_once ROOT . FOLDER_PATH .'/app/models/Login/LoginModel.php';
require_once LIBS_ROUTE .'Session.php';

/**
* Login controller
*/
class MainController extends Controller
{
  private $session;

  public function __construct()
  {
    $this->session = new Session();
    $this->session->init();
    $this->session->close();
    if($this->session->getStatus() === 1 || !$this->session->get('email'))
      exit('Acceso denegado');
  }

  public function exec()
  {
    $params = array('email' => $this->session->get('email'));
    $this->render(__CLASS__, $params);
  }

}