<?php
require "functions.php";
$surah = 1; //nanti di pilih pas pemilihan surah
$quran = query("SELECT * FROM quran_id where suraId = '$surah'");
$namasurah = query("SELECT surat_indonesia from DaftarSurat where suraId = '$surah'");
?>

<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href="./css/quran.css">
	<title>HafizQuran</title>
</head>

<body>
	<?php require "navbar.php"; ?>

	<main class="quran-container">
		<?php foreach ($namasurah as $nama) : ?>
			<header class="surah title"><?php echo $nama['surat_indonesia']; ?></header>
		<?php endforeach ?>

		<?php foreach ($quran as $ayat) : ?>
			<ul class="ayat card">
				<li class="no-ayat"><?php echo $ayat["verseID"]; ?></li>
				<li class="play">
					<div class="player">
						<audio class="plyr-audio">
							<source src="Asset/ayat/<?= $ayat["id"] + 1 ?>.mp3" type="audio/mp3" />
						</audio>
						<button class="plymedia"><span class="iconify" data-inline="false" data-icon="bi:play-fill"></span>
							play</button>
					</div>
				</li>
				<li class="ayatquran">
					<?php echo $ayat["ayahText"];
					?></li>
				<li class="latin"><?php echo $ayat["readText"]; ?></li>
				<li class="terjemah"><?php echo $ayat["indoText"]; ?></li>
			</ul>
		<?php endforeach; ?>
		<script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>

	</main>
	<footer>
		<p><span>&copy</span> HafizQuran 2020</p>
	</footer>

	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	<script src="./js/script.js"></script>
	<script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>



</body>

</html>