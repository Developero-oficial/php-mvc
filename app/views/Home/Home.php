<!DOCTYPE html>
<html>
<head>
  <title>Home</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <div class="jumbotron">
      <h1>Hola <?php echo $nombre; ?></h1>
    </div>
    <div>
      <ul>
        <?php
        foreach($lenguajes as $lenguaje)
        {
          echo "<li>$lenguaje</li>";
        }
        ?>
      </ul>
    </div>
  </div>
</body>
</html>