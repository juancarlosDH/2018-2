<?php

class Usuario{

  private $nombre;
  private $email;
  private $password;

  public function getNombre(){
    return $this->nombre;
  }

  public function getEmail(){
    return $this->email;
  }

  public function setNombre($nombre){
    $this->nombre = $nombre;
  }

  public function setEmail($email){
    $this->email = $email;
  }

  public function setPassword($pass){
    $this->password = $pass;
  }


}
