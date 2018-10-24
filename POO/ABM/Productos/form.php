<!DOCTYPE html>

<?php

require_once('../autoload.php');

$talles = ['xs', 's', 'm', 'l', 'xl'];
$colores = [ 'rojo', 'azul', 'verde'];

if($_POST){
    //var_dump($_POST);

    $base = new BD();
    $seGuardo = $base->guardarRemera( $_POST );

    if($seGuardo){
        header('location:listado.php');
    }else{
        echo 'No se pudo registrar en la BD, contacte al administrador del sistema :(';
    }
}

 ?>

<html lang="en" dir="ltr">

    <head>
        <meta charset="utf-8">
        <title></title>
    </head>

    <body>

        <form action="" method="post">

            <h1>Nueva Remera</h1>

            <label for="">Sexo:
                <input type="radio" name="sexo" value="m">Masculino
                <input type="radio" name="sexo" value="f">Femenino
            </label>

            <br><br>

            <label for="">Talle:
                <select class="" name="talle">
                    <?php foreach ($talles as $talle) { ?>
                    <option value="<?php echo $talle ?>"><?php echo $talle ?></option>
                    <?php } ?>

                </select>
            </label>

            <br><br>

            <label for="">Color:
                <select class="" name="color">
                    <?php foreach ($colores as $color) { ?>
                    <option value="<?php echo $color ?>"><?php echo $color ?></option>
                    <?php } ?>

                </select>
            </label>

            <br><br>

            <button type="submit" name="button">Enviar</button>

        </form>

        <a href="listado.php">Volver a Listado</a>

    </body>

</html>
