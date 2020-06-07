<div class="page-container">
  <h3>Tambah Ustadz</h3>
  <form action="" class="form" method="POST">
    <div class="inputan">
      <label for="nama">Nama</label>
      <input type="text" name="nama" id="nama" required>
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
      <input type="email" name="email" id="email">
      </input required>
    </div>
    <div class="inputan">
      <label for="phone_number">Nomor Telp</label>
      <input type="text" name="phone_number" id="phone_number">
      </input required>
    </div>
    <div class="inputan">
      <label for="password">Password</label>
      <input type="password" name="password" id="password" required>
      </input>
    </div>
    <div class="inputan">
      <label for="passkonfirm">Konfimasi Password</label>
      <input type="password" name="passkonfirm" id="passkonfirm" required>
      </input>
    </div>
    <button type="submit" id='submit' class="primary-btn">Submit</button>
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
    valid = phonenumber(telp);
    if (!valid) {
      e.preventDefault();
    }
    if (pass.value != konf.value) {
      valid = false;
      alert("password konfirmasi tidak sama");
      e.preventDefault();
    }
  });
</script>