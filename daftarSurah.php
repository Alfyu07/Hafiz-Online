<?php
require 'functions.php';
$quran = query('SELECT * FROM DaftarSurat');
?>
<h1 class="daftar-title">Daftar Surah</h1>
<main class="daftar-container">
  <?php foreach ($quran as $surah) : ?>
    <a href="index.php?halaman=quran&id=<?= $surah['suraId'] ?> " class="ayat card">

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
<script src="./js/script.js" defer></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</body>