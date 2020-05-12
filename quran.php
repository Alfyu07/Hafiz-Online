<?php  
	require 'functions.php';
	$surah = 16	; //nanti di pilih pas pemilihan surah	
	$quran = query("SELECT * FROM quran_id where suraId = '$surah'");
?>

<!DOCTYPE html>
<html>
	<head>
		<!-- <link rel="stylesheet" href="background_styles.css" /> -->
		<link rel="stylesheet" href="./css/quran.css" />
		<script src="./js/script.js" defer></script>
		<title>HafizQuran</title>
	</head>
	<body>
		<nav class="navbar">
			<div class="title">HafizQuran</div>
			<a href="#" class="toggle-button">
				<span class="bar"></span>
				<span class="bar"></span>
				<span class="bar"></span>
			</a>
			<div class="navbar-links">
				<ul>
					<li><a href="">Tahfiz</a></li>
					<li><a href="">Murajaah</a></li>
					<li><a href="">Artikel</a></li>
					<li><a href="">Event</a></li>
					<li><a href="" class="btn-primary" id="sign-up">Sign Up</a></li>
					<li><a href="" id="login-text">Login</a></li>
				</ul>
			</div>
		</nav>
		<main class="quran-container">
			<header class = "surah title">Surah Al-Fatihah</header>
			<?php foreach($quran as $ayat): ?>
				<ul class="ayat card">
					<li class ="no-ayat"><?php echo $ayat["verseID"]; ?></li>
					<li class ="play"><span class="iconify" data-inline="false" data-icon="bi:play-fill"></span>play</li>
					<li class ="ayatquran"><?php echo $ayat["ayahText"]; ?></li>
					<li class ="latin"><?php echo $ayat["readText"]; ?></li>
					<li class ="terjemah"><?php echo $ayat["indoText"]; ?></li>
				</ul>
			<?php endforeach; ?>
			<script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>
		</main>
		<footer>
			<p><span>&copy</span> HafizQuran 2020</p>
		</footer>
	</body>
</html>
