<?php

require_once('autoload.php');

$genres = [];
foreach (['Comedia', 'Acción', 'Triller', 'Ciencia-Ficción'] as $value) {
    $genres[] = new Genre($value);
}

echo '<pre>';

$serie1 = new Serie('Samuray X');

var_dump($serie1);
