<?php
class Movie
{
    // valori delle istanze (o oggetti)
    public $title;
    public $director;
    public $genre;
    public $actors = [];

    // costruttore
    public function __construct($title, $director, $genre, $actors = [])
    {
        $this->title = $title;
        $this->director = $director;
        $this->genre = $genre;
        $this->actors = $actors;
    }

    // creo funzioni per ottenere info del film
    public function getMovieTitle()
    {
        return $this->title;
    }
    public function getMovieDirector()
    {
        return $this->director;
    }
    public function getMovieGenre()
    {
        return $this->genre;
    }
    public function getMovieActors()
    {
        return $this->actors;
    }
}

// creazione manuale di un istanza
// $parasite = new Movie();
// $parasite->title = 'Parasite';
// $parasite->director = 'Bong Joon-ho';
// $parasite->genre = 'Thriller';

// creazione 'automatica' di un istanza con il costruttore

// creo array di film per ciclare con [i]
$moviesArray = [
    // creazione 'automatica' di un istanza con il costruttore
    $pulpFiction = new Movie(
        'Pulp Fiction',
        'Quentin Tarantino',
        'Thriller',
        ['John Travolta', 'Uma Thurman', 'Samuel L. Jackson']
    ),
    $aSpaceOdissey = new Movie(
        '2001 - a space odissey',
        'Stanley Kubrick',
        'Sci-Fi',
        ['Keir Dullea', 'Gary Lockwood', 'William Sylvester']
    ),
    $parasite = new Movie(
        'Parasite',
        'Bong Joon-ho',
        'Thriller',
        ['Song Kang-ho', 'Lee Sun-kyun', 'Cho Yeo-jeong']
    ),
    $goodFellas = new Movie(
        'GoodFellas',
        'Martin Scorsese',
        'Thriller',
        ['Ray Liotta', 'Robert De Niro', 'Joe Pesci']
    ),
    $theGrandBudapestHotel = new Movie(
        'The Grand Budapest Hotel',
        'Wes Anderson',
        'Commedy',
        ['Ralph Fiennes', 'F. Murray Abraham', 'Mathieu Amalric']
    ),
    $bigFish = new Movie(
        'Big Fish',
        'Tim Burton',
        'Adventure',
        ['Ewan McGregor', 'Albert Finney', 'Jessica Lange']
    ),
    $jurassicPark = new Movie(
        'Jurassic Park',
        'Steven Spielberg',
        'Sci-Fi',
        ['Sam Neill', 'Laura Dern', 'Jeff Goldblum']
    ),

    $nosferatu = new Movie(
        'Nosferatu',
        'F.W. Murnau',
        'Horror',
        ['Max Schreck', 'Gustav von Wangenheim', 'Greta Schroeder']
    )
];
