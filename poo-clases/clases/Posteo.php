<?php

//Clase abstracta para no poder instanciarla
abstract class Posteo{

  private $fecha;
  private $descripcion;
  private $usuario;
  private $ruta;

  public function __construct($fecha, $desc, $usu){
    $this->fecha = $fecha;
    $this->descripcion = $desc;
    $this->usuario = $usu;

    //echo 'Cree el posteo<br>';
    //mandar mail
  }

  public function getFecha(){
    return $this->fecha;
  }

  public function getDescripcion(){
    return $this->descripcion;
  }

  public function getUsuario(){
    return $this->usuario;
  }

  public function getRuta(){
    return $this->ruta;
  }

  public function setFecha(string $fecha){
    $this->fecha = $fecha;
  }

  public function setDescripcion(string $descripcion){
    $this->descripcion = $descripcion;
  }

  public function setUsuario(Usuario $usuario){
    $this->usuario = $usuario;
  }

  public function setRuta(string $ruta){
    $this->ruta = $ruta;
  }

  public function crear(){
    return "Me cree y me guarde en BBDD";
  }

}
