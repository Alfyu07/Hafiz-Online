<!DOCTYPE html>
<?php
	require '../functions.php';
	$id = $_SESSION["id_user"];
	$user = query("SELECT * FROM santri WHERE id_santri = '$id'");
	#var_dump ($user);
?>
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
    <h2>
	<?php echo $user[0]["name"]; ?>
	</h2>
    <div class="dropdown">
      <button>
        <span class="iconify" data-inline="false" data-icon="ant-design:setting-outlined"></span>
      </button>
      <div class="dropdown-content">
        <a href="./ubahprofile.php">Ubah Profile</a>
        <a href="listhafalan.php">Riwayat Hafalan</a>
        <a href="../logout.php">Log Out</a>
      </div>
    </div>
  </div>
  <div class="userinfo">
    <div class="contain">
      <p class="field">Tanggal Lahir</p>
      <p class="info">
	  <?php 
	  if(!isset($user[0]["birth_date"])){echo "Belum diatur";} 
	  else {echo $user[0]["birth_date"];} #Hiroshima, 2 Mei 1999
	  ?>
	  </p>
    </div>
    <div class="contain">
      <p class="field">Email</p>
      <p class="info">
	  <?php 
	  if(!isset($user[0]["email"])){echo "Belum diatur";} 
	  else {echo $user[0]["email"];} #sharahmaerfoldian@gmail.com
	  ?>	  
	  </p>
    </div>
    <div class="contain">
      <p class="field">Alamat</p>
      <p class="info">
	  <?php 
	  if(!isset($user[0]["address"])){echo "Belum diatur";} 
	  else {echo $user[0]["address"];} #Batu Layar
	  ?>		  	  
	  </p>
    </div>

    <div class="contain">
      <p class="field">No Telepon</p>
      <p class="info">
	  <?php 
	  if(!isset($user[0]["phone_number"])){echo "Belum diatur";} 
	  else {echo $user[0]["phone_number"];} #0272-3912-3393
	  ?>	  
	  </p>
    </div>
  </div>

  <footer>
    <p><span>&copy</span> HafizQuran 2020</p>
  </footer>
  <script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>
</body>

</html>