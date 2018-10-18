<!DOCTYPE html>
<?php
session_start();

//si esta logueado redirijo a perfil
if($_SESSION){
    header('location:perfil.php');
}

//si mande datos
if($_POST){
    //verifico que sea un usuario registrado

    if($_POST['email']=='admin@admin.com'  && $_POST['pass']=='123456'){
        //si es asi inicio la session y redirijo a perfil.php

        $_SESSION['email'] = $_POST['email'];
        header('location:perfil.php');

    }else{
        //sino muestro un error
        echo 'Usuario o clave invalida';
    }

}

 ?>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

        <h1>Logeate</h1>

        <form class="" action="" method="post">

            <div class="">
                <label for="">Email
                    <input type="text" name="email" value="">
                </label>
            </div>

            <div class="">
                <label for="">Pass
                    <input type="text" name="pass" value="">
                </label>
            </div>

            <button type="submit" name="button">Ingresar</button>

        </form>

    </body>
</html>
