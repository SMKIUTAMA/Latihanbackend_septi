<?php

$mahasiswa = [
	["Septiana Sari", "002398002", "Teknik Informatika", "Septiasari23@gmail.com"],
	["Jennie Alicia", "002634002", "Bahasa", "Aliciajennie@gmail.com"],
	["Tzuyu Angelica", "007834005", "Seni", "Tzuyu23@gmail.com"]
];

?>

<!DOCTYPE html>
<html>
<head>
	<title>Daftar Mahasiswa</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>
<?php foreach( $mahasiswa as $mhs ) : ?>
<ul>
	<li>Nama : <?php echo $mhs[0]; ?></li>
	<li>NRP : <?php echo $mhs[1]; ?></li>
	<li>Jurusan : <?php echo $mhs[2]; ?></li>
	<li>Email : <?php echo $mhs[3]; ?></li>
</ul>
<?php endforeach; ?>
</body>
</html>