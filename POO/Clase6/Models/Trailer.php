<?php

namespace App;

trait Trailer{

    //le digo explicitamente cual es el nombre del atributo para que no vaya
    //a pisar a algun otro atributo de la clase que vaya a implementar este trait
    private $rutaTrailer;

    public function getRutaTrailer()
    {
        return $this->rutaTrailer;
    }

    public function setRutaTrailer( $ruta )
    {
        $this->rutaTrailer = $ruta;
    }

    public function  verTrailer()
    {
        //puedo hacer uso del metodo getTitle() ya que lo va a usar Movie y Serie
        return "Estoy viendo el trailer de : ".$this->getTitle();
    }

}
