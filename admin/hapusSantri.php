<?php 
	require "../functions.php";

	if( isset($_GET['id_santri']) ){

    // ambil id dari query string
    $id = $_GET['id_santri'];

    // buat query hapus
    #$sql = "DELETE FROM calon_siswa WHERE id=$id";
    $query = delSantri($id);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: admin.php?halaman=santri');
    } else {
        die("gagal menghapus...");
    }

	} else {
    die("akses dilarang...");
}
?>