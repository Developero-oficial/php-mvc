<?php defined('BASEPATH') or exit('No se permite acceso directo'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Home</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron">
    <div class="container text-center">
      <h1>Hola, <?= $nombre ?>!</h1>
      <p>Este es un ejemplo de MVC con Php vanilla hecho desde cero.</p>
      <p><a class="btn btn-primary btn-lg" target="_blank" href="https://github.com/Developero-oficial/php-mvc" role="button">Código fuente &raquo;</a></p>
    </div>
  </div>
</body>
</html>