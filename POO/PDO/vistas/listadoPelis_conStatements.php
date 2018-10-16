<?php

require_once('../conex.php');

try{

    //ejecuto el query para traerme las pelis
    $query = $conex->query('SELECT id, title, genre_id FROM movies');
    //obtengo las pelis
    $peliculas = $query->fetchAll(PDO::FETCH_ASSOC);
    //obtengo la cantidad de pelis
    $cantidad = $query->rowCount();

    //preparo el query para obtener los datos del genero de una peli
    $queryGenero = $conex->prepare('SELECT * FROM genres WHERE id = ?');

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
             $genero['name'] = 'Sin Genero';
            //obteniendo el genero con el id de la peli
            //var_dump($peli['genre_id']);

            if( isset($peli['genre_id'])  ){

             $queryGenero->execute( [ $peli['genre_id'] ] );
             $genero = $queryGenero->fetch(PDO::FETCH_ASSOC);
            }

            echo '<a href="">'. $peli['title'] .' ('.$genero['name'].')</a><br>';

        }

        ?>

    </body>
</html>
