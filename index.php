<?php include "includes/header.php"; ?>
<?php include "includes/nav.php"; ?>



  <div class="container-fluid">
    <div class="row">
      <div class="col-md-9">
        <div class="row">


          <div class="col-md-4 image-thumb">
            <div class="product_wrapper">
              <p>price and quantity</p>
              <img src="https://images-na.ssl-images-amazon.com/images/I/51-6p%2BF1TPL._SX355_.jpg" class="img-responsive index-img"alt="">
              <p>header</p>
            </div>

          </div>

          <?php $product = new Products;
          $product->get_product();

           ?>


          <!-- <div class="col-md-4 image-thumb">
            <img src="https://images-na.ssl-images-amazon.com/images/I/51-6p%2BF1TPL._SX355_.jpg" class="img-responsive index-img" alt="">
          </div>

          <div class="col-md-4 image-thumb">
            <img src="https://images-na.ssl-images-amazon.com/images/I/51-6p%2BF1TPL._SX355_.jpg" class="img-responsive index-img" alt="">
          </div>

          <div class="col-md-4 image-thumb">
            <img src="https://images-na.ssl-images-amazon.com/images/I/51-6p%2BF1TPL._SX355_.jpg" class="img-responsive index-img"alt="">
          </div> -->


        </div>


      </div>
      <div class="col-md-3">
        <p>nav</p>
      </div>
    </div>
  </div>



<?php include "includes/footer.php"; ?>
