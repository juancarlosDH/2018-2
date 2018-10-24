<?php

/**
 *
 */
class Remera
{
    private $id;
    private $talle;
    private $sexo;
    private $color;

    function __construct($id, $talle, $sexo, $color)
    {
        $this->id = $id;
        $this->setTalle($talle);
        $this->setSexo($sexo);
        $this->setColor($color);
    }

    public function getId()
    {
        return $this->id;
    }

    public function getTalle()
    {
        return $this->talle;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function getSexo()
    {
        return $this->sexo;
    }

    public function setSexo( $sexo )
    {
        $this->sexo = $sexo;
    }

    public function setTalle( $talle )
    {
        $this->talle = $talle;
    }

    public function setColor( $color )
    {
        $this->color = $color;
    }
}
