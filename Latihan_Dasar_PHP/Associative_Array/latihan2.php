<?php 
// $mahasiswa = [
// 	["Septiana Sari", "002398002", "Teknik Informatika", "Septiasari23@gmail.com"],
// 	["Jennie Alicia", "002634002", "Bahasa", "Aliciajennie@gmail.com"]
// ];

// array associative
// definisinya sama seperti numeric, kecuali
// keynya adalah string yang kita buat sendiri

$mahasiswa = [
	[
		"nama" => "Septiana Sari", 
		"nrp" => "002398002", 
		"jurusan" => "Teknik Informatika", 
		"email" => "Septiasari23@gmail.com",
		"gambar" => "1.jpg"
	],
	[
		"nama" => "Jennie Alicia", 
		"nrp" => "002634002", 
		"jurusan" => "Bahasa", 
		"email" => "Aliciajennie@gmail.com",
		"gambar" => "2.jpg"
	]
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
		<li>
			<img src="img/<?php echo $mhs["gambar"]; ?>">
		</li>
		<li>Nama : <?php echo $mhs["nama"]; ?></li>
		<li>NRP : <?php echo $mhs["nrp"]; ?></li>
		<li>Jurusan : <?php echo $mhs["jurusan"]; ?></li>
		<li>Email : <?php echo $mhs["email"]; ?></li>
	</ul>
	<?php endforeach; ?>

</body>
</html> 