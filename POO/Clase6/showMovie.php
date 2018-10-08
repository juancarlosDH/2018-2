<?php

require_once('autoload.php');

//aqui llamo a mi clase Movie en el namespace que establecí.
use App\Movie;

echo '<pre>';

//instancio un objto de mi clase Movie
$peli = new Movie('Transformers', 20, '1999-01-01');

//var_dump($peli);

echo $peli->verTrailer();

echo '<br>';

//ahora puedo instancia un objeto de la clase que importamos
$corto = new Librerias\Movie('El Corto', 0, '2018-01-01');

var_dump($corto);
