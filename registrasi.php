<?php 
require 'functions.php';
if(isset($_POST["register"])){
  if(registrasi($_POST)>0){
    echo "<script>
        alert('user baru berhasil ditambahkan!');
      </script>";
  }else{
    echo mysqli_error($conn);
  }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="./css/registrasi.css"> 
    <title>Registrasi!</title>
    
  </head>
  <body>
    
    <nav>
      <h1><a href="index.php" class ="title">HafizQuran</a></h1>
    </nav>
    <main>
      <div class="banner" style="margin: 0;">
        <img src="./Asset/reading-quran-nigth-ramadhan-illustration_19181-27-removebg-preview (1).png" alt="">
      </div>
      <div class="form-input" ">
        <h1 style="left:0.1rem">Ready to Join Us?</h1>
        <div id="error" style="color:red; font-style:italic"></div>
        <form action="" method="post" id="registrasi">
      <ul>
        <li>
          <input type="text" name="username" autocomplete="on" id="username" placeholder="Type your username here.." >
        </li>
        <li>
          <input type="email" name="email" autocomplete="on" id="email" placeholder="Type your email here..">
        </li>
        <li>
          <input type="password" name="password" autocomplete="on" id="password" placeholder="Type your password here..">
        </li>
        <li>
          <input type="password" name="password2" autocomplete="on" id="password2" placeholder="Type your password here..">
        </li>
        <li class="remember">
          <label class="container">I agree with term and condition
            <input type="checkbox"  >
            <span class="checkmark"></span>
          </label>
        </li>
        <li>
          <button type="submit" name="register" style="border-top:2rem;">Register!</button>
        </li>
      </ul>
    </form>
    </div>
    <script
			src="https://code.jquery.com/jquery-3.4.1.min.js"
			integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
			crossorigin="anonymous"
		></script>
    <script src="./js/registrasi.js" type="text/javascript"></script>

  </body>
</html>