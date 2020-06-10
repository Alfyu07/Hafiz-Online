<?php
require 'functions.php';
if (isset($_POST["login"])) {
	$username = $_POST["username"];
	$password = $_POST["password"];

	if ($_POST["user"]==="santri") {
		$result = mysqli_query($conn, "SELECT * FROM santri where name = '$username'");
		if (mysqli_num_rows($result) === 1) {
			//cek password
			$row = mysqli_fetch_assoc($result);
			if (password_verify($password, $row["password"])) {
				$_SESSION["login"] = true;
				$_SESSION["santri"] = true;
				$_SESSION["username"] = $row["name"];
				$_SESSION["id_user"] = $row["id_santri"];
				header("Location: index.php");
				exit;
			} #else {var_dump ($row); echo "<br>"}
			
		}
	} else if ($_POST["user"]==="ustadz") {
		$result2 = mysqli_query($conn, "SELECT * FROM ustadz where name = '$username'");
		//cek $username
		if (mysqli_num_rows($result2) === 1) {
			//cek password
			$row = mysqli_fetch_assoc($result2);
			if (password_verify($password, $row["password"])) {
				$_SESSION["login"] = true;
				$_SESSION["ustadz"] = true;
				$_SESSION["username"] = $row["name"];
				$_SESSION["id_user"] = $row["id_ustadz"];
				header("Location: ustadz/ustadznavbar.php");
				exit;
			}
		}
	}
	$error = true;
	#if (isset($_POST["user"])){echo $_POST["user"];}
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

	<link rel="stylesheet" href="./css/registrasi.css" />
	<title>Login!</title>
	<script src="https://code.jquery.com/jquery-3.5.0.slim.min.js" integrity="sha256-MlusDLJIP1GRgLrOflUQtshyP0TwT/RHXsI1wWGnQhs=" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,600;0,700;0,800;1,500&display=swap" rel="stylesheet">
</head>

<body>
	<nav>
		<h1><a href="./index.php" class="title">HafizQuran</a></h1>
	</nav>
	<main>
		<div class="banner card">
			<img src="./Asset/img/reading-quran-nigth-ramadhan-illustration_19181-27-removebg-preview (1).png" alt="" />
		</div>
		<div class="form-input card">
			<h1>Halo,<br />Selamat Datang!</h1>


			<!-- <p id="error" style="color: red; font-style: italic; "></p> -->
			<form action="" method="post" id="login">
				<!-- <label class='centered'>Masuk sebagai : </label> -->
				<div class="pilih-user">
					<p>Masuk Sebagai</p>
					<div class="switch-field">
						<input type="radio" id="santri" name="user" value="santri" checked />
						<label for="santri">Santri</label>
						<input type="radio" id="ustadz" name="user" value="ustadz" />
						<label for="ustadz">Ustadz</label>
					</div>
				</div>

				<?php if (isset($error)) : ?>
					<p style="color:red; font-style:italic; text-align:center" id="error">username / password salah</p>
				<?php endif; ?>
				<ul>
					<li>
						<input autocomple="on" type="text" name="username" id="username" placeholder="Type your username here.." required />
					</li>
					<li>
						<input type="password" name="password" id="password" placeholder="Type your password here.." autocomplete="on" required />
					</li>
					<li></li>
					<li class="remember" style="margin-bottom: -10px;">
						<label class="container">ingat saya
							<input type="checkbox" />
							<span class="checkmark"></span>
						</label>
					</li>
					<li id="forgot"><a href="">Lupa password</a></li>
					<li>
						<button type="submit" name="login" class="submit">Masuk</button>
					</li>
					<li class="optionlink">
						Belum punya akun?
						<span><a href="./registrasi.php">Klik disini!</a></span>
					</li>
				</ul>
			</form>
		</div>
	</main>

	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<script src="./js/login.js" type="text/javascript"></script>
</body>

</html>