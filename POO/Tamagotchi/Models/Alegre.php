<?php

class Alegre extends Estado
{
     public function Come()
    {
        echo "no tengo hambre pero estoy de buen humor\n";
        return $this;
    }

    public function Toma()
    {
        echo "no tengo sed! me voy aponer triste\n";
        return new Triste();
    }
    public function Mimo()
    {
        echo "saca la mano de ahi! me voy a calentar!!!!\n";
        return $this;
    }
}
