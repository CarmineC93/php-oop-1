<?php

/**
 * class Movie
 * defines Movie class
 * @author
 */
class Movie
{
    public $id;
    public $title;
    public $director;
    public $year;
    public $language;
    public $genres;


    function __construct(Int $id, String $title, String $director, Int $year, String $language, array $genres)
    {
        $this->id = $id;
        $this->title = $title;
        $this->director = $director;
        $this->year = $year;
        $this->language = $language;
        $this->genres = $genres;
    }

    public function getRandomStar()
    {
        $rndmVote = rand(1, 5);
        return $rndmVote;
    }
}
