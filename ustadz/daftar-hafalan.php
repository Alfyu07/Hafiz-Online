<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../css/tabelhafalan.css" />
  <title>Document</title>
</head>

<body>
  <?php require "ustadznavbar.php" ?>




  <main>
    <section class="table">
      <div class="field">
        <strong class="nama">Nama</strong>
        <strong class="tanggal">Tanggal</strong>
        <strong class="deskripsi">Deskripsi Hafalan</strong>
        <strong class="nilai">Nilai</strong>
      </div>

      <!-- /ini ulang pake php nanti -->
      <div class="row">
        <img src="../Asset/img/pp.jpeg" alt=""></img>
        <a href="" class="nama">Wahyu Alfandi</a>
        <time class="tanggal">17/5/2020</time>
        <div class="deskripsi">
          <p>Juz 30</p>
          <p>Surah At-Takatsur : 1 - Al'Ashr : 3</p>
        </div>
        <p class="nilai">Belum Dinilai</p>
      </div>
      <!-- sampe sini -->
      <div class="row">
        <img src="../Asset/img/pp.jpeg" alt=""></img>
        <a href="" class="nama">Izumi Kazuhita</a>
        <time class="tanggal">17/5/2020</time>
        <div class="deskripsi">
          <p>Juz 30</p>
          <p>Surah At-Takatsur : 1 - Al'Ashr : 3</p>
        </div>
        <p class="nilai">Belum Dinilai</p>
      </div>
      <div class="row">
        <img src="../Asset/img/pp.jpeg" alt=""></img>
        <a href="" class="nama">Zikry Ramadhan</a>
        <time class="tanggal">17/5/2020</time>
        <div class="deskripsi">
          <p>Juz 30</p>
          <p>Surah At-Takatsur : 1 - Al'Ashr : 3</p>
        </div>
        <p class="nilai">Belum Dinilai</p>
      </div>

      <div class="row">
        <img src="../Asset/img/pp.jpeg" alt=""></img>
        <a href="" class="nama">Wahyu Alfandi</a>
        <time class="tanggal">17/5/2020</time>
        <div class="deskripsi">
          <p>Juz 30</p>
          <p>Surah At-Takatsur : 1 - Al'Ashr : 3</p>
        </div>
        <p class="nilai">Belum Dinilai</p>
      </div>
      <div class="row">
        <img src="../Asset/img/pp.jpeg" alt=""></img>
        <a href="" class="nama">Sharah Almira Najati</a>
        <time class="tanggal">17/5/2020</time>
        <div class="deskripsi">
          <p>Juz 30</p>
          <p>Surah At-Takatsur : 1 - Al'Ashr : 3</p>
        </div>
        <p class="nilai">Belum Dinilai</p>
      </div>
    </section>
    <aside>
      <p>Search</p>
      <input type="text">
      <label for="urut">Urutkan berdasarkan :</label>
      <select id="urut" name="urut">
        <option value="tanggal">Tanggal (terbaru)</option>
        <option value="Juz">Juz</option>
      </select>

      <p>Tampilkan : </p>
      <label class="container">
        <input type="radio" checked="checked" name="radio" />Sudah dinilai
        <span class="checkmark"></span>
      </label>
      <label class="container">
        <input type="radio" name="radio" value="1" />Belum dinilai
        <span class="checkmark"></span>
      </label>

      <button type="submit" class="primary-btn">Refresh</button>
    </aside>
  </main>
  <footer>
    <p><span>&copy</span> HafizQuran 2020</p>
  </footer>

  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="../js/script.js"></script>
</body>

</html>