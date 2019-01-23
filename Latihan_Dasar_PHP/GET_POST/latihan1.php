<?php

// $_GET
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
	<title>GET</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>
<ul>
<?php foreach( $mahasiswa as $mhs ) : ?>
	<li>
		<a href="latihan2.php?nama=<?php echo $mhs["nama"]; ?>&nrp=<?php echo $mhs["nrp"]; ?>&jurusan=<?php echo $mhs["jurusan"]; ?>&email=<?php echo $mhs["email"]; ?>&gambar=<?php echo $mhs["gambar"]; ?>"><?php echo $mhs["nama"]; ?></a>
	</li>
<?php endforeach; ?>
</ul>
</body>
</html>
