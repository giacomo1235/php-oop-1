<?php
class Movie
{
    private string $title;
    private string $original_title;
    private string $country;
    private string $locandina;
    private string $voto;
    private string $cast;

    public function __construct($_title, $_cast) {
        $this->title = $_title;
        $this->cast = $_cast;
    }
}

$saloele120giornatedisodoma = new Movie ('salo e le 120 giornate di sodoma', 'giorgio cataldi');
$noneunpaesepervecchi = new Movie ('no country for old men','boooo');
var_dump($noneunpaesepervecchi);
