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
	$gambar = upload();
	if (!$gambar) {
		return false;
	}

	$query = "INSERT INTO tb_mahasiswa (id,nama,nrp,jurusan,email,gambar)  
			  VALUES('', '$nama', '$nrp', '$jurusan', '$email', '$gambar')";

			  mysqli_query($koneksi,$query);

			  return mysqli_affected_rows($koneksi);

}

function upload()
{
	$namafile = $_FILES['gambar']['name'];
	$ukuranfile = $_FILES['gambar']['size'];
	$error = $_FILES['gambar']['error'];
	$tmpname = $_FILES['gambar']['tmp_name'];

	// cek apakah user mengirimkan gambar
	if ($error === 4) {
		echo"
			<script>
				alert('Tolong Masukan Gambar Anda')
			</script>
		";
		return false;
	}

	// cek apakah yang diupload adalah gambar
	$ekstensigambarvalid = ['jpg','jpeg','png'];
	$ekstensigambar = explode('.', $namafile);
	$ekstensigambar = strtolower(end($ekstensigambar));
	if (!in_array($ekstensigambar, $ekstensigambarvalid)) {
		echo"
			<script>
				alert('Yang Anda Upload Bukan Gambar')
			</script>
		";
		return false;
	}

	// cek ukuran file
	if ($ukuranfile > 1000000) {
		echo"
			<script>
				alert('Ukuran Gambar Terlalu Besar')
			</script>
		";
		return false;
	}

	// lolos validasi, upload file 
	// generate nama baru
	$namafilebaru = uniqid();
	$namafilebaru .= '.';
	$namafilebaru .= $ekstensigambar;

	move_uploaded_file($tmpname, 'img/' . $namafilebaru);

	return $namafilebaru;
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

function cari($keyword)
{
	$query = "SELECT * FROM tb_mahasiswa
			  WHERE nama LIKE '%$keyword%' OR 
			        nrp LIKE '%$keyword%' OR
			        jurusan LIKE '%$keyword%' OR
			        email LIKE '%$keyword%'
			 ";

	return query($query);     
}

?>