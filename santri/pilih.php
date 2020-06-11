<?php
require '../functions.php';
$sql = 'SELECT * FROM juz';
$juzQuran = query($sql);
?>
<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../css/pilih.css">
	<style>
		/* Customize the label (the container) */
		.container {
			display: block;
			position: relative;
			padding-left: 35px;
			margin-bottom: 12px;
			cursor: pointer;
			font-size: 22px;
			-webkit-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none;
		}

		/* Hide the browser's default checkbox */
		.container input {
			position: absolute;
			opacity: 0;
			cursor: pointer;
			height: 0;
			width: 0;
		}

		/* Create a custom checkbox */
		.checkmark {
			position: absolute;
			top: 0;
			left: 0;
			height: 25px;
			width: 25px;
			background-color: #eee;
			border-radius: 100px;
		}

		/* On mouse-over, add a grey background color */
		.container:hover input~.checkmark {
			background-color: #ccc;
		}

		/* When the checkbox is checked, add a blue background */
		.container input:checked~.checkmark {
			background-color: #2196F3;
		}

		/* Create the checkmark/indicator (hidden when not checked) */
		.checkmark:after {
			content: "";
			position: absolute;
			display: none;
		}

		/* Show the checkmark when checked */
		.container input:checked~.checkmark:after {
			display: block;
		}

		/* Style the checkmark/indicator */
		.container .checkmark:after {
			left: 9px;
			top: 5px;
			width: 5px;
			height: 10px;
			border: solid white;
			border-width: 0 3px 3px 0;
			-webkit-transform: rotate(45deg);
			-ms-transform: rotate(45deg);
			transform: rotate(45deg);
		}
	</style>
</head>

<body>
	<?php require "santrinavbar.php" ?>
	<h1>Pilih Hafalan</h1>
	<main>
		<form action="hafal-quran.php" method="get">
			<p class="collapsible">Pilih Juz</p>
			<div class="content">
				<?php foreach ($juzQuran as $juz) : ?>
					<label class="container">Juz <?= $juz['id_juz'] ?>
						<input type="checkbox" name="juz" value="<?= $juz['id_juz'] ?>">
						<span class="checkmark"></span>
					</label>
				<?php endforeach ?>
			</div>
			<p class="collapsible">Pilih Surah</p>
			<div class="content surat">
				<label class="container">Al-Fatihah
					<input type="checkbox" name="surah" value="1">
					<span class="checkmark"></span>
				</label>
				<label class="container">Al-Baqarah
					<input type="checkbox" name="surah" value="2">
					<span class="checkmark"></span>
				</label>
			</div>

			<p class="collapsible">Pilih Ayat</p>
			<div class="content ayat">
				<label class="container">Semua
					<input type="checkbox" name="surah">
					<span class="checkmark"></span>
				</label>
				<label class="container">Atur
					<input type="checkbox" name="surah">
					<span class="checkmark"></span>
				</label>
			</div>
			<button type="submit" class="primary-btn submit">Simpan</button>
		</form>
	</main>



	<script>
		var coll = document.getElementsByClassName("collapsible");
		var i;

		for (i = 0; i < coll.length; i++) {
			coll[i].addEventListener("click", function() {
				this.classList.toggle("active");
				var content = this.nextElementSibling;
				if (content.style.maxHeight) {
					content.style.maxHeight = null;
				} else {
					content.style.maxHeight = content.scrollHeight + "px";
				}
			});
		}
	</script>

</body>

</html>