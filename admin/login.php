<?php
  require("db-connection.php");
  if(isset($_SESSION['isloggedin']) && $_SESSION['isloggedin']){
    header("location: dashboard.php");
  }
  if(isset($_POST['submit'])){
    $email = $_POST["email"];
    $password = $_POST['password'];

    $query = "SELECT * FROM login_table WHERE email='$email' && password='$password'";
    $show = mysqli_query($connection, $query);
    $count = mysqli_num_rows($show);
    if($count>0){
      $row = mysqli_fetch_assoc($show);
      $_SESSION['isloggedin'] = true;
      echo $row['email'];
      $_SESSION['username'] = $row['username'];
      header("location: dashboard.php");
    }else{
      echo "<script>alert('Incorrect email id or password!')</script>";
    }

  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <link rel="stylesheet" href="./styles/general.css">
  <link rel="stylesheet" href="./styles/login.css">
</head>
<body>
  <div class="login-container">
    <h2>Login</h2>
    <form method="post">
      <div class="input-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="input-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
      </div>
      <input class="button" type="submit" name="submit" value="Sign In">
    </form>
  </div>
</body>
</html>
