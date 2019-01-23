<!DOCTYPE html>
<html>
<head>
	<title>POST</title>
</head>
<body>
<?php if( isset($_POST["submit"]) ) : ?>
	<h1>Halo Selamat Datang <?php echo $_POST["nama"]; ?></h1>
<?php endif; ?>

<form action="latihan4.php" method="post">
	<h1>Silahkan diisi!</h1>
	Masukkan nama:
	<input type="text" name="nama">
	<br>
	<button type="submit" name="submit">Kirim!</button>
</form>

</body>
</html>


