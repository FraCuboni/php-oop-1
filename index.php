<?php
require_once __DIR__ . '/Movie.php';
//classe


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
                        <h5><?php echo $movie->title ?></h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><?php echo $movie->director ?></li>
                        <li class="list-group-item"><?php echo $movie->genre ?></li>
                        <li class="list-group-item">Main Actors:</li>
                        <li class="list-group-item">
                            <ul class="list-group list-group-flush">
                                <?php
                                foreach ($movie->actors as $actor):
                                ?>
                                    <li class="list-group-item"><?php echo $actor ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- fine foreach -->
            <?php endforeach; ?>
        </div>
    </div>

</body>

</html>