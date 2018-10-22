<?php
    var_dump($_GET);

    require_once('../conex.php');

    if($_GET){
        //eliminar
        $eliminar = $conex->prepare('DELETE FROM remeras WHERE id = :producto_id');
        $eliminar->bindValue(':producto_id', $_GET['id']);
        $eliminar->execute();
        header("location: listado.php");
    }
