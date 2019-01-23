<?php
require 'function.php';


$id=$_GET['id'];

$sql = query("SELECT * FROM tb_mahasiswa WHERE id = '$id'")[0];

if( isset($_POST["submit"]) ) {

	if( ubah($_POST) > 0 ) {
		echo " <script>
				alert('Data berhasil diubah');
				document.location.href='index.php';
			   </script> ";
	}
	else{
		echo " <script>
				alert('Data Gagal diubah');
				document.location.href='tambah.php';
			   </script> ";
	}
} 
?>

<!DOCTYPE html>
<html>
<head>
	<title>Ubah Data</title>
</head>
<body>
	<h1>Ubah Data Mahasiswa</h1>

<form action="" method="post">
<table>
	<tr>
		<td>
			<input type="hidden" name="id" value="<?php echo $sql['id']  ?>">
		</td>
	</tr>
	<tr>
		<td>
			<label for="nama">Nama : </label>
			<input type="text" name="nama" id="nama" required value="<?php echo $sql['nama'] ?>">
		</td>
	<tr>
		<td>
			<label for="nrp">NRP : </label>
			<input type="text" name="nrp" id="nrp" required value="<?php echo $sql['nrp'] ?>">
		</td>
	</tr>
	<tr>
		<td>
			<label for="jurusan">Jurusan : </label>
			<input type="text" name="jurusan" id="jurusan" required value="<?php echo $sql['jurusan'] ?>">
		</td>
	</tr>
	<tr>
		<td>
			<label for="email">Email : </label>
			<input type="text" name="email" id="email" required value="<?php echo $sql['email'] ?>">
		</td>
	</tr>
	<tr>
		<td>
			<label for="gambar">Gambar : </label>
			<input type="text" name="gambar" id="gambar" required value="<?php echo $sql['gambar'] ?>">
		</td>
	</tr>
	<tr>
		<td>
			<button type="submit" name="submit">Ubah Data</button>
		</td>
	</tr>
</table>
<a href="index.php">Kembali ke Daftar Mahasiswa</a>
</form>
</body>
</html>