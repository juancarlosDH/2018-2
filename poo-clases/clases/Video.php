<?php

//creamos la clase Video, que hereda de Posteo y usa la interfaz Compartible
class Video extends Posteo implements Compartible{

  //Hereda todos los atributos de Posteo y tiene duracion
  private $duracion;

  //Aplica un constructor propio de video que recibe 4 parametros
  //cada vez que se hace new Video
  public function __construct($fecha, $desc, $usuar, $dur){
    //Le paso los 3 datos de Posteo para que los setee el padre
    parent::__construct($fecha, $desc, $usuar);
    //Me queda el 4 dato (duracion) para setear en esta clase Video
    $this->duracion = $dur;
    // echo 'Cree el Video<br>';
  }

  public function compartir(Usuario $usuOrigen, Usuario $usuDestino){
    //echo "<br>El usuario {$usuOrigen->getNombre()} compartio al usuario {$usuDestino->getNombre()}";
    echo '<br>El usuario '.$usuOrigen->getNombre().' compartio al usuario '.$usuDestino->getNombre();
  }

}
