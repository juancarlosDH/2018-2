<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
      body{
        color: red;
        height: 2000px;
      }
      h1{
        color: <?php echo "blue;"; ?>
      }
    </style>
  </head>
  <body>
    <?php
      $titulo = 'Mi Titulo del Sitio Web';
      $nombre = 'Juan';
      $apellido = 'Gonzalez';
      $trabajo; //soy un null
      $soyNull = null; //soy un null
      //$nombre = ''; //soy un texto vacio
      $edad = 18; //soy un cero
     ?>

     <h1><?php echo ( $titulo ); ?></h1>

     <?php
      echo '<h3>Con comillas simples: $nombre $apellido</h3>';
     ?>

     <?php
      echo "<h3>Con comillas dobles: $nombre $apellido</h3>";
     ?>

     <?php
      echo "<h3>interpolando con llaves: {$nombre} {$apellido}</h3>";
     ?>

  </body>
</html>
