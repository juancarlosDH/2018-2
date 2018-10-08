<?php
namespace Librerias;

trait TraitLength
{
    private $length;

    public function setLength( $length )
    {
        $this->length = $length;
    }

    public function getLength()
    {
        return $this->length;
    }

}
