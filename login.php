<?php 
require 'functions.php';
if(isset($_POST["login"])){
  $username = $_POST["username"];
  $password = $_POST["password"];
  $result = mysqli_query($conn,"SELECT * FROM user where username = '$username'");
  
  //cek $username
  if (mysqli_num_rows($result)===1){
    //cek password
    $row = mysqli_fetch_assoc($result);
    if(password_verify($password,$row["password"])){
      header("Location: index.php");
      exit;
    }
  }
  $error = true;
}

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8" />
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1, shrink-to-fit=no"
		/>

		<link rel="stylesheet" href="./css/registrasi.css" />
		<title>Login!</title>
		<script
			src="https://code.jquery.com/jquery-3.5.0.slim.min.js"
			integrity="sha256-MlusDLJIP1GRgLrOflUQtshyP0TwT/RHXsI1wWGnQhs="
			crossorigin="anonymous"
		></script>
	</head>
	<body>
		<nav>
			<h1><a href="index.php" class="title">HafizQuran</a></h1>
		</nav>
		<main>
			<div class="banner card">
				<img
					src="./Asset/reading-quran-nigth-ramadhan-illustration_19181-27-removebg-preview (1).png"
					alt=""
				/>
			</div>
			<div class="form-input card">
				<h1>Hello,<br />Selamat Datang!</h1>

				<?php if(isset($error)): ?>
					<p style="color:red; font-style:italic">username / password salah</p>
    		<?php endif; ?>
		<p id="error" style="color: red; font-style: italic; "></p>
				<form action="" method="post" id="login">
					<ul>
						<li>
							<input
								autocomple="on"
								type="text"
								name="username"
								id="username"
								placeholder="Type your username here.."
							/>
						</li>
						<li>
							<input
								type="password"
								name="password"
								id="password"
								placeholder="Type your password here.."
								autocomplete="on"
							/>
						</li>
						<li class="remember" style="margin-bottom: -10px;">
							<label class="container"
								>ingat saya	
								<input type="checkbox" />
								<span class="checkmark"></span>
							</label>
						</li>
						<li id="forgot"><a href="">Lupa password</a></li>
						<li>
							<button type="submit" name="login">Masuk	!</button>
						</li>
						<li class="optionlink">
							Belum punya akun?
							<span><a href="./registrasi.php">Klik disini!</a></span>
						</li>
					</ul>
				</form>
			</div>
		</main>

		<script
			src="https://code.jquery.com/jquery-3.4.1.min.js"
			integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
			crossorigin="anonymous"
		></script>
		<script src="./js/login.js" type="text/javascript"></script>
	</body>
</html>
