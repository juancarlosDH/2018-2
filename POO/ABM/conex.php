<?php

$dsn = 'mysql:host=localhost;dbname=remeras';
$user = 'juancarlos';
$pass = '123456';
$opt= [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ];

try{
    //me conecto a la BD
    $conex = new PDO($dsn, $user, $pass, $opt);

}catch( PDOException $ex ){
    // echo 'Error con la BD, contacta con el administrador del sistema';
    echo 'El error es:'. $ex->getMessage();
}
