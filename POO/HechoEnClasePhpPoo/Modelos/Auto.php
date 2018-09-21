<?php

class Auto{

  private $marca;
  private $conductor;
  private $velocidad = 0;

  public function __construct($mar,$cond){
    $this->marca = $mar;
    $this->conductor = $cond;
  }

  public function acelerar(){
    $this->velocidad = $this->velocidad + rand(0,100);
  }

  public function getVelocidad(){
    return $this->velocidad;
  }

}




 ?>
