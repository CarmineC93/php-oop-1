<?php
require_once __DIR__ . "/Movie.php";

$genres = [
    "Thriller", "Drama", "Noir", "Gangster", "Love", "Guerra", "Western", "Fantascienza", "Distopico", "Mistery"
];

$movies = [
    $Movie1 = new Movie(1, "Pulp Fiction", "Quentin Tarantino", 1995, "english", ["Thriller", "Noir", "Gangster"]),
    $Movie2 = new Movie(2, "Enemy", "Dennis Villeneuve", 2013, "english", ["Thriller", "Mistery"]),
    $Movie3 = new Movie(3, "Blade Runner 2049", "Dennis Villeneuve", 2017, "english", ["Fantascienza", "Distopico", "Thriller"]),
];
