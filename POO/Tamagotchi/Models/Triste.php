<?php

class Triste extends Estado
{
     public function Come()
    {
        echo "vomitare!!!\n";
        return $this;
    }

    public function Toma()
    {
        echo "no tengo sed! me voy a calentar!!!!\n";
        return $this;
    }
    public function Mimo()
    {
        echo "eso me gusta!!\n";
        return new Alegre();
    }
}
