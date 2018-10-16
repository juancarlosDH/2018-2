<!DOCTYPE html>
<?php

if($_POST){
    //aqui irian las validaciones

    //me conecto
    include('../conex.php');
    //var_dump($conex);

    //guardo
    //$sqlInsert = 'INSERT INTO genres (name, active) VALUES ( ?, ? )';
    $sqlInsert = 'INSERT INTO genres (name, active) VALUES ( :nombre, :activo )';
    $ins = $conex->prepare($sqlInsert);
    //bindeo por posicion del array
    // $ins->bindValue(2, $_POST['activo']);
    // $ins->bindValue(1, $_POST['nombre']);

    //bindeo por alias o placeholder
    $ins->bindValue(':nombre', $_POST['nombre']);
    $ins->bindValue(':activo', $_POST['activo']);

    $ins->execute();
    //$ins->execute( [ $_POST['nombre'],  $_POST['activo'] ] );
}

 ?>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Nuevo Genero</title>
    </head>
    <body>

        <h1>Fomulario de Genero</h1>

        <form class="" action="" method="POST">

            <label for="">
                Nombre:
                <input type="text" name="nombre" value="">
            </label>

            <label for="">
                Activo
                <select class="" name="activo">
                    <option value="0">NO</option>
                    <option value="1">SI</option>
                </select>
            </label>


            <br>
            <button type="submit">Guardar</button>

        </form>

    </body>
</html>
