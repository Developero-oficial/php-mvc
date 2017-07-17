<?php
defined('BASEPATH') or exit('No se permite acceso directo');

require_once ROOT . FOLDER_PATH .'/app/models/Main/MainModel.php';
require_once LIBS_ROUTE .'Session.php';

/**
* Main controller
*/
class MainController extends Controller
{
  private $session;

  private $model;

  public function __construct()
  {
    $this->session = new Session();
    $this->session->init();
    if($this->session->getStatus() === 1 || empty($this->session->get('email')))
      exit('Acceso denegado');
    $this->model = new MainModel();
  }

  public function exec()
  {
    $this->clientsList();
  }

  public function logout()
  {
    $this->session->close();
    header('location: /php-mvc/login');
  }

  public function form($message = '')
  {
    $params = array('email' => $this->session->get('email'),'show_form' => true, 'message' => $message);
    $this->render(__CLASS__, $params);
  }

  public function clientsList($message = '', $message_type = 'success')
  {
    $clients = $this->model->clientsList();

    $params = array('email' => $this->session->get('email'),'show_clients_list' => true, 'message_type' => $message_type, 'message' => $message, 'clients' => $clients);
    return $this->render(__CLASS__, $params);
  }

  public function clientList($id)
  {
    $result = $this->model->clientList($id);

    $info_client = !$result->num_rows
    ? $info_client = array()
    : $info_client = $result->fetch_object();

    $params = array('email' => $this->session->get('email'), 'show_edit_form' => true, 'info_client' => $info_client);
    return $this->render(__CLASS__, $params);
  }

  public function addClient($request_params)
  {
    if(!$this->verify($request_params))
      return $this->form('Son necesarios todos los campos');

    $result = $this->model->addClient($request_params);

    if(!$result || !$this->model->affected_rows())
      return $this->form('Hubo un error al agregar el cliente');
    
    return $this->clientsList('Cliente dado de alta');
  }

  private function verify($request_params)
  {
    foreach ($request_params as $param)
      if(empty($param)) return false;

    return true;
  }

  public function removeClient($id)
  {
    if(empty($id))
      return $this->clientsList('No se recibió el ID del cliente', 'warning');

    if(!is_numeric($id))
      return $this->clientsList('El ID del cliente debe ser numérico', 'warning');

    $result = $this->model->removeClient($id);

    if(!$result || !$this->model->affected_rows())
      return $this->clientsList("Hubo un error al remover el cliente número {$id}", 'warning');

    $this->clientsList("Cliente número {$id} removido");
  }

  public function updateClient($request_params)
  {
    if(!$this->verify($request_params))
      return $this->clientsList('Son necesarios todos los campos para editar', 'warning');

    if(!is_numeric($request_params['id']))
      return $this->clientsList('El ID del cliente debe ser numérico para editar', 'warning');

    $result = $this->model->updateClient($request_params);

    if(!$result || !$this->model->affected_rows())
      return $this->clientsList("Hubo un error al editar el cliente número {$request_params['id']}", 'warning');

    $this->clientsList("Cliente número {$request_params['id']} actualizado");
  }

}
