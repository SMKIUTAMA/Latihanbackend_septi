<?php
require 'function.php';
$query = query("SELECT * FROM tb_mahasiswa");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<body>

	<h1>Daftar Mahasiswa</h1>

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
			<?php foreach($query as $rows) : ?>
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
	<a href="tambah.php">Tambah Data</a>
</body>
</html>