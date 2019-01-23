<?php 
// Built-in Function
// date untuk menampilkan tanggal dengan format tertentu
// echo date("l, d-M-Y");

// time
// UNIX Timestamp/EPOCH time
// detik yang sudah berlalu sejak 1 Januari 1970
// echo time();

// echo date("l", time()+172800);
// echo date("d M Y", time()-60*60*24*100);

// mktime
// membuat sendiri detik
// mktime (0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
// echo date("l", mktime(0,0,0,9,23,2002));

// strtotime
echo date("l", strtotime("23 sept 2002"));
 ?>