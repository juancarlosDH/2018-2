<?php
include('Modelos/Auto.php');

$ford = new Auto("Ford","Pedrito");

$fiat = new Auto("Fiat","Jorgito");


while($fiat->getVelocidad() < 100 && $ford->getVelocidad() < 100){
  $ford->acelerar();
  $fiat->acelerar();
}

echo "Veremos el ganador";

var_dump($ford);
var_dump($fiat);
 ?>
