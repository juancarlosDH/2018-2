<?php
session_start();
if(!isset($_SESSION['contador'])){
    $_SESSION['contador']=0;
}
var_dump($_POST);

if($_POST){
    if(isset($_POST['incrementar'])){
        //$_SESSION['contador'] = $_SESSION['contador'] + 1;
        //$_SESSION['contador'] +=1;
        $_SESSION['contador'] ++;
    }
    if(isset($_POST['reiniciar'])){
        $_SESSION['contador'] = 0 ;
    }
}
var_dump($_SESSION);

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

        <form class="" action="" method="post">
            <button type="submit" name="incrementar">Incrementar</button>
            <button type="submit" name="reiniciar">Reiniciar</button>
        </form>
        <a href="mostrar.php">Mostrart punto php</a>
    </body>
</html>
