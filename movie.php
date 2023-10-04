<?php


class Movie {
public $titolo;
public $genere;
public $durata;


public function __construct (
    string $titolo,
    Genere $genere,
    int $durata,
){
$this->titolo = $titolo;
$this->genere = $genere;
$this->durata = $durata;
}
}




?>