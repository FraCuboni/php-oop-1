<?php
// link del progetto php contenente i dati
require_once __DIR__ . '/Movie.php';
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
            <!-- inizio foreach -->
            <?php
            foreach ($moviesArray as $movie):
            ?>
                <div class="card" style="width: 18rem;">
                    <div class="card-header">
                        <h5><?php echo $movie->getMovieTitle() ?></h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><?php echo $movie->getMovieDirector() ?></li>
                        <li class="list-group-item"><?php echo $movie->getMovieGenre() ?></li>
                        <li class="list-group-item">Main Actors:</li>
                        <li class="list-group-item">
                            <ul class="list-group list-group-flush">
                                <!-- inizio foreach attori -->
                                <?php foreach ($movie->getMovieActors() as $actor): ?>
                                    <li class="list-group-item"><?php echo $actor ?></li>
                                <?php endforeach; ?>
                                <!-- fine foreach attori -->
                            </ul>
                        </li>
                    </ul>
                </div>
            <?php endforeach; ?>
            <!-- fine foreach -->
        </div>
    </div>
</body>

</html>