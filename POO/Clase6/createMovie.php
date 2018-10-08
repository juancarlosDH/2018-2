<?php

require_once('autoload.php');

$errores = [];

//buscar los generos en alguna BD
$genres = Genre::getAll();

if($_POST){
    var_dump($_POST);

    //primero ¿las validaciones?


    //luego lo creo
    $movie = new Movie( $_POST['title'], $_POST['rating'], $_POST['release_date']);

    //luego que hago? el genero como lo asigno?

}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Nueva Pelicula</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    </head>
    <body>

        <div class="container">

            <h1>Nueva Pelicula</h1>
            <form class="form" action="" method="post">

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
                    <input type="text" name="release_date" value="" class="form-control">
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
        </div>


        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>
