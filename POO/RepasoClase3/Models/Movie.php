<?php

class Movie{

    private $title;
    private $rating;
    private $release_date;
    private $genre;

    public function __construct( $title, $rating, $release_date)
    {
        $this->setTitle( $title );
        $this->setRating( $rating );
        $this->setReleaseDate( $release_date );
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getRating()
    {
        return $this->rating;
    }

    public function getReleaseDate()
    {
        return $this->release_date;
    }

    public function getGenre()
    {
        return $this->genre;
    }

    public function setTitle( $title )
    {
        $this->title = $title;
    }

    public function setRating( $rating )
    {
        $this->rating = $rating;
    }

    public function setReleaseDate( $release_date)
    {
        $this->release_date = $release_date;
    }

    public function setGenre( $genero )
    {
        $this->genre = $genero;
    }









}
