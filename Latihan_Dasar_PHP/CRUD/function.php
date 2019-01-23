<?php 
$koneksi = mysqli_connect("localhost","root","","phpdasar");  


function query ($query){
	global $koneksi;

	$result = mysqli_query($koneksi,$query);
	$rows = [];

	while($row = mysqli_fetch_assoc($result) ){
		$rows[] = $row;
	} 
	return $rows;
}

function tambah($data) {
	global $koneksi;

	$nama = htmlspecialchars($data["nama"]);
	$nrp = htmlspecialchars($data["nrp"]);
	$jurusan = htmlspecialchars($data["jurusan"]);
	$email = htmlspecialchars($data["email"]);
	$gambar = htmlspecialchars($data["gambar"]);

	$query = "INSERT INTO tb_mahasiswa (id,nama,nrp,jurusan,email,gambar)  
			  VALUES('', '$nama', '$nrp', '$jurusan', '$email', '$gambar')";

			  mysqli_query($koneksi,$query);

			  return mysqli_affected_rows($koneksi);

}

function hapus($id) {
	global $koneksi;
	mysqli_query($koneksi, "DELETE FROM tb_mahasiswa WHERE id = $id");
	return mysqli_affected_rows($koneksi);
}

function ubah($data) {
	global $koneksi;

	$id = $data["id"];
	$nama = htmlspecialchars($data["nama"]);
	$nrp = htmlspecialchars($data["nrp"]);
	$jurusan = htmlspecialchars($data["jurusan"]);
	$email = htmlspecialchars($data["email"]);
	$gambar = htmlspecialchars($data["gambar"]);

	$query = "UPDATE tb_mahasiswa SET 
		      id 	  = '$id',
		      nama    = '$nama',
		      nrp     = '$nrp',
		      jurusan = '$jurusan',
		      email   = '$email',
		      gambar  = '$gambar' 
		      WHERE id = '$id'";

    mysqli_query ($koneksi, $query);

    return mysqli_affected_rows($koneksi);

}

?>