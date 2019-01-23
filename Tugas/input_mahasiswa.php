<?php 

include "koneksi.php";

$Nama_mahasiswa = $_POST['nama_mahasiswa'];
$Nilai_absen = $_POST['nilai_absen'] * 0.1;
$Nilai_tugas = $_POST['nilai_tugas'] * 0.2;
$Nilai_UTS = $_POST['nilai_uts'] * 0.3; 
$Nilai_UAS = $_POST['nilai_uas'] * 0.4;
$Nilai_total = $Nama_mahasiswa+$Nilai_absen+$Nilai_tugas+$Nilai_UTS+$Nilai_UAS;

$hasil = [];



if ($Nilai_total > 80 && $Nilai_total <= 100) {
	echo $hasil = "A";
}elseif ($Nilai_total > 70 && $Nilai_total < 80) {
	echo $hasil = "B";
}elseif ($Nilai_total > 60 && $Nilai_total < 70) {
	echo $hasil = "C";
}elseif ($Nilai_total > 50 && $Nilai_total < 60) {
	echo $hasil = "D";
}else{
	echo $hasil = "E";
}



$query = "INSERT INTO tb_mahasiswa(nama_mahasiswa, nilai_absen, nilai_tugas, nilai_uts, nilai_uas, nilai_total, Hasil)
		  VALUES ('$Nama_mahasiswa','$Nilai_absen','$Nilai_tugas','$Nilai_UTS','$Nilai_UAS','$Nilai_total','$hasil')";
$hasil = mysqli_query($koneksi,$query);


if ($hasil){
	header("location:tampil_mahasiswa.php");
}
else{
	echo "Input data gagal";
}

?>