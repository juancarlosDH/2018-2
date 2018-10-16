<?php

namespace App;

class Favorite{

    private $movies = [] ;

    public function addMovie( Movie $movie )
    {
        $this->movies[] = $movie;
    }

    public function getMovies()
    {
        return $this->movies;
    }

}
