<!DOCTYPE html>
<?php
if($_POST){
    var_dump($_POST);
    setcookie('color', $_POST['color']);
}
?>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <style media="screen">
            body{

                background-color: <?php
                if(isset($_POST['color'])){
                    echo $_POST['color'];
                }else if( isset($_COOKIE['color']) ){
                    echo $_COOKIE['color'];
                }else{
                    echo 'orange';
                }



                //echo $_POST['color']??'orange'; ?>;
            }
        </style>
    </head>
    <body>

        <form class="" action="" method="post">
            <label for="">Color:
                <select class="" name="color">
                    <option value="white">Blanco</option>
                    <option value="red">Rojo</option>
                    <option value="blue">Azul</option>
                    <option value="green">Verde</option>
                </select>
            </label>
            <button type="submit" name="button">Cambiar color</button>
        </form>

    </body>
</html>
