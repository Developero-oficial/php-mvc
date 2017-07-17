<?php !empty($message) ? print("<div class=\"alert alert-$message_type\">$message</div>") : '' ?>
<div class="row">
  <div class="col-md-12">
    <h2>Clients list</h2>

    <table class="table table-striped">
      <thead>
        <th>#</th>
        <th>Name</th>
        <th>Email</th>
        <th>Address</th>
        <th>Edit</th>
        <th>Remove</th>
      </thead>
      <tbody>
        <?php
        while ($row = $clients->fetch_assoc())
        {
          echo '<tr>';
          echo "<td>{$row['id']}</td>";
          echo "<td>{$row['name']}</td>";
          echo "<td>{$row['email']}</td>";
          echo "<td>{$row['address']}</td>";
          echo "<td><a href='" . FOLDER_PATH ."/main/clientList/{$row['id']}'>Edit</a></td>";
          echo "<td><a href='" . FOLDER_PATH ."/main/removeClient/{$row['id']}'>Remove</a></td>";
          echo '</tr>';
        }
        ?>
      </tbody>
    </table>

  </div>
</div>