<?php
require '../functions.php';
$fromsurah = 99; // dipilih dari surah sekian ini mungkin nanti pake method get
$tosurah = 101; //sampe surah sekian
$fromayat = 4; // dari from surah ayat sekian
$toayat = 4; //sampe from surah ayat sekian

// Mengambil id ayat awal
$idfrom = query("SELECT id from quran_id where suraId = '$fromsurah' and verseID = '$fromayat'")[0]['id'];
// echo $idfrom;
// Mengambil id ayat akhir
$idto =  query("SELECT id from quran_id where suraId = '$tosurah' and verseID = '$toayat'")[0]['id'];

/* Mengambil keseluruhan ayat dari ayat awal sampe akhir walaupun bisa jadi beda surat*/
$quran = query("SELECT * from quran_id where id BETWEEN '$idfrom' and '$idto'");
/* Mengambil nama surat */
$namasurah = query("SELECT surat_indonesia from DaftarSurat where suraId between '$fromsurah' and '$tosurah'");

// Mengambil bismillah 
$bismillah = query("SELECT * FROM quran_id where id = 0");
// var_dump($quran);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.plyr.io/3.6.2/plyr.css" />

  <link rel="stylesheet" href="../css/periksa.css" />
</head>

<body>
  <?php require "ustadznavbar.php" ?>
  <main id="periksa">
    <h1 class="title">Periksa hafalan</h1>
    <div class="user-info">
      <img src="../Asset/img/pp.jpeg" alt="" class="profile-photo" />
      <div class="centered">
        <h4 class="username">Maerfold</h4>
        <time class="waktu">5/16/2020</time>
      </div>
      <h5 id="ket-hafalan">
        Juz 30<br />Surah At-Takatsur : 1 sampai Surah Al-'Asr : 3
      </h5>
    </div>
    <div class="plyr-container">
      <audio id="player" controls>
        <source src="../Asset/Rekam003.wav" type="audio/mp3" />
        <source src="../Asset/Rekam003.wav" type="audio/ogg" />
      </audio>
    </div>
    <section class="view">
      <div class="hafalan">
        <div class="komentar">
          <h3>Komentar</h3>
          <p>
            Guten Tag This is my first time doing this such thing blabla..
            Sekian Thanks
          </p>
        </div>

        <div class="quran">
          <button type="button" class="collapsible">Ayat Alquran</button>
          <ul class="content">
            <?php
            $prev = 0;
            $i = 0;
            ?>
            <?php foreach ($quran as $ayat) : ?>

              <?php if ($ayat['suraId'] != $prev) : ?>
                <?php if ($ayat['suraId'] != 9 && $ayat['verseID'] == 1) : ?>
                  <li class="ayat"><?php echo $bismillah[0]['ayahText'] ?></li>
                <?php endif ?>
              <?php
                $i++;
                $prev = $ayat['suraId'];
              endif ?>
              <li class="ayat"><?php echo $ayat["ayahText"]; ?></li>
            <?php endforeach ?>
          </ul>
        </div>
      </div>
    </section>
    <section class="review">
      <form action="">
        <label for="nilai">Nilai</label>
        <input type="number" name="nilai" id="nilai" value="80" min="0" max="100" step="5" />
        <label for="deskripsi">
          Komentar
        </label>
        <textarea name="deskripsi" id="deskripsi" cols="30" rows="10"></textarea>

        <button class="primary-btn" type="submit">Kirim</button>
      </form>
    </section>
  </main>

  <footer>
    <p><span>&copy</span> HafizQuran 2020</p>
  </footer>

  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="./js/script.js"></script>
  <script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>
  <script src="../js/script.js"></script>

  <script src="https://cdn.plyr.io/3.6.2/plyr.js"></script>
  <script>
    const player = new Plyr("#player");
  </script>
</body>

</html>