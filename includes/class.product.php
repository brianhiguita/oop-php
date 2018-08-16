<?php


class Products {

  public $connection;

  public $product_id;
  public $product_name;
  public $product_quantity;
  public $product_price;
  public $product_image;
  public $product_category;

  // connect to database whenever object is called

  public function __construct() {
    $this->connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

    if (!$this->connection) {
      die("failed to connect to database");
    }
  }

  public function query($sql) {
    $result = mysqli_query($this->connection, $sql);
    return $result;
  }

  // Display the product on public website

  public function get_product() {

    $products= $this->query("SELECT * FROM products");
    while ($row = mysqli_fetch_assoc($products)) {
      $this->product_name = $row['product_name'];
      $this->product_price = $row['product_price'];
      $this->product_quantity = $row['product_quantity'];
      $this->product_image = $row['product_image'];

      echo
        '<div class="col-md-4 image-thumb">
          <div class="product_wrapper">
            <p> Price : ' . $this->product_price . " | Quantity : " . $this->product_quantity .'</p>
            <img src="' . $this->product_image . '" class="img-responsive index-img"alt="">
            <h3>' . $this->product_name . '</h3>
          </div>
        </div>';

    }

  }


  public function get_admin_product() {

    $products= $this->query("SELECT * FROM products");
    while ($row = mysqli_fetch_assoc($products)) {
      $this->product_id = $row['product_id'];
      $this->product_name = $row['product_name'];
      $this->product_price = $row['product_price'];
      $this->product_quantity = $row['product_quantity'];
      $this->product_image = $row['product_image'];
      $this->product_category = $row['product_category'];

      echo
      '<tr>
        <th scope="row">' . $this->product_id . '</th>
        <td>' . $this->product_name . '</td>
        <td>' . $this->product_category. '</td>
        <td>' . $this->product_price. '</td>
        <td>' . $this->product_quantity . '</td>
        <td> <a href="#">update</a> </td>
        <td> <a href="#">delete</a> </td>
      </tr>';

    }

  }


}




 ?>
