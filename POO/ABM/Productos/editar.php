<!DOCTYPE html>
<pre>
<?php

require_once('../conex.php');

$talles = ['xs', 's', 'm', 'l', 'xl'];
$colores = [ 'rojo', 'azul', 'verde'];

// var_dump($_GET);
// var_dump($_POST);

if($_GET){
    //
    $mostrar = $conex->prepare('SELECT * FROM remeras WHERE id = :producto_id');
    $mostrar->bindValue(':producto_id', $_GET['id']);
    $mostrar->execute();
    $producto = $mostrar->fetch(PDO::FETCH_ASSOC);
    //print_r($producto);
}

if($_POST){
    //var_dump($_POST);
    try {
        $query = $conex->prepare(
            'UPDATE remeras set talle=:talle, color=:color, sexo=:sexo
                WHERE id = :id'
        );

        $query->bindValue(':talle', $_POST['talle']);
        $query->bindValue(':color', $_POST['color']);
        $query->bindValue(':sexo', $_POST['sexo']);
        $query->bindValue(':id', $_GET['id']);

        $query->execute();

        header('location:listado.php');

    } catch (PDOException $ex) {

        //echo 'Error al insertar:'. $ex->getMessage();
        echo 'Error al registrar en la BD';

    }




}

 ?>
</pre>
<html lang="en" dir="ltr">

    <head>
        <meta charset="utf-8">
        <title></title>
    </head>

    <body>

        <form action="" method="post">

            <h1>Editar Remera</h1>

            <label for="">Sexo:
                <input <?php
                if($producto['sexo']=='m'){
                 echo 'checked';
                }
                 ?> type="radio" name="sexo" value="m">Masculino
                <input <?php echo ($producto['sexo']=='f')?'checked':'';?>
                  type="radio" name="sexo" value="f">Femenino
            </label>

            <br><br>

            <label for="">Talle:
                <select class="" name="talle">
                    <?php foreach ($talles as $talle) { ?>
                    <option
                    <?php
                    if($producto['talle']==$talle){
                        echo 'selected';
                    }
                     ?>
                     value="<?php echo $talle ?>"><?php echo $talle ?></option>
                    <?php } ?>

                </select>
            </label>

            <br><br>

            <label for="">Color:
                <select class="" name="color">
                    <?php foreach ($colores as $color) { ?>
                    <option
                    <?php echo ($producto['color']==$color)? 'selected':'';?>
                     value="<?php echo $color ?>"><?php echo $color ?></option>
                    <?php } ?>

                </select>
            </label>

            <br><br>

            <button type="submit" name="button">Editar</button>

        </form>

        <a href="listado.php">Volver a Listado</a>

    </body>

</html>
