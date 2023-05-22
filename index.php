<?php
require_once __DIR__ . '/models/movie.php';

$arrayMovies = [
    new Movie ('Php alla riscossa', 'Thriller', '2023'),
    new Movie ('Paradise london', 'Action', '2015'),
    new Movie ('Paris of country', 'Thriller', '2018'),
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css'
    integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA=='
    crossorigin='anonymous' />
  <title>Php-OOP-Movies</title>
</head>

<body>
  <div class="container my-5">
    <h1>Movies</h1>


    <table class="table">
      <thead>
        <tr>
          <th scope="col">Titolo</th>
          <th scope="col">Genere</th>
          <th scope="col">Anno</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($arrayMovies as $Movie) : ?>
        <tr>
          <th scope="row"><?php echo $Movie->title ?></th>
          <td><?php echo $Movie->genere ?></td>
          <td><?php echo $Movie->releaseDate ?></td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</body>

</html>