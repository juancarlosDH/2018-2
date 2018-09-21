<?php

require_once('autoload.php');

$genres = [];
foreach (['Comedia', 'Acción', 'Triller', 'Ciencia-Ficción'] as $value) {
    $genres[] = new Genre($value);
}

$peli = new Movie('Avatar', 0, '2010-01-01');
$peli->setGenre($genres[1]);

$peli2 = new Movie('StarTrek', 1, '1995-01-01');
$peli2->setGenre($genres[3]);

echo '<pre>';
// var_dump($peli);
// var_dump($genres);

$fav = new Favorite();

$fav->addMovie($peli);
$fav->addMovie($peli2);

var_dump($fav->getMovies());
