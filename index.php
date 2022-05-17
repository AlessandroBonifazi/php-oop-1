<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP oop 1</title>
</head>
<body>
    <h1>Movie</h1>
    <?php
    include_once "entities/movie.php";
    foreach ($movies as $movie) {
        echo "<div>" . $movie->title ." ". $movie->director ." ". $movie->genre ." ". $movie->year ." ". "</div>";
    }
    ?>
</body>
</html>