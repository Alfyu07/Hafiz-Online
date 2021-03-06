<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../css/tabelhafalan.css" />
  <title>Document</title>
  <style>
    .nama {
      grid-column: auto;
    }

    .check {
      position: relative;
      display: flex;
      justify-self: center;
      align-self: center;
    }

    p.deskripsi {
      text-align: center;
    }

    .row,
    .field {
      grid-template-columns: repeat(5, 1fr);
    }
  </style>
</head>

<body>
  <?php require "santrinavbar.php" ?>
  <main>
    <aside>
      <p>Search</p>
      <input type="text">
      <label for="urut">Urutkan berdasarkan :</label>
      <select id="urut" name="urut">
        <option value="tanggal">Tanggal (terbaru)</option>
        <option value="Juz">Juz</option>
      </select>

    </aside>
    <section class="table">
      <div class="field">
        <!-- <div class="check">
          <label class="container">
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
        </div> -->
        <strong class="nama">Juz</strong>
        <strong class="tanggal">Surah</strong>
        <strong class="deskripsi">Ayat</strong>
        <strong class="tanggal">Tanggal kirim</strong>
        <strong class="nilai">Nilai</strong>
      </div>

      <!-- /ini ulang pake php nanti -->
      <div class="row">
        <!-- <div class="check">
          <label class="container">
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
        </div> -->
        <p class="tanggal">Juz 30</p>
        <p class="deskripsi">Surah At-Takasur,
          Surah Al- ‘Asr</p>
        <p class="deskripsi">42 Ayat</p>
        <p class="tanggal">17/5/2020</p>
        <p class="nilai">87</p>
      </div>
      <!-- sampe sini -->
      <div class="row">
        <!-- <div class="check">
          <label class="container">
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
        </div> -->
        <p class="tanggal">Juz 30</p>
        <p class="deskripsi">Surah At-Takasur,
          Surah Al- ‘Asr</p>
        <p class="deskripsi">42 Ayat</p>
        <p class="tanggal">17/5/2020</p>
        <p class="nilai">87</p>
      </div>
      <div class="row">
        <!-- <div class="check">
          <label class="container">
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
        </div> -->
        <p class="tanggal">Juz 30</p>
        <p class="deskripsi">Surah At-Takasur,
          Surah Al- ‘Asr</p>
        <p class="deskripsi">42 Ayat</p>
        <p class="tanggal">17/5/2020</p>
        <p class="nilai">87</p>
      </div>
      <div class="row">
        <!-- <div class="check">
          <label class="container">
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
        </div> -->
        <p class="tanggal">Juz 30</p>
        <p class="deskripsi">Surah At-Takasur,
          Surah Al- ‘Asr</p>
        <p class="deskripsi">42 Ayat</p>
        <p class="tanggal">17/5/2020</p>
        <p class="nilai">87</p>
      </div>
      <div class="row">
        <!-- <div class="check">
          <label class="container">
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
        </div> -->
        <p class="tanggal">Juz 30</p>
        <p class="deskripsi">Surah At-Takasur,
          Surah Al- ‘Asr</p>
        <p class="deskripsi">42 Ayat</p>
        <p class="tanggal">17/5/2020</p>
        <p class="nilai">87</p>
      </div>
      <div class="row">
        <!-- <div class="check">
          <label class="container">
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
        </div> -->
        <p class="tanggal">Juz 30</p>
        <p class="deskripsi">Surah At-Takasur,
          Surah Al- ‘Asr</p>
        <p class="deskripsi">42 Ayat</p>
        <p class="tanggal">17/5/2020</p>
        <p class="nilai">87</p>
      </div>
      <div class="row">
        <!-- <div class="check">
          <label class="container">
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
        </div> -->
        <p class="tanggal">Juz 30</p>
        <p class="deskripsi">Surah At-Takasur,
          Surah Al- ‘Asr</p>
        <p class="deskripsi">42 Ayat</p>
        <p class="tanggal">17/5/2020</p>
        <p class="nilai">87</p>
      </div>
    </section>

  </main>
  <footer>
    <p><span>&copy</span> HafizQuran 2020</p>
  </footer>

  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="../js/script.js"></script>
</body>

</html>