<?php


class Products {

  public $connection;

  public $product_name;
  public $product_quantity;
  public $product_price;
  public $product_image;

  // connect to database whenever object is called

  public function __construct() {
    $this->connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

    if (!$this->connection) {
      die("failed to connect to database");
    }
  }

  public function get_product() {

    $products= $this->query("SELECT * FROM products");
    while ($row = mysqli_fetch_assoc($products)) {
      $this->product_name = $row['product_name'];
      $this->product_price = $row['product_price'];
      $this->product_quantity = $row['product_quantity'];
      $this->product_image = $row['product_image'];

      // echo '<div class="col-md-4 image-thumb">';
      // echo $this->product_name;
      // echo '<img src="{product_name}" class="img-responsive index-img"alt=""></div>';

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

  public function query($sql) {
    $result = mysqli_query($this->connection, $sql);
    return $result;
  }





}




 ?>
