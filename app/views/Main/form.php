<h2>Add client form</h2>
<div class="row">
  <div class="col-md-6">
    <form method="POST" action="<?= FOLDER_PATH . '/main/addClient' ?>">
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" id="name" placeholder="Name" >
      </div>
      <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" name="email" class="form-control" id="email" placeholder="Email" >
      </div>
      <div class="form-group">
        <label for="address">Address</label>
        <input type="text" name="address" class="form-control" id="address" placeholder="Address" >
      </div>
      <?php
        !empty($message)
        ? print("<div class=\"alert alert-warning\">$message</div>")
        : ''
      ?>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>