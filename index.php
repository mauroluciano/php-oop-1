<?php
/*
require_once __DIR__ . '/Movie.php';
require __DIR__ . '/Data.php';
*/

$genere1 = new Genere ('Fantasy');
$genere2 = new Genere ('Dark');


$myMovie = new Movie ('Signore degli Anelli');
$myMovie2 = new Movie ('Batman');


$movies = [$myMovie, $myMovie2];
$generi = [$genere1, $genere2];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <?php foreach($movies as $movie): ?>
        <div class="row">
            <?php echo $movie->titolo ?>
        </div>

        <?php foreach($generi as $genere): ?>
        <div class="row">
            <?php echo $genere ?>
        </div>
        <?php endforeach; ?>
</div>
</body>
</html>