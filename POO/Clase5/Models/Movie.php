<?php

class Movie extends AudioVisual{

    private $rating;

    public function __construct( string $title, string $rating, string $release_date )
    {
        parent::__construct( $title, $release_date);
        $this->setRating($rating+0.0);
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
