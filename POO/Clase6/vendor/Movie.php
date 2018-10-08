<?php

namespace Librerias;

require_once('TraitLength.php');

class Movie{

    use TraitLength;

    private $title;
    private $rating;
    private $release_date;
    private $genre;

    public function __construct( string $title, string $rating, string $release_date )
    {
        $this->setTitle($title);
        $this->setReleaseDate($release_date);
        $this->setRating($rating+0.0);
    }

    public function getTitle() : string
    {
        return $this->title;
    }

    public function getReleaseDate() : string
    {
        return $this->release_date;
    }

    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    public function setReleaseDate(string $release_date)
    {
        $this->release_date = $release_date;
    }

    public function setGenre(Genre $genre)
    {
        $this->genre = $genre;
    }

    public function getGenre() : Genre
    {
        return $this->genre;
    }

    public function getRating() : float
    {
        return $this->rating;
    }

    public function setRating(string $rating)
    {
        $this->rating = $rating;
    }

}
