<?php 
/**
* 
*/
class LoginModel extends Model
{
  
  public function __construct()
  {
    parent::__construct();
  }

  public function signIn($email)
  {
    $email = $this->db->real_escape_string($email);
    $sql = "SELECT email, password FROM usuarios WHERE email = '{$email}'";
    return $this->db->query($sql);
  }
}