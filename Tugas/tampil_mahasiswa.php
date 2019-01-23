<!DOCTYPE html>
<html>
<head>
	<title>Data Nilai Mahasiswa</title>
</head>
<table border="1">
<body>
	<h1>Data Nilai Mahasiswa</h1>

	<tr>
		<td>Id</td>
		<td>Nama Mahasiswa</td>
		<td>Nilai Absen</td>
		<td>Nilai Tugas</td>
		<td>Nilai UTS</td>
		<td>Nilai UAS</td>
		<td>Total</td>
		<td>Hasil</td>
	</tr>
</body>

<?php 

include "koneksi.php";

$query = "select * from tb_mahasiswa";
$hasil = mysqli_query($koneksi,$query);

while ($data = mysqli_fetch_array($hasil)){
	echo "<tr>

	<td>$data[id]</td>
	<td>$data[nama_mahasiswa]</td>
	<td>$data[nilai_absen]</td>
	<td>$data[nilai_tugas]</td>
	<td>$data[nilai_uts]</td>
	<td>$data[nilai_uas]</td>
	<td>$data[nilai_total]</td>
	<td>$data[Hasil]</td>

	</tr>";

}
	echo "</table>";
?>
</table>
<a href="form_mahasiswa.php">Kembali</a>
</html>