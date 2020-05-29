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
  <?php require "navbar.php"; ?>

  <main class="quran-container">
    <?php foreach ($quran as $surah) : ?>
      <a href="quran.php" class="ayat card">

        <li class="no-ayat"><?php echo $surah["suraId"]; ?></li>
        <li class="surahIndo">
          <?php echo ucfirst($surah["surat_indonesia"]); ?>
          <label class="container">
            <!-- dia checked kalo surahnya berhasil dia hafal -->
            <input type="checkbox" checked="checked">
            <span class="checkmark"></span>
          </label>
        </li>

        <li class="terjemah"><?php echo ucwords($surah["arti"]); ?></li>
      </a>
    <?php endforeach; ?>



  </main>
  <footer>
    <p><span>&copy</span> HafizQuran 2020</p>
  </footer>

  <script src="./js/script.js" defer></script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</body>

</html>