<!DOCTYPE html>
<html>
<head>
	<title>Detail Mahasiswa</title>
</head>
<body>

<ul>
	<li><img src="img/<?php echo $_GET["gambar"]; ?>"></li>
	<li><?php echo $_GET["nama"]; ?></li>
	<li><?php echo $_GET["nrp"]; ?></li>
	<li><?php echo $_GET["jurusan"]; ?></li>
	<li><?php echo $_GET["email"]; ?></li>
</ul>

<a href="latihan1.php">Kembali</a>

</body>
</html>