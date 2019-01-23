<!DOCTYPE html>
<html>
<head>
	<title>Data Nilai Mahasiswa</title>
</head>
<table>
<body>

<form action="input_mahasiswa.php" method="POST">
	<h1>Silahkan diisi!</h1>
<tr>
	<td>Masukkan nama mahasiswa:</td>
	<td><input type="text" name="nama_mahasiswa"></td>
</tr>
<tr>
	<td>Masukkan nilai absen:</td>
	<td><input type="text" name="nilai_absen"></td>
</tr>
<tr>
	<td>Masukkan nilai tugas:</td>
	<td><input type="text" name="nilai_tugas"></td>
</tr>
<tr>
	<td>Masukkan nilai UTS:</td>
	<td><input type="text" name="nilai_uts"></td>
</tr>
<tr>
	<td>Masukkan nilai UAS:</td>
	<td><input type="text" name="nilai_uas"></td>
</tr>
<tr>
	<td><button type="submit" name="submit">Kirim!</button></td>
</tr>
</form>

</body>
</table>
</html>
