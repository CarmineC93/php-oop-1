<?php
require_once __DIR__ . "/Movie.php";

$genres = [
    "thriller", "drhama", "noir", "gangster", "Love", "War", "Western", "Fantascienza", "distopico"
];

$movies = [
    $Movie1 = new Movie(1, "Pulp Fiction", "Quentin Tarantino", 1995, "english", $genres),
    $Movie2 = new Movie(2, "Enemy", "Dennis Villeneuve", 2013, "english", $genres),
    $Movie3 = new Movie(3, "Blade Runner 2049", "Dennis Villeneuve", 2017, "english", $genres),

];
