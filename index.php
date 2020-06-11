<!DOCTYPE html>
<?php 
require 'functions.php';
?>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>HafizQuran</title>

	<!-- Font Style -->
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />
	<link rel="stylesheet" href="css/index.css" />
</head>

<body>
	<?php 
	if($_SESSION["santri"]){require './santri/santrinavbar.php';}
	else if($_SESSION["ustadz"]){require './ustadz/ustadznavbar.php';}
	else {require 'navbar.php';} ?>
	<!-- Banner landing page -->

	<?php
	if (!isset($_GET['halaman'])) {
		require "beranda.php";
	} else if ($_GET['halaman'] == 'daftarSurah') {
		require "daftarSurah.php";
	} else if ($_GET['halaman'] == 'quran') {
		require "quran.php";
	}

	?>

	<footer>
		<p><span>&copy</span> HafizQuran 2020</p>
	</footer>
	<!-- Akhir Event -->
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	<script src="./js/script.js"></script>
	<script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>
</body>


</html>