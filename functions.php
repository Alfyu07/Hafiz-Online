    <?php
  session_start();
  //koneksi ke database
  $namadb = "hafiz";
  $unamedb = "root";
  $passdb = "250700";
  $conn = mysqli_connect("localhost", "$unamedb", "$passdb", "$namadb");

  // #KONEKSI DENGAN DATABASE XAMPP
  // $dbServer = "localhost";
  // $dbUser = "root";
  // $dbPass = "";
  // $dbname = "hafizquran";
  // $conn = mysqli_connect($dbServer, $dbUser, $dbPass, $dbname);

  #data session
  $_SESSION["login"] = false;
  $_SESSION["username"] = "";
  $_SESSION["id_user"] = 0; #untuk edit profil, query(UPDATE...WHERE id='$_SESSION["id_user"]')
  #untuk bedain menu admin/santri/ustadz
  $_SESSION["admin"] = false;
  $_SESSION["santri"] = false;
  $_SESSION["ustadz"] = false;


  //ambil data dari tabel
  // var_dump($conn);
  function query($query)
  {
    global $conn;
    $result = mysqli_query($conn, $query);

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
      $rows[] = $row;
    }
    return $rows;
  }

  function insSantri($data)
  {
    #isi form register: nama, email, password
    global $conn;

    $email = mysqli_real_escape_string($conn, $data["email"]);
    #$nama = strtolower(stripslashes($data["username"]));
    $nama = mysqli_real_escape_string($conn, $data["username"]);
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    $res = mysqli_query($conn, "SELECT id_santri FROM santri ORDER BY id_santri DESC LIMIT 1");
    $bar =  mysqli_fetch_array($res);
    #cari jumlah baris untuk id_santri
    $id_santri = 1; #id_santri pertama
    $indeks = $bar[0]; #variabel isi id_santri terbesar
    if ($indeks != 0) { #ada data santri, ganti id_santri
      $id_santri = $indeks + 1;
    }

    #cek konfirmasi password
    if (strcmp($password, $password2) != 0) {
      echo "<script>
        alert('password dan konfirmasi berbeda');
      </script>";
      return false;
    }
    $password = password_hash($password, PASSWORD_DEFAULT);#enkripsi password
    #insert ke database, tabel santri
    $query = "INSERT into santri (id_santri,name,email,password) values('$id_santri','$nama','$email','$password')";
    $result = mysqli_query($conn, $query);

    #ubah status jadi logged in
    $_SESSION["login"] = true;
    $_SESSION["santri"] = true;
    $_SESSION["username"] = $nama;
    $_SESSION["id_user"] = $id_santri;

    return $result;
  }

  function loginSantri($data)
  {
    #isi form register: nama, email, password
    global $conn;

    $email = mysqli_real_escape_string($conn, $data["email"]);
    #$nama = strtolower(stripslashes($data["username"]));
    $nama = mysqli_real_escape_string($conn, $data["username"]);
    $password = mysqli_real_escape_string($conn, $data["password"]);

    $result = query("SELECT * FROM santri WHERE name = '$nama'");
    if (mysqli_num_rows($result) === 1) {
      //cek password
      $row = mysqli_fetch_assoc($result);
      if (password_verify($password, $row["password"])) {
        #ubah status jadi logged in
        $_SESSION["login"] = true;
        $_SESSION["santri"] = true;
        $_SESSION["username"] = $row["name"];
        $_SESSION["id_user"] = $row["id_santri"];
        header("Location: index.php");
        exit;
      }
    }
  }

  #UPDATE 'tabel' SET kol1 = ?, kol2 = ?, ... WHERE 'tabel_id'=?
  function updSantri($data, $id_user)
  {  #name, phone_number, address, gender, birth_date, email, password
    #$id_user dapet dari $_SESSION["id_user"]
    global $conn;

    #$data : data/nilai baru
    $nama = $data["nama"];
    $phone_number = $data["phone_number"];
    $address = $data["address"];
    $gender = $data["gender"];
    $birth_date = $data["birth_date"];
    $email = $data["email"];
    $password = $data["password"];

    $password = password_hash($password, PASSWORD_DEFAULT);#enkripsi password

    $query = "UPDATE santri SET name='$nama', phone_number='$phone_number', address='$address',
	gender='$gender', birth_date='$birth_date', email='$email', password='$password'
	WHERE id_santri = $id_user";

    $result = mysqli_query($conn, $query);
    return $result;
  }

  #DELETE FROM 'tabel' WHERE 'tabel_id'=?
  function delSantri($id_user)
  {
    global $conn;
    $query = "DELETE FROM santri WHERE id_santri = '$id_user'";
    $result = mysqli_query($conn, $query);
    return $result;
  }

  function tambah($data)
  {
    global $conn;
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $hafalan = htmlspecialchars($data["hafalan"]);
    $gambar = htmlspecialchars($data["gambar"]);

    $query = "INSERT into santri (nama,email,hafalan,gambar) values('$nama','$email','$hafalan','$gambar')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
  }

  function hapus($id)
  {
    global $conn;
    mysqli_query($conn, "DELETE FROM santri WHERE id = $id");
    return mysqli_affected_rows($conn);
  }

  function registrasi($data)
  {
    global $conn;
    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    //cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username from user where username = '$username'");
    if (mysqli_fetch_assoc($result)) {
      echo "<script>
        alert('username tidak tersedia');
      </script>";
      return false;
    }
    //cek apakah password dan konfirmasi sama
    //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);
    //insert ke database
    mysqli_query($conn, "INSERT INTO user (username,password) values('$username','$password')");

    return mysqli_affected_rows($conn);
  }
  function format_arabic_number($number)
  {
    $arabic_number = array('٠', '١', '٢', '٣', '٤', '٥', '٦', '٧', '٨', '٩');
    $jum_karakter = strlen($number);
    $temp = "";
    for ($i = 0; $i < $jum_karakter; $i++) {
      $char = substr($number, $i, 1);
      $temp .= $arabic_number[$char];
    }
    return '<span class="arabic_number">' . $temp . '</span>';
  }
