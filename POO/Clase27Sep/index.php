<?php

require_once('autoload.php');

use Proyecto\Blog\Models\Usuario as Visitante;
use Proyecto\Blog\Admin\Usuario;

$juan = new Visitante();
var_dump($juan);

$juan2 = new Visitante();
var_dump($juan2);

$juan3 = new Visitante();
var_dump($juan3);

$juan4 = new Visitante();
var_dump($juan4);

$juan5 = new Visitante();
var_dump($juan5);

$diego = new Usuario();

var_dump($diego);


?>
