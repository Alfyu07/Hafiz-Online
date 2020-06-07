<div class="page-container">
  <h3>Edit Data</h3>
  <form action="" class="form" method="POST">
    <div class="inputan">
      <label for="nama">Nama</label>

      <!-- atribute value tolong ganti dengan variabel sesuai nilai data yang mau diedit -->
      <input type="text" name="nama" id="nama" value="Wahyu" required>
    </div>

    <div class="inputan ">
      <label for="gender">Jenis Kelamin</label>
      <div class="custom-select">
        <select>
          <option value="other">Pilih Jenis Kelamin</option>
          <option value="laki-laki">Laki-laki</option>
          <option value="perempuan">Perempuan</option>
        </select>
      </div>
    </div>
    <div class="inputan">
      <label for="email">Email</label>
      <input type="email" name="email" id="email" value="w.alfa433@gmail.com">
      </input>
    </div>
    <div class="inputan">
      <label for="phone_number">Nomor Telp</label>
      <input type="text" name="phone_number" id="phone_number" value="081901231">
      </input>
    </div>

    <button type="submit" class="primary-btn">Submit</button>
  </form>

</div>