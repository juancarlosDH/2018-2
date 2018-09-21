<?php

include('autoload.php');

$pepe = new Persona( 'Pepe', 999 );
// $pepe->nombre = 'Pepe';
// $pepe->dni = 32446585;
// $pepe->edad = 16;
echo $pepe->saludar();
$pepe->setDni( 32446585 );
// var_dump($pepe);

$juan = new Persona('JuanCa', 12345689);
// $juan->dni = 123456789;
// $juan->nombre = 'Juan Carlos';
echo $juan->saludar();
// var_dump($juan);
?>
