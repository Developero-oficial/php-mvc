<h2>Edit client form</h2>
<?php !$info_client ? exit('Hubo un error al cargar la información del cliente') : '' ?>
<div class="row">
  <div class="col-md-6">
    <form method="POST" action="<?= FOLDER_PATH . '/main/updateClient' ?>">
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" id="name" placeholder="Name" value="<?= $info_client->name ?>">
      </div>
      <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" name="email" class="form-control" id="email" placeholder="Email" value="<?= $info_client->email ?>">
      </div>
      <div class="form-group">
        <label for="address">Address</label>
        <input type="text" name="address" class="form-control" id="address" placeholder="Address" value="<?= $info_client->address ?>">
      </div>
      <input type="hidden" name="id" value="<?= $info_client->id ?>">
      <button type="submit" class="btn btn-primary">Submit</button>
      <a class="btn btn-default" href="<?= FOLDER_PATH . '/main/clientsList' ?>" role="button">Cancel</a>
    </form>
  </div>
</div>