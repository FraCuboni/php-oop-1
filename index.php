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

    // creo funzioni per ottenere info del film
    public function getMovieTitle()
    {
        return "Title: " . $this->title;
    }
    public function getMovieDirector()
    {
        return "Title: " . $this->director;
    }
    public function getMovieGenre()
    {
        return "Title: " . $this->genre;
    }
}

// creazione manuale di un istanza
// $parasite = new Movie();
// $parasite->title = 'Parasite';
// $parasite->director = 'Bong Joon-ho';
// $parasite->genre = 'Thriller';

// creazione 'automatica' di un istanza con il costruttore
$goodFellas = new Movie('GoodFellas', 'Martin Scorsese', 'Thriller');
$grandBudapestHotel = new Movie('Grand Budapes Hotel', 'Wes Anderson', 'Sci-Fi');
$bigFish = new Movie('Big Fish', 'Tim Burton', 'Thriller');

// creo array di film per ciclare con [i]
$moviesArray = [
    // creazione 'automatica' di un istanza con il costruttore
    $pulpFiction = new Movie('Pulp Fiction', 'Quentin Tarantino', 'Thriller'),
    $aSpaceOdissey = new Movie('2001 - a space odissey"', 'Stanley Kubrick', 'Sci-Fi'),
    $parasite = new Movie('Parasite', 'Bong Joon-ho', 'Thriller')
];
var_dump($moviesArray);
var_dump('qui invece il film', $bigFish)

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap css_framework -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="card" style="width: 18rem;">
                <div class="card-header">
                    Movie title
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Movie director</li>
                    <li class="list-group-item">Movie genre</li>
                    <li class="list-group-item">Actors</li>
                    <li class="list-group-item">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Cras justo odio</li>
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item">Morbi leo risus</li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>

</body>

</html>