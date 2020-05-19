<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="../css/profile.css" />
  <style>
    .userinfo .contain {
      align-items: flex-start !important;
      border-bottom: none;
    }

    .userinfo .contain input {
      width: 100% !important;
      padding-left: 10px;
      font-size: 1rem !important;
      color: #333 !important;
    }

    input.info {
      font-weight: 500;
    }

    input.info.name {
      border: none;
      width: 100%;
    }

    .picture img {
      z-index: 0 !important;
    }

    .picture a {
      text-decoration: none;
      font-size: 1.2rem;
      display: flex;
      align-items: center;
      color: #333;
      ;
    }

    .picture a:hover {
      opacity: .7;
    }

    .picture .line {
      z-index: -1 !important;
    }

    .inputname {
      width: 70%;
    }

    .inputname hr {
      border: none;
      border-bottom: 2px solid rgba(0, 0, 0, 0.5);
      width: 50%;
    }

    .inputname .info.name {
      text-align: center;
      width: 100%;
      border-bottom: none !important;
      margin-top: 30px;
      font-size: 1.25rem;
      font-weight: 600;
      outline: none !important;
    }

    .userinfo .contain input.info {
      font-weight: 600;
      border-radius: 5px;
      height: 40px;
      font-size: 1.2rem;
      outline: none !important;
    }

    button.modal-btn {
      justify-self: center !important;
      width: 90% !important;

    }

    @media (min-width: 768px) {}
  </style>
  <link rel="stylesheet" href="../css/modal.css">
</head>

<body>
  <?php require "santrinavbar.php"; ?>


  <div class="picture">
    <img src="../Asset/img/pp.jpeg" alt="" />
    <a class="uploadfoto" href="">
      <span class="iconify" data-inline="false" data-icon="bx:bxs-camera-plus"></span>
      Ganti Foto Profil
    </a>
    <div class="line"></div>
    <div class="inputname">
      <input class="info name" type="text" placeholder="Masukkan nama disini"></input>
      <hr>
    </div>
  </div>
  <div class="userinfo">
    <div class="contain">
      <label class="field">Tanggal Lahir</label>
      <input type="date" class="info"></input>
    </div>
    <div class="contain">
      <label class="field">Email</label>
      <input type="email" class="info" placeholder="sharahmaerfoldian@gmail.com"></input>
    </div>
    <div class="contain">
      <label class="field">Alamat</label>
      <input type="text" class="info" placeholder="Batu Layar"></input>
    </div>
    <div class="contain">
      <label class="field">No Telepon</label>
      <input type="text" class="info" placeholder="0272-3912-3393"></input>
    </div>
    <button class="modal-btn ya" href="#">Selesai</button>
  </div>


  <div class="modal-bg">
    <div class="modal confirm">
      <strong>Apakah anda yakin?</strong>
      <div class="input">

        <a href="" class="modal-btn tidak">Tidak</a>
        <a href="" class="modal-btn ya">Ya</a>
        <div class="modal-close">
          <span class="iconify" data-inline="false" data-icon="fa-solid:times-circle" style="color: #ff2f3b; font-size: 30px;"></span>
        </div>
      </div>
    </div>
  </div>




  <footer>
    <p><span>&copy</span> HafizQuran 2020</p>
  </footer>



  <!-- All Script here -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="../js/script.js"></script>
  <script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>
</body>

</html>