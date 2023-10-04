<?php
require_once __DIR__ . '/Production.php';


class TvSerie extends Production {
public $numEpisodi;

// quando creo un nuovo film prende questi dati
public function __construct (
    string $titolo,
    Genere $genere,
    int $numEpisodi,
){
 // passa i dati a production
parent::__construct(
    $titolo,
    $genere,
);
$this->numEpisodi = $numEpisodi;
}
};




?>