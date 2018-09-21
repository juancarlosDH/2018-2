<?php

class Persona{
  private $nombre;
  private $edad;
  private $madre;
  private $padre;

  public function __construct(string $nombre,int $edad){
    $this->nombre = $nombre;
    $this->edad = $edad;
  }

  public function setMadre( $madre){
    if($madre instanceOf Persona){
      $this->madre = $madre;
    }else{
      echo 'Error eso no es una madre!!!!!';
    }

  }

  public function setPadre(Persona $padre){
    $this->padre = $padre;
  }

}


$homero = new Persona("Homero", 40);
$marge = new Persona("Marge", 38);

$abe = new Persona('Abraham', 60);
$homero->setPadre($abe);

$bart = new Persona("Bartolomeo",10);
$bart->setPadre($homero);
$bart->setMadre('cosa');

var_dump($bart);
