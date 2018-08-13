<?php
session_start();

include "db_config.php";


	class User {

			public $connection;

			// connect to database whenever object is called

			public function __construct() {
				$this->connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

				if (!$this->connection) {
					die("failed to connect to database");
				}
			}

			/**
			* Register Query
			*/

			public function userRegister($username, $password) {
				$password = md5($password);
				$add_user_query = mysqli_query($this->connection, "INSERT INTO users (username, password) VALUES ('$username', '$password')");
				return $add_user_query;

			}

			/**
			* @return True if existing user can be found in database, Sets Sessions variables for user details
			*/

			public function login($username, $password) {

				$login_query = "SELECT * FROM users WHERE password ='".md5($password)."' AND username ='".$username."'";

				$result = mysqli_query($this->connection, $login_query);
				$user_data = mysqli_fetch_assoc($result);
				$num_rows = mysqli_num_rows($result);

				if ($num_rows == 1) {
					$_SESSION['login'] = true;
          $_SESSION['uid'] = $user_data['id'];
          $_SESSION['username'] = $user_data['username'];
					echo $_SESSION['username'];
					return TRUE;
				} else {
					echo "user does not exists";
					return FALSE;
				}

			}

			/**
			* @return True if user is does not exists
			*/

			public function isUserExist($username) {
				$check_user_query = mysqli_query($this->connection, "SELECT * FROM users WHERE username = '$username'");
				echo $row = mysqli_num_rows($check_user_query);
				if ($row < 1) {
					return TRUE;
				} else {
					return FALSE;
				}
			}


	}

 ?>
