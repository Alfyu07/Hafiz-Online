<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="../css/profile.css" />
</head>

<body>
  <?php require "santrinavbar.php" ?>
  <div class="picture">
    <img src="../Asset/img/pp.jpeg" alt="" />
    <div class="line"></div>
    <h2>Sharah Almira Najati</h2>
    <div class="dropdown">
      <button>
        <span class="iconify" data-inline="false" data-icon="ant-design:setting-outlined"></span>
      </button>
      <div class="dropdown-content">
        <a href="./ubahprofile.html">Ubah Profile</a>
        <a href="#">Riwayat Hafalan</a>
        <a href="#">Log Out</a>
      </div>
    </div>
  </div>
  <div class="userinfo">
    <div class="contain">
      <p class="field">Tempat Tanggal Lahir</p>
      <p class="info">Hiroshima, 2 Mei 1999</p>
    </div>
    <div class="contain">
      <p class="field">Email</p>
      <p class="info">sharahmaerfoldian@gmail.com</p>
    </div>
    <div class="contain">
      <p class="field">Alamat</p>
      <p class="info">Batu Layar</p>
    </div>

    <div class="contain">
      <p class="field">No Telepon</p>
      <p class="info">0272-3912-3393</p>
    </div>
  </div>

  <footer>
    <p><span>&copy</span> HafizQuran 2020</p>
  </footer>
  <script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>
</body>

</html>