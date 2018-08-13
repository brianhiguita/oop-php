<?php include "includes/header.php"; ?>
<?php include "includes/nav.php"; ?>



<?php

$obj = new User;

if (isset($_POST['login'])) {

  $username = $_POST['username'];
  $password = $_POST['password'];

  if (empty($username) || empty($password)) {
    echo "please fill both fields";
  } else {
    $obj->login($username, $password);
  }


}

?>


<div class="container">
  <div class="row">
    <div class="col-md-6 register">

      <form class="" action="" method="post">
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username" placeholder="Enter email">
        </div>

        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Password">
        </div>

        <button type="submit" name="login" class="btn btn-primary">Sign In</button>
      </form>

    </div>
  </div>
</div>



<?php include "includes/footer.php"; ?>
