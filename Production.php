<?php

class Production {
public $titolo;
public $genere;


public function __construct (
    string $titolo,
    Genere $genere,
){
$this->titolo = $titolo;
$this->genere = $genere;
}
}




?>