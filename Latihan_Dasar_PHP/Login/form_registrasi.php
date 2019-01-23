<?php  
include 'function.php';

if( isset($_POST["register"]) ) {
	if(registrasi($_POST) > 0 ) {
		echo"<script>
				alert('User baru telah ditambahkan');
				document.location.href='login.php';
			</script>";
	}
	else{
		mysqli_error($koneksi);
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Registrasi</title>
</head>
<center>
<body>
	<h1>Halaman Registrasi</h1>
<form action="" method="post">

	<ul>
		<li><input type="text" name="username" placeholder="Username"></li>
	</ul>
	<ul>
		<li><input type="password" name="password" placeholder="Password"></li>
	</ul>
	<ul>
		<li><input type="password" name="password2" placeholder="Confirm Password"></li>
	</ul>
	<ul>
		<button type="submit" name="register">Register</button>
	</ul>

</form>
</body>
</center>
</html>