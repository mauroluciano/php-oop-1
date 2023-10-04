<?php

require_once __DIR__ . '/Movie.php';
require_once __DIR__ . '/Genere.php';
require_once __DIR__ . '/TvSerie.php';

require __DIR__ . '/Data.php';

$genere1 = new Genere ('Fantasy');
$genere2 = new Genere ('Dark');
$genere3 = new Genere ('sitcom');
$genere4 = new Genere ('sitcom2');

$myMovie = new Movie ('Signore degli Anelli', $genere1, 90 );
$myMovie2 = new Movie ('Batman', $genere2, 100);
$mySerie = new TvSerie ('The Walkin Dead', $genere3, 177);
$mySerie2 = new TvSerie ('breakin bad', $genere4, 70);

$movies = [$myMovie, $myMovie2];
$tvSeries = [$mySerie, $mySerie2];

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
<div class="container">
<?php foreach($tvSeries as $serie): ?>
<div class="card  me-3"  style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Titolo: <?php echo $serie->titolo ?></h5>
    <p class="card-text">Genere: <?php echo $serie->genere->nome ?></p>
    <p class="card-text">N° episodi: <?php echo $serie->numEpisodi ?></p>

  </div>
</div>

        <?php endforeach ?>
</div>
</body>
</html>