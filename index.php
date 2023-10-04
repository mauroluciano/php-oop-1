<?php

require_once __DIR__ . '/Movie.php';
require_once __DIR__ . '/Genere.php';

require __DIR__ . '/Data.php';

$genere1 = new Genere ('Fantasy');
$genere2 = new Genere ('Dark');

$myMovie = new Movie ('Signore degli Anelli', $genere1, 90 );
$myMovie2 = new Movie ('Batman', $genere2, 100);

$movies = [$myMovie, $myMovie2];

?>

<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container d-flex justify-content-center m-3">
        <?php foreach($movies as $movie): ?>
<div class="card  me-3"  style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Titolo: <?php echo $movie->titolo ?></h5>
    <p class="card-text">Genere: <?php echo $movie->genere->nome ?></p>
  </div>
</div>

        <?php endforeach ?>
</div>
</body>
</html>