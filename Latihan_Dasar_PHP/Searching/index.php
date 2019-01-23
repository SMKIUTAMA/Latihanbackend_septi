<?php
require 'function.php';
$mahasiswa = query("SELECT * FROM tb_mahasiswa ORDER BY id");

if( isset($_POST["cari"]) ) {
	$mahasiswa = cari($_POST["keyword"]);
} 
?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<body>

	<h1>Daftar Mahasiswa</h1>

	<form action="" method="post">
		<input type="text" name="keyword" size="40" autofocus placeholder="Masukkan keyword Pencarian" autocomplete="off">
		<button type="submit" name="cari">Cari</button>

	<table border="1">
		<tr>
			<th>No.</th>
			<th>Nama</th>
			<th>NRP</th>
			<th>Jurusan</th>
			<th>Email</th>
			<th>Gambar</th>
			<th>Aksi</th>
		</tr>

			<?php $no = 1; ?>
			<?php foreach($mahasiswa as $rows) : ?>
			<tr>
				<td><?php echo $no; ?></td>
				<td><?php echo $rows["nama"] ?></td>
				<td><?php echo $rows["nrp"] ?></td>
				<td><?php echo $rows["jurusan"] ?></td>
				<td><?php echo $rows["email"] ?></td>
				<td><img src="img/<?php echo $rows["gambar"] ?>" width="50"></td>
				<td><a href="ubah.php?id=<?php echo $rows['id'] ?>">Ubah</a> | <a href="hapus.php?id=<?php echo $rows['id'] ?>" onclick="return confirm('Anda Yakin?')">Hapus</a></td>
			</tr>
			<?php $no++; ?>
			<?php endforeach; ?>

</table>
</form>
	<a href="tambah.php">Tambah Data</a>
</body>
</html>