<?php
require_once('../conex.php');

try{

    $query = $conex->query('SELECT * FROM movies WHERE title = "titanic"');

    $peliculas = $query->fetch(PDO::FETCH_ASSOC);

    var_dump($peliculas);

    // var_dump($conex);

}catch( PDOException $ex ){
    // echo 'Error con la BD, contacta con el administrador del sistema';
    echo 'El error es:'. $ex->getMessage();
}

// echo '<br>Sigo por aqui';





 ?>
