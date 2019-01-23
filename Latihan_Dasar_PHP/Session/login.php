<?php  
session_start();

if(isset($_SESSION["login"]) ) {
	header('location:index.php');
	exit;
}

include 'function.php';

if( isset($_POST['login']) ) {

	$username = $_POST["username"];
	$password = $_POST["password"];

	$result = $koneksi->query("SELECT * FROM user WHERE username = '$username'");

	// cek username
	if ( mysqli_num_rows($result) === 1 ) {

		// cek password
		$rows = mysqli_fetch_assoc($result);
		if ( password_verify($password, $rows["password"]) ) {
		// set session
		$_SESSION["login"] = true;
			header("location:index.php");
			exit;
		};
	}

	$error = true;
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Registrasi</title>
</head>
<body>
	<h1>Halaman Login</h1>
	<?php if( isset($error) ) : ?>
		<p style="font-style: italic; color: red;">Username / Password Salah</p>
	<?php endif; ?>

<form action="" method="post">

	<ul>
		<li><input type="text" name="username" placeholder="Username"></li>
	</ul>
	<ul>
		<li><input type="password" name="password" placeholder="Password"></li>
	</ul>
	<ul>
		<button type="submit" name="login">Login</button>
	</ul>

</form>
</body>
<a href="form_registrasi.php">Registrasi Ulang</a>

</html>