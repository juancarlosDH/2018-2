<!DOCTYPE html>

<?php
require_once('../autoload.php');

$base = new BD();
$todasLasRemeras = $base->listarRemeras();

// $traerRemeras = $conex->query('SELECT * FROM remeras');
// $todasLasRemeras = $traerRemeras->fetchAll(PDO::FETCH_ASSOC);


 ?>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h1>Listado de Productos</h1>

        <a href="form.php">Nuevo Producto</a>

        <ul>
            <?php foreach ($todasLasRemeras as $remera): ?>
            <li> <?php echo "Talle: ".$remera['talle']
            .' - Sexo:'.$remera['sexo'].
            ' - Color:'.$remera['color']; ?>
                <a href="eliminar.php?id=<?php echo $remera['id'];?>">
                    <img width="20px" src="data:image/png;base64,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" alt="">
                </a>
                <a href="editar.php?id=<?php echo $remera['id'];?>">
                    <img width="20px;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSRbGq1gaN3lFLq-LibYqxRrB_mm30-GGWCVT0CBAYCTiIe0bL7lQ" alt="">
                </a>
            </li>
            <?php endforeach; ?>

        </ul>


    </body>
</html>
