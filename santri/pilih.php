<?php
require '../functions.php';
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
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	<script>
		$(document).ready(function() {
			var juz = $('input[name="juz"]');
			for (let i = 0; i < juz.length; i++) {
				juz[i].addEventListener('click', () => {
					var val = juz[i].value;
					$('.content.juz').html("")
					$('.content.surat').load('load-daftarsurah.php', {
						newjuz: val
					}, function() {
						var nilai = [];
						var surah = $('input[name="surah"]');
						console.log(surah.length);
						for (let i = 0; i < surah.length; i++) {
							surah[i].addEventListener('click', function() {
								if (surah[i].checked && !nilai.includes(surah[i].value)) {
									nilai.push(surah[i].value);
								} else {
									nilai.pop()
								}
								console.log(nilai)
								$('.container.special').html("")
								$('.container.special').load('load-rangeayat.php', {
									rangesurat: nilai
								})
							})
						}
					})
				})
			}

		});
	</script>


</head>

<body>
	<?php require "santrinavbar.php" ?>
	<h1>Pilih Hafalan</h1>
	<main>
		<form action="hafal-quran.php" method="post">
			<div class="pilih">
				<p class="collapsible">Pilih Juz</p>
				<div class="content">
					<?php
					$sql = 'SELECT * FROM juz';
					$juzQuran = query($sql);
					foreach ($juzQuran as $juz) : ?>
						<label class="container">Juz <?= $juz['id_juz'] ?>
							<input type="radio" name="juz" value="<?= $juz['id_juz'] ?>">
							<span class="checkmark"></span>
						</label>
					<?php endforeach ?>
				</div>
			</div>
			<div class="pilih">
				<p class="collapsible">Pilih Surah</p>
				<div class="content surat">

				</div>
			</div>

			<div class="pilih">
				<p class="collapsible">Pilih Ayat</p>
				<div class="content ayat">
					<label class="container">Semua
						<input type="radio" name="ayat" value='semua'>
						<span class="checkmark"></span>
					</label>
					<label class="container">Atur
						<input type="radio" name="ayat" value='atur'>
						<span class="checkmark"></span>
					</label>
					<label class="container special">
						<div class="atur">

						</div>
					</label>

				</div>
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

		var atur = $('input[name="ayat"][value="atur"]')
		var semua = $('input[name="ayat"][value="semua"]')

		atur[0].addEventListener('click', function() {
			$('.container.special').addClass('active');
			$('.content.ayat').scrollTop(100)

		})
		semua[0].addEventListener('click', function() {
			$('.container.special').removeClass('active');
		})
	</script>

</body>

</html>