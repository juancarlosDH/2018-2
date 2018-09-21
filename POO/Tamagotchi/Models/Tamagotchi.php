<?php 

class Tamagotchi
{
    private $estado;

    function __construct()
    {
        $this->estado = new Hambriento();

    }

     public function Come()
    {
      $this->estado =  $this->estado->Come();
    }
    public function Toma()
    {
        $this->estado =  $this->estado->Toma();
    }
     public function Mimo()
    {
        $this->estado =  $this->estado->Mimo();
    }
}
