<?php 
	require "../functions.php";

	if( isset($_GET['id_ustadz']) ){

    // ambil id dari query string
    $id = $_GET['id_ustadz'];

    // buat query hapus
    #$sql = "DELETE FROM calon_siswa WHERE id=$id";
    $query = delUstadz($id);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: admin.php?halaman=ustadz');
    } else {
        die("gagal menghapus...");
    }

	} else {
    die("akses dilarang...");
}
?>