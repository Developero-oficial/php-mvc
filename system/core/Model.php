<?php
/**
 * Modelo base
 */
class Model
{
  /**
  * @var object
  */
  protected $db;

  /**
  * Inicializa conexion
  */
  public function __construct()
  {
    $this->db = new Mysqli(HOST, USER, PASSWORD, DB_NAME);
  }

  /**
  * Finaliza conexion
  */
  public function __destruct()
  {
    $this->db->close();
  }
}