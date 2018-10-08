<?php

class MovieController{

    public function createMovie( array $data )
    {
        //primero las validaciones
        $errores = [];

        //luego lo creo
        $movie = new Movie( $data['title'], $data['rating'], $data['release_date']);

        if( $data['genre'] ){
            $genre = Genre::find($data['genre']);
            $movie->setGenre($genre);
        }

        return $movie;
    }

}
