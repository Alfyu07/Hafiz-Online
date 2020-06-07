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
        <select>
          <option value="other">Pilih Jenis Kelamin</option>
          <option value="laki-laki">Laki-laki</option>
          <option value="perempuan">Perempuan</option>
        </select>
      </div>
    </div>
    <div class="inputan">
      <label for="email">Email</label>
      <input type="email" name="email" id="email">
      </input>
    </div>
    <div class="inputan">
      <label for="phone_number">Nomor Telp</label>
      <input type="text" name="phone_number" id="phone_number">
      </input>
    </div>
    <div class="inputan">
      <label for="password">Password</label>
      <input type="text" name="password" id="password">
      </input>
    </div>
    <button type="submit" class="primary-btn">Submit</button>
  </form>

</div>