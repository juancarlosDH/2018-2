<?php

$dsn = 'mysql:host=localhost;dbname=movies_db';
$user = 'juancarlos';
$pass = '123456';
$opt= [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ];

try{

    $conex = new PDO($dsn, $user, $pass, $opt);

    $query = $conex->query('SELECT title FROM movies');

    $peliculas = $query->fetchAll(PDO::FETCH_ASSOC);
    $cantidad = $query->rowCount();

    // var_dump($peliculas);

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
            echo '<a href="">'.$peli['title'] .'</a><br>';
        }

        ?>

    </body>
</html>
