<?php
//koneksi ke database
$namadb = "hafiz";
$unamedb = "root";
$passdb = "250700";
$conn = mysqli_connect("localhost", "$unamedb", "$passdb", "$namadb");
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
