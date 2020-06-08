<?php
	$id = 0;
	$nama = "";
	$tabel = 0; #id tentuin tabel, 1 = ustadz, 2 = santri
	if ( isset($_GET['id_ustadz'])){
		$id = $_GET['id_ustadz'];
		$sql = "SELECT * FROM ustadz WHERE id_ustadz='$id'";
		$tabel = 1;
		$user = query($sql);
		if(isset($_POST['submit'])){
			if($tabel==1){
				#echo "<script>window.alert('sukses');</script>";
				$sql = updUstadz($_POST, $id);
				header('Location: admin.php?halaman=ustadz');
				#if ($sql) {
				#	echo "Record updated successfully";
				#	} else {
				#	echo "Error updating record: " . mysqli_error($conn);
				#	}	
			}		
		}
	}
	else if ( isset($_GET['id_santri'])){
		$id = $_GET['id_santri'];
		$sql = "SELECT * FROM santri WHERE id_santri='$id'";
		$user = query($sql);
		$tabel = 2;
		if(isset($_POST['submit'])){
			if ($tabel==2){
				updSantri($_POST, $id);
				header('Location: admin.php?halaman=santri');			
			}			
		}
	
	}
?>

<div class="page-container">
  <h3>Edit Data</h3>
  <form action="" class="form" method="POST">
    <div class="inputan">
      <label for="nama">Nama</label>

      <!-- atribute value tolong ganti dengan variabel sesuai nilai data yang mau diedit -->
      <input type="text" name="nama" id="nama" value=
	  <?php 
		if(isset($user)){echo $user[0]["name"];}
		else {echo $nama;}
		#"Wahyu"
		?>
	  required>
    </div>

    <div class="inputan ">
      <label for="gender">Jenis Kelamin</label>
      <div class="custom-select">
        <select id="gender" name="gender">
          <option value="other">Pilih Jenis Kelamin</option>
          <option value="laki-laki">Laki-laki</option>
          <option value="perempuan">Perempuan</option>
        </select>
      </div>
    </div>
    <div class="inputan">
      <label for="email">Email</label>
      <input type="email" name="email" id="email" value=
	  	 <?php 
		if(isset($user)){echo $user[0]["email"];}
		else {echo $nama;}
		?>
	  >
      </input>
    </div>
    <div class="inputan">
      <label for="phone_number">Nomor Telp</label>
      <input type="text" name="phone_number" id="phone_number" value=
	  	<?php 
		if(isset($user)){echo $user[0]["phone_number"];}
		else {echo $nama;}
		?>
	  >
      </input>
    </div>

    <button type="submit" name="submit" class="primary-btn">Submit</button>
  </form>
</div>


<script>
  //Scrpt validasi
  var submit = document.querySelector("form");

  function phonenumber(input) {
    var phoneno = /^\d{10,12}$/;
    if (input.value.match(phoneno)) {
      return true;
    } else {
      alert("Nomor telp yang dimasukkan salah");
      return false;
    }
  }
  submit.addEventListener("submit", (e) => {
    var valid = true;
    var telp = document.querySelector("#phone_number");
    var pass = document.querySelector("#password");
    var konf = document.querySelector("#passkonfirm");
    var gender = document.querySelector('#gender');
    if (gender.value == 'other') {
      valid = false;
      alert('Pilih Jenis Kelamin');
      e.preventDefault();
    }
    if (pass.value != konf.value) {
      valid = false;
      alert("password konfirmasi tidak sama");
      e.preventDefault();
    }
    valid = phonenumber(telp);
    if (!valid) {
      e.preventDefault();
    }
  });
</script>