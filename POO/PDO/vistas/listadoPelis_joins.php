<?php
require_once('../conex.php');
try{

    //ejecuto el query para traerme las pelis
    $query = $conex->query('SELECT movies.id, title, name AS genre_name
         FROM movies
        LEFT JOIN genres ON movies.genre_id = genres.id');
    //obtengo las pelis
    $peliculas = $query->fetchAll(PDO::FETCH_ASSOC);
    //echo '<pre>';print_r($peliculas);die;
    //obtengo la cantidad de pelis
    $cantidad = $query->rowCount();

}catch( PDOException $ex ){
    // echo 'Error con la BD, contacta con el administrador del sistema';
    echo 'El error es:'. $ex->getMessage();
}
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
    <head>
        <meta charset="utf-8" content="text/html">
        <title></title>
    </head>
    <body>
        <h1>Listado de Pelis (<?php echo $cantidad; ?>)</h1>
        <?php

         foreach ($peliculas as $peli) {

            if(empty($peli['genre_name'])) { $peli['genre_name'] = 'sin genero';}

            echo '<a href="">'.utf8_encode($peli['title']) .' ('.$peli['genre_name'].')</a><br>';

        }

        ?>

    </body>
</html>
