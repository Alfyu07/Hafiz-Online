<?php
require "functions.php";
$surah = $_GET['id']; //nanti di pilih pas pemilihan surah
$quran = query("SELECT * FROM quran_id where suraId = '$surah'");
#$namasurah = query("SELECT surat_indonesia from DaftarSurat where suraId = '$surah'");
$namasurah = query("SELECT surat_indonesia from daftarsurat where suraId = '$surah'");
?>
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
</main>