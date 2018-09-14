<?php
echo "<pre>";
$miArray = ["Ford","Chevrolet","Fiat"];
//var_dump($miArray);


$miArray2['Ford'] = "Fiesta";
$miArray2['Chevrolet'] = "Corsa de Chevrolet";
$miArray2['Fiat'] = "Corsa";
//$miArray2[] = "Otro auto";
//var_dump($miArray2);

$miAuto = [ 'marca' => 'Fiat' ];
$miAuto['marca'] = "Fiat";

$miAuto['anio'] = 1993;
$miAuto['color'] = ["Rojo","Verde","Azul"];

//echo $miAuto['color'];

foreach ($miAuto as $key => $value) {
  if($key == 'color'){
    echo "Mi auto tiene los colores: ".implode(' - ',$value);
  }else{
    echo "Mi auto es ".$key.":".$value."<br>";
  }
}









 ?>
