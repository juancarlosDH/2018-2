<?php

namespace App;

class Serie extends AudioVisual implements Recommendable{

    use Trailer;

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

    public function recomend( $email )
    {
        return 'La serie ha sido recomendada a: '.$email;
    }

}
