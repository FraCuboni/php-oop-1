<?php
//classe
class Movie
{
    // valori delle istanze (o oggetti)
    public $title;
    public $director;
    public $genre;

    // costruttore
    public function __construct($title, $director, $genre)
    {
        $this->title = $title;
        $this->director = $director;
        $this->genre = $genre;
    }
}

// creazione manuale di un istanza
// $parasite = new Movie();
// $parasite->title = 'Parasite';
// $parasite->director = 'Bong Joon-ho';
// $parasite->genre = 'Thriller';

// creazione 'automatica' di un istanza con il costruttore
$pulpFiction = new Movie('Pulp Fiction', 'Quentin Tarantino', 'Thriller');
$aSpaceOdissey = new Movie('2001 - a space odissey"', 'Stanley Kubrick', 'Sci-Fi');

var_dump($pulpFiction, $aSpaceOdissey);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1><?php

        ?>
    </h1>

</body>

</html>