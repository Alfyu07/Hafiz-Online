<?php
require 'functions.php';
if (isset($_POST["register"])) {
  if (insSantri($_POST) > 0) {
    echo "
      <script>
        alert('Registrasi Berhasil!');
        window.location.href = '/login.php';
      </script>";
  } else {
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

  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,600;0,700;0,800;1,500&display=swap" rel="stylesheet">
</head>

<body>

  <nav>
    <h1><a href="./index.php" class="title">HafizQuran</a></h1>
  </nav>
  <main>
    <div class="banner card" style="margin: 0;">
      <img src="./Asset/img/reading-quran-nigth-ramadhan-illustration_19181-27-removebg-preview (1).png" alt="">
    </div>
    <div class="form-input card">
      <h1 style=" left:0.1rem">Ready to Join Us?</h1>
      <div id="error" style="color:red; font-style:italic"></div>
      <form action="" method="post" id="registrasi">
        <ul>
          <li>
            <input type="text" name="username" autocomplete="on" id="username" placeholder="Username" required>
          </li>
          <li>
            <input type="email" name="email" autocomplete="on" id="email" placeholder="Email" required>
          </li>
          <li>
            <input type="password" name="password" autocomplete="on" id="password" placeholder="Password" required>
          </li>
          <li>
            <input type="password" name="password2" autocomplete="on" id="password2" placeholder="Password Konfirmasi" required>
          </li>
          <li class="remember">
            <label class="container">I agree with term and condition
              <input type="checkbox">
              <span class="checkmark"></span>
            </label>
          </li>
          <li>
            <button type="submit" name="register" class="submit" style="border-top:2rem;">Register!</button>
          </li>
        </ul>
      </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="./js/registrasi.js" type="text/javascript"></script>
</body>

</html>