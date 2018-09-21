<?php 

class Hambriento extends Estado
{
    public function Come()
    {
        echo "comiendo...\n";
        return new Alegre();
    }
    public function Toma()
    {
        echo "no tengo sed!\n";
        return $this;
    }
     public function Mimo()
    {
        echo "Te la muerdo eh!!\n";
        return $this;
    }
}
