<?php

namespace App;

class Genre{

    private $name;

    //esta variable funciona como si fuese una BD
    private static $genresDefault = [1=>'Comedia', 'Acción', 'Triller', 'Ciencia-Ficción'];

    public function __construct( string $name )
    {
        $this->name = $name;
    }

    public function getName() : string
    {
        return $this->name;
    }

    //le pasas un id y te devuelve un objeto de la clase genero que este en el array statico
    public static function find( $id )
    {
        return new Genre(self::$genresDefault[$id]);
    }

    //te devuelve un array de objetos del array statico
    public static function getAll()
    {
        foreach ( self::$genresDefault as $key => $value) {
            $genresDefault[$key] = new Genre($value);
        }

        return $genresDefault;
    }

}
