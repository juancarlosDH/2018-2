<?php

//Interfaz Compartible es el CONTRATO para obligar a usar estas responsabilidades a quienes la implementen
interface Compartible
{

  public function compartir(Usuario $usuOrigen, Usuario $usuDestino);

}
