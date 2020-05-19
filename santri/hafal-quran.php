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
$bismillah = query("SELECT * FROM quran_id where id = 0")

?>


<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="../css/modal.css">
  <link rel="stylesheet" href="../css/quran.css" />

  <style>
    #bismillah .no-ayat {
      display: none;
    }

    #bismillah .play {
      display: none
    }

    .quran-container {
      height: 80vh;
      widows: 90%;
      overflow-y: scroll;
      overflow-x: hidden;
      border-bottom: 2px solid #c4c4c4;
    }

    .ayat {
      max-width: 98%;
      margin: 1.5rem auto;
    }

    .ayat:hover {
      transform: none;
    }

    .rekam {
      display: flex;
      flex-direction: column;
      justify-content: stretch;
      width: 100%;
      margin-top: 20px;
    }

    .rec {
      display: flex;
      flex-direction: row;
      justify-content: flex-end;
    }

    .modal-btn.ya {
      display: flex;
      justify-content: center;
      align-self: flex-end;
      margin-right: 0;
    }

    .modal .title {
      margin: 0;
    }
  </style>
  <title>HafizQuran</title>
</head>

<body>
  <?php require "santrinavbar.php" ?>
  <main class="quran-container">
    <?php
    /* prev buat cek apa di nama surah x pernah di print atau ndak */
    $prev = 0;
    /* i buat ngambil nama surah di variabel nama surah */
    $i = 0;
    foreach ($quran as $ayat) : ?>

      <!-- kalo id surah pada ayat x tidak sama dengan id surah pada ayat sebelumnya maka print nama surah -->
      <?php if ($ayat['suraId'] != $prev) : ?>
        <header class="surah title"><?php echo $namasurah[$i]['surat_indonesia'] ?> </header>

        <?php if ($ayat['suraId'] != 9 && $ayat['verseID'] == 1) : ?>
          <ul class="ayat card " id="bismillah">
            <li class="no-ayat">

              <?php echo $bismillah[0]["verseID"]; ?></li>

            <li class="play"><span class="iconify" data-inline="false" data-icon="bi:play-fill"></span>play</li>

            <li class="ayatquran">
              <?php echo $bismillah[0]["ayahText"];
              ?></li>
            <li class="latin"><?php echo $bismillah[0]["readText"]; ?></li>
            <li class="terjemah"><?php echo $bismillah[0]["indoText"]; ?></li>
          </ul>
        <?php endif ?>
        <!-- increment untuk i dan memperbarui nilai prev -->
      <?php $i++;
        $prev = $ayat['suraId'];
      endif ?>

      <ul class="ayat card">
        <li class="no-ayat"><?php echo $ayat["verseID"]; ?></li>
        <li class="play">
          <div class="player">
            <audio class="plyr-audio">
              <source src="../Asset/ayat/<?= $ayat["id"] ?>.mp3" type="audio/mp3" />
            </audio>
            <button class="plymedia" id="play"><span class="iconify" data-inline="false" data-icon="bi:play-fill"></span>
              play</button>
          </div>
        </li>
        <li class="ayatquran">
          <?php echo $ayat["ayahText"];
          ?></li>
        <li class="latin"><?php echo $ayat["readText"]; ?></li>
        <li class="terjemah"><?php echo $ayat["indoText"]; ?></li>
      </ul>
    <?php endforeach; ?>

    <script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>
  </main>

  <!-- Pop Up -->
  <div class="submit">
    <button class="modal-btn tidak">Selesai</button>
    <button class="modal-btn ya">Setor Hafalan</button>
  </div>
  <div class="modal-bg">
    <div class="modal confirm">
      <strong>Apakah anda yakin?</strong>
      <div class="input">
        <button class="modal-btn tidak">Tidak</button>
        <button class="modal-btn ya">Ya</button>
        <div class="modal-close">
          <span class="iconify" data-inline="false" data-icon="fa-solid:times-circle" style="color: #ff2f3b; font-size: 30px;"></span>
        </div>
      </div>
    </div>

    <div class="modal setor">
      <header class="surah title">Al-Zalzalah : 4 - Al-Qariah : 4</header>
      <div class="input">
        <form action="" class="rekam">
          <div class="rec">
            <input type="text">
            <span class="iconify" data-inline="false" data-icon="bi:mic-fill" style="font-size: 31.129005432128906px;"></span>
          </div>
          <label for="deskripsi">Deskripsi</label>
          <textarea name="" id="deskripsi" cols="30" rows="4"></textarea>
          <button class="modal-btn ya">Setor Hafalan</button>

        </form>

        <div class="modal-close">
          <span class="iconify" data-inline="false" data-icon="fa-solid:times-circle" style="color: #ff2f3b; font-size: 30px;"></span>
        </div>
      </div>

    </div>
  </div>
  <footer>
    <p><span>&copy</span> HafizQuran 2020</p>
  </footer>
  <script src="../js/script.js" defer></script>

  <script src="../js/modal.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</body>

</html>