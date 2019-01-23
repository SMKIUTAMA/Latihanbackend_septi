<?php
require 'function.php';

if( isset($_POST["submit"]) ) {

	if( tambah($_POST) > 0 ) {
		echo " <script>
				alert('Data berhasil ditambahkan');
				document.location.href='index.php';
			   </script> ";
	}
	else{
		echo " <script>
					alert('Data Gagal diinput');
					document.location.href = 'tambah.php';
			   </script> ";
	}
} 
?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data</title>
</head>
<body>
	<h1>Tambah Data Mahasiswa</h1>

<form action="" method="post">
<table>
	<tr>
		<td>Nama:</td><td><input type="text" placeholder="Masukkan Nama" name="nama" required></td>
	</tr>
	<tr>
		<td>NRP:</td><td><input type="text" placeholder="Masukkan NRP" name="nrp" required></td>
	</tr>
	<tr>
		<td>Jurusan:</td><td><input type="text" placeholder="Masukkan Jurusan" name="jurusan" required></td>
	</tr>
	<tr>
		<td>Email:</td><td><input type="text" placeholder="Masukkan Email" name="email" required></td>
	</tr>
	<tr>
		<td>Gambar:</td><td><input type="text" placeholder="Masukkan Gambar" name="gambar" required></td>
	</tr>
	<tr>
		<td><button type="submit" name="submit">Tambah Data</button></td>
	</tr>
</table>
<a href="index.php">Kembali ke Daftar Mahasiswa</a>
</form>
</body>
</html>