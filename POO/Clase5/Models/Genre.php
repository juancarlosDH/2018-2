<?php

class Genre{

    private $name;

    private static $genres = [1=>'Comedia', 'Acción', 'Triller', 'Ciencia-Ficción'];

    public function __construct( string $name )
    {
        $this->name = $name;
    }

    public function getName() : string
    {
        return $this->name;
    }

    public static function find( $id )
    {
        return new Genre(self::$genres[$id]);
    }

    public static function getAll()
    {
        foreach ( self::$genres as $key => $value) {
            $genres[$key] = new Genre($value);
        }

        return $genres;
    }

}
