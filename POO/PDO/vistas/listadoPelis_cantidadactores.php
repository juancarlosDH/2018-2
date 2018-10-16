<?php

require_once('../conex.php');

try{

    //ejecuto el query para traerme las pelis
    $query = $conex->prepare('SELECT movies.id, title , genres.name AS genre, count(actor_id) AS cantidad_actores
 FROM movies
  LEFT JOIN actor_movie ON movies.id = actor_movie.movie_id
  LEFT JOIN genres ON movies.genre_id = genres.id '.
  (isset($_GET['genre_id'])? 'WHERE movies.genre_id = :genero ' : '').
 'GROUP BY title, movies.id
    ');
    if (isset($_GET['genre_id'])) {
        $query->bindValue(':genero', $_GET['genre_id']);
    }

    $query->execute();

    //obtengo las pelis
    $peliculas = $query->fetchAll(PDO::FETCH_ASSOC);
    //obtengo la cantidad de pelis
    var_dump($peliculas);
    // $cantidad = $query->rowCount();

    $query2=$conex->query('SELECT * FROM genres');
    $generos=$query2->fetchAll(PDO::FETCH_ASSOC);

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
        <h1>Listado de Pelis </h1>

        <form class="" action="" method="get">
            <div class="">
                <label for="">
                    Genero:
                    <select class="" name="genre_id">
                        <option value="">Todos</option>
                        <?php foreach ($generos as $genero): ?>
                            <option value="<?= $genero['id'] ?>"><?= $genero['name'] ?></option>

                        <?php endforeach; ?>
                    </select>
                </label>
                <button type="submit">Filtrar</button>
            </div>

        </form>

        <?php

         foreach ($peliculas as $peli) {

            echo '<a href="">'. $peli['title'] .' ('.$peli['genre'].') ' .' actores: '.$peli['cantidad_actores'].'</a><br>';

        }

        ?>

    </body>
</html>
