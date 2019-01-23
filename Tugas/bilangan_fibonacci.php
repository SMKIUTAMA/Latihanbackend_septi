<?php 
	// masukan 2 angka sebagai nilai awal 
	$angka_pertama=0;
	$angka_kedua=1;

	//menampilkan 2 angka pertama
	echo $angka_pertama ."<br>". $angka_kedua;
	for($i=0; $i<15; $i++) {
		// menghitung angka yang akan ditmpilakan
		$hasil = $angka_pertama + $angka_kedua;
		echo "<br>".$hasil;

		// siapkan angka untuk perhitungan selanjutnya
		$angka_pertama = $angka_kedua;
		$angka_kedua = $hasil;
	}	
?>