<?php

class Persona{

  private $nombre;
  private $dni;
  private $edad;

  public function __construct( $elNombre, $elDni )
  {
    $this->nombre = $elNombre;
    $this->dni = $elDni;
  }

  public function getDni()
  {
    return $this->dni;
  }

  public function setDni( $elDni )
  {
    $this->dni = $elDni;
  }

  public function saludar()
  {
    return 'Hola mi nombre es: '.$this->nombre.'<br>';
  }

}
