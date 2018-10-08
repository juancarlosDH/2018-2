<?php

require_once('autoload.php');

$errores = [];

$genres = Genre::getAll();

if($_POST){
    var_dump($_POST);

    $controladorPelis = new MovieController();
    $creado = $controladorPelis->createMovie( $_POST );

    var_dump($creado);

}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Nueva Pelicula</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    </head>
    <body>

        <form class="" action="" method="post">

            <div class="form-group">
                <label for="">Titulo</label>
                  <input type="text" name="title" value="" class="form-control">
            </div>

            <div class="form-group">
                <label for="">Rating</label>
                <input type="text" name="rating" value="" class="form-control">
            </div>

            <div class="form-group">
                <label for="">Fecha de Lanzamiento</label>
                  <input type="text" name="release_date" value="">
            </div>

            <div class="form-group">
                <label for="">Género</label>
              <select name="genre" class="form-control">
                  <?php
                  foreach ($genres as $key => $value) {
                    echo "<option value =\"{$key}\">{$value->getName()}</option>";
                  } ?>
              </select>

            </div>

            <button type="submit" name="button">Guardar</button>

        </form>

    </body>
</html>
