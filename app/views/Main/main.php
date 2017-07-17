<?php defined('BASEPATH') or exit('No se permite acceso directo'); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Main</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>

  <nav class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">Developero</a>
      </div>

      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?= FOLDER_PATH . '/main/form' ?>">Add client</a></li>
        <li><a href="<?= FOLDER_PATH . '/main/clientsList' ?>">Clients list</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?= $email ?> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/php-mvc/main/logout">Cerrar sesión</a></li>
          </ul>
        </li>
      </ul>

    </div>
  </nav>

  <div class="container">
    <?php !empty($show_form) ? require 'app/views/Main/form.php' : '' ?>
    <?php !empty($show_edit_form) ? require 'app/views/Main/edit_form.php' : '' ?>
    <?php !empty($show_clients_list) ? require 'app/views/Main/clients_list.php' : '' ?>
  </div>

  <!-- Jquery  -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>