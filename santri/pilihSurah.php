<?php
require 'functions.php';
$quran = query('SELECT * FROM DaftarSurat');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/daftarSurah.css">
  <title>Daftar Surat</title>
</head>

<body>
  <header>
    <!-- Navigasi -->
    <nav class="navbar">
      <div class="brand-title">HafizQuran</div>
      <a href="#" class="toggle-button">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
      </a>
      <div class="navbar-links">
        <ul>
          <li><a href="../daftarSurah.php">Baca Quran</a></li>
          <li><a href="/hafal-quran.php">Tahfiz</a></li>
          <li><a href="/quiz.html">Murajaah</a></li>
          <li><a href="../list-artikel.php">Artikel dan Event</a></li>
          <li><a href="../registrasi.php" class="btn-primary" id="signUp">Sign Up</a></li>
          <li><a href="../login.php" id="login-text">Login</a></li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Akhir dari navigasi -->

  <main>
    <a href=""></a>
  </main>
  <footer>
    <p><span>&copy</span> HafizQuran 2020</p>
  </footer>

  <script src="./js/script.js" defer></script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</body>

</html>