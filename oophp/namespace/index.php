<?php  

require_once 'App/init.php';

// $produk1 = new Komik ("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);

// $produk2 = new Game ("Uncharted", "Neil Druckman", "Sony Computer", 250000, 50);

// $cetakproduk = new CetakInfoProduk();
// $cetakproduk->tambahproduk( $produk1 );
// $cetakproduk->tambahproduk( $produk2 );
// echo $cetakproduk->cetak();

// echo "<hr>";

// new Septi\Produk\User();

// echo "<hr>";

// new Jennie\Service\User();

use Septi\Produk\User as ProdukUser;
use Jennie\Service\User as ServiceUser;

new ProdukUser();

echo "<hr>";

new ServiceUser();
