<?php include "includes/header.php"; ?>
<?php include "includes/nav.php"; ?>



<?php
  $obj = new User;
  if (isset($_POST['register'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

    if (empty($username) || empty($password) || empty($confirmPassword)) {
      echo "one of more of the fields were left unfilled";
    } else {
      if ($password !== $confirmPassword) {
          echo "passwords do not match";
      } else {
        if ($obj->isUserExist($username)) {
          $obj->userRegister($username, $password);
          echo "created new user";
        } else {
          echo " user already exist";
        }
      }
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

        <div class="form-group">
          <label for="confirmPassworld">Confirm Password</label>
          <input type="password" class="form-control" id="confirmPassworld" name="confirmPassword" placeholder="Confirm Password">
        </div>

        <button type="submit" name="register" class="btn btn-primary">Register</button>
      </form>

    </div>
  </div>
</div>



<?php include "includes/footer.php"; ?>
