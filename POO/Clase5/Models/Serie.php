<?php

class Serie extends AudioVisual{

    private $end_date;

    public function __construct( string $title )
    {
        parent::__construct( $title, null);
    }

    public function getEndDate() : string
    {
        return $this->end_date;
    }

    public function setEndDate(string $end_date)
    {
        $this->end_date = $end_date;
    }

}
