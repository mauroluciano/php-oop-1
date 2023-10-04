<?php
require_once __DIR__ . '/Production.php';


class Movie extends Production {
public $durata;

// quando creo un nuovo film prende questi dati
public function __construct (
    string $titolo,
    Genere $genere,
    int $durata,
){
 // passa i dati a production
parent::__construct(
    $titolo,
    $genere,
);
$this->durata = $durata;
}
};




?>