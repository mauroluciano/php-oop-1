<?php

require_once __DIR__ . 'movie.php';

$myMovie = new Movie ('nome Film', [1, 2, 3], 90);

var_dump ($myMovie);

?>