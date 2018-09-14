<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Estudiantes de la clase</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
  </head>
  <body>

<?php

  include('estudiantes.php');

  //var_dump($notas);
//sin el nombre del alumno
// foreach ($notas as $evaluaciones) {
//   $unidas = implode(', ', $evaluaciones);
//   echo '<br>Las notas son: '.$unidas;
// }


?>



<div class="container">

  <h1 class="">
    Estudiantes de la Clase
  </h1>


  <a href="nuevoEstudiante.php" class="btn btn-primary">Nuevo Estudiante</a>

<?php


echo '<ul>';
//con el nombre del alumno o la posicion
foreach ($notas as $nombre => $evaluaciones) {
  //$unidas = implode(', ', $evaluaciones);
  //aqui mostrar solo es listado de los alumnos, con un enlace para ver el detalle  del alumno.
  echo '<li>Estudiante: '.$nombre
    .' <a href="verEstudiante.php?nombre='.$nombre.'">ver notas</a>
    </li>';
}
echo '</ul>';
//echo 'La nota que quiere Diego es: '.$notas[1][1];

 ?>


 </div>


 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

</body>
</html>
