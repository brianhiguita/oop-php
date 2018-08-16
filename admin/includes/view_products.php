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
  </tbody>
</table>
