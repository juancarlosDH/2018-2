<?php

  $estudiantes = [];
  $estudiantes[50] = 'Diego';
  $estudiantes[0] = 'Ana';
  //$estudiantes[1] = 'Juan'; //piso a Ana
  $estudiantes[100] = 'Juan';
  // unset($estudiantes[100]);// elimino la variable de la memoria
  $estudiantes[] = 'Julia';
  //var_dump($estudiantes);
  //count me dice la cantidad de elementos de un array;
  echo '<br>La cantidad de estudiantes es: '.count($estudiantes);
  //asort($estudiantes);
  //var_dump($estudiantes);
  //$unidos = implode(',', $estudiantes);

  //$seEncuentra = in_array('Julia', $estudiantes);

  //echo '<br>¿Pepe está en el Array?'.$seEncuentra;

  //echo '<br>Los estudiantes son: '.$unidos;

  //recorriendo un array numerico
  foreach ($estudiantes as $elemento) {
    echo '<br> Estudiante: '.$elemento;

  }

/*
  $estudiantes = 'coso'; // si hago esto, piso el array y pierdo todo

  var_dump($estudiantes);
  //funciones de string
  echo '<br>hay '.strlen($estudiantes).' letras<br>';
*/


 ?>
