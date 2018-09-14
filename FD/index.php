<!DOCTYPE html>
<?php

  //$generos = [ 'Acción', 'Comedia', 'Terror', 'Suspenso', 'Drama', 'Aventura', 'Triller' ];

  $generos = [
      [ 'nombre' => 'Comedia', 'url' => 'comedia.php' ],
      [ 'nombre' => 'Acción', 'url' => 'accion.php' ]
  ];

  //$peliculas = [ 'Avatar', 'Rogue One', 'Dragon Ball', 'otra', 'mas' ];
include('peliculas.php');


  $title = 'Digital Movies - Tus películas favoritas';
  $titulo = 'Peliculas del Argentina';
  $logo = 'images/logo.png';
  $edad =23;

 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?= $title ?></title>
    <link href="https://fonts.googleapis.com/css?family=Modern+Antiqua" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <style media="screen">
    .menorDeEdad{
      opacity:0.2;
    }


    <?php if($edad<18){ ?>
      .contenedor-principal{
        background-color: black;
      }
    <?php } ?>

    </style>
  </head>
  <body class="<?php echo $edad<18? "menorDeEdad" : ""; ?>">

  <div class="contenedor-principal">

    <?php
      include('header.php');
      ?>


      <h2>Peliculas Disponibles</h2>

    <section class="contenedor-pelis">

      <?php
      foreach ($peliculas as $pelicula) { ?>

        <article class="items">
          <?php
            $duracion = $pelicula['length'];
            $stars = '<img class="ranking" src="images/star.png" alt="">';
            $meGusta = $pelicula['meGusta'];
            //fecha de estreno en formato Unix.
            $fechaDeEstreno = strtotime($pelicula['release_date']); //lo convierto a un numero para poder restarlos.
            $fechaActual = strtotime(date('Y-m-d'));
            $mesesDiferencia = ($fechaActual-$fechaDeEstreno)/(60*60*24*30); //resto y obteno los meses de diferencia.
          ?>
          <a href="mostrarPelicula.php?titulo=<?php echo $pelicula['title']; ?>"><img class="poster" src="<?= $pelicula['poster'] ?>" alt=""></a>
          <div class="detalle">
            <label><?php echo $pelicula['title']. ' ( '.date('Y', strtotime($pelicula['release_date'])).' ) ' ; ?></label>
            <label><?php echo $pelicula['genre']; ?></label>
            <label>Duración: <?php echo number_format($duracion/60, 2) ?> hrs</label>
            <label>Rating: <?php echo $pelicula['rating'] ?></label>
            <label> <?php echo str_repeat($stars, $pelicula['awards']) ?>
              <img class="ranking" src="images/starblack.png" alt=""> </label>
              <label>
              <?php if($meGusta) {
                echo '<img class="ranking" src="images/thumb-up-icon.png" alt="">';
              }else{
                echo '<img class="ranking" src="images/thumb-down-icon.png" alt="">';
              }
              ?>
            </label>
            <?php if($mesesDiferencia<=20){
              echo '<img class="estreno" src="images/estreno3.png" alt="">';
            } ?>
              <img class="taquillera" src="images/ticket.png" alt="">
            <?php if ($pelicula['es3D']) { ?>
              <img class="tresd" src="images/anteojos-3d.png" alt="">
            <?php } ?>
          </div>
        </article>

      <?php } ?>


    </section>


    <?php
    $logueado = false;
    $nombre = "JC";
     ?>

     <?php
      include('footer.php');
        ?>

  </div>
  </body>
</html>
