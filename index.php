<?php
require_once __DIR__ . "/Models/Movie.php";
require_once __DIR__ . "/Models/db.php";


var_dump($movies);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>

<body>

    <section>
        <h2>Movies</h2>
        <?php foreach ($movies as $movie) { ?>
            <h3><?php echo $movie->title ?></h3>
            <h5><?php echo $movie->director ?>, <?php echo $movie->year ?></h5>
            <h5>Random Vote: <?php echo $movie->getRandomStar() ?>/5</h5>

            <ul>
                <?php foreach ($movie->genres as $genre) { ?>
                    <li> <?php echo $genre ?> </li>
                <?php } ?>
            </ul>
        <?php } ?>
    </section>

</body>

</html>