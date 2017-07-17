<?php 
/**
* 
*/
class MainModel extends Model
{
  
  public function __construct()
  {
    parent::__construct();
  }

  public function affected_rows()
  {
    return $this->db->affected_rows;
  }

  public function addClient($params)
  {
    $name = $this->db->real_escape_string($params['name']);
    $email = $this->db->real_escape_string($params['email']);
    $address = $this->db->real_escape_string($params['address']);
    $sql = "INSERT INTO clients (name, email, address) VALUES ('$name', '$email', '$address')";
    return $this->db->query($sql);
  }

  public function clientsList()
  {
    $sql = 'SELECT * FROM clients';
    return $this->db->query($sql);
  }

  public function clientList($id)
  {
    $sql = "SELECT * FROM clients WHERE id='{$id}'";
    return $this->db->query($sql);
  }

  public function removeClient($id)
  {
    $sql = "DELETE FROM clients WHERE id={$id}";
    return $this->db->query($sql);
  }

  public function updateClient($params)
  {
    $name = $this->db->real_escape_string($params['name']);
    $email = $this->db->real_escape_string($params['email']);
    $address = $this->db->real_escape_string($params['address']);
    $id = $this->db->real_escape_string($params['id']);
    $sql = "UPDATE clients SET name='{$name}', email='{$email}', address='{$address}' WHERE id='{$id}'";
    return $this->db->query($sql);
  }
}