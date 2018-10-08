<?php

class AudioVisual {

    private $title;
    private $release_date;
    private $genre;

    public function __construct( string $title, string $release_date )
    {
        $this->setTitle($title);
        $this->setReleaseDate($release_date);
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

    public function tituloConAnio() : string
    {
        $fecha = explode('-', $this->getReleaseDate());
        return ($this->title . ' ('. $fecha[0] .')');
    }

    public function setGenre(Genre $genre)
    {
        $this->genre = $genre;
    }

    public function getGenre() : Genre
    {
        return $this->genre;
    }

}
