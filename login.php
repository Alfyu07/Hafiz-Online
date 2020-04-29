<?php 
require 'functions.php';
if(isset($_POST["login"])){
  $username = $_POST["username"];
  $password = $_POST["password"];

  $result = mysqli_query($conn,"SELECT * FROM user where username = '$username'");
  
  //cek $username
  if (mysqli_num_rows($result)===1){
    //cek password
    $row = mysqli_fetch_assoc($result);
    if(password_verify($password,$row["password"])){
      header("Location: index.php");
      exit;
    }
  }
  $error = true;
}


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="./registrasi.css"> 
    <title>Login!</title>
  </head>
  <body>
    <nav>
      <h1><a href="index.php" class ="title">HafizQuran</a></h1>
    </nav>
    <main>
      
    <div class="banner">
      <img src="./Asset/reading-quran-nigth-ramadhan-illustration_19181-27-removebg-preview (1).png" alt="">
    </div>
    <div class="form-input">
    <h1>Hello,<br>Welcome back!</h1>

    <?php if(isset($error)): ?>
      <p style="color:red; font-style:italic">username / password salah</p>
    <?php endif; ?>

    <form action="" method="post">
      <ul>
        <li>
          <input type="text" name="username" id="username" placeholder="Type your username here..">
        </li>
        <li>
          <input type="password" name="password" id="password" placeholder="Type your password here..">
        </li>
        <li class="remember">
          <label class="container">Remember me

            <input type="checkbox"  >
            <span class="checkmark"></span>
          </label>
        </li>
        <li id="forgot">Forgot your password</li>
        <li>
          <button type="submit" name="login">Register!</button>
        </li>

      </ul>
    </form>
    </div>
    </main>
  </body>
</html>