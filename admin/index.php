<?php include "includes/header.php"; ?>
<?php include "includes/nav.php"; ?>





<div class="container-fluid">
  <div class="row">
    <div class="col-md-9">
      <div class="row">

        <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Category</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Delete</th>
      <th scope="col">Update</th>
    </tr>
  </thead>
  <tbody>
    <?php

    $admin_product = new Products;
    $admin_product->get_admin_product();

    ?>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton is a pain that i dont understand </td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>

        <!-- <div class="col-md-6">
          <p>gtx 1080 ti</p>
        </div>

        <div class="col-md-1">
          <p>£49.99</p>
        </div>

        <div class="col-md-1">
          <p>234</p>
        </div>

        <div class="col-md-2">
          <p>Graphics Card</p>
        </div>

        <div class="col-md-1">
          <p>UPDATE</p>
        </div>

        <div class="col-md-1">
          <p>DELETE</p>
        </div> -->

      </div>
    </div>


    <div class="col-md-3">
      <h1>side nav</h1>
    </div>


  </div>
</div>



<?php include "includes/footer.php"; ?>
