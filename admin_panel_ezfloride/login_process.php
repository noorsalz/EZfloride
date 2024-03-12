<?php
var_dump($_POST);

session_start();
include_once "./config/dbconnect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['user_address'];
   // $password = $_POST['password'];

    // Validate username and password against database
  /*   $query = "SELECT * FROM users WHERE user_address='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
        // Username and password are correct, set session variable
        $_SESSION['loggedin'] = true;
        header("Location: index.php");
        //admin_panel/index.php if login processes are not inside admin panel
        //index.php if login processes are inside admin panel
        exit;
    } else {
        // Username or password is incorrect
        echo "Invalid username or password";
        //header("Location: login.html");
    }
} */

  // Validate username against database
  $query = "SELECT * FROM users WHERE user_address='$username'";
  $result = mysqli_query($conn, $query);
  if ($result && mysqli_num_rows($result) == 1) {
      // Username is correct, set session variable
      $_SESSION['loggedin'] = true;
      $_SESSION['expire_time'] = time() + 3600; 
      header("Location: index.php");
      exit;
  } else {
      // Username is incorrect
      echo "Invalid username";
      header("Location: login_error.html");
  }
}
?>
