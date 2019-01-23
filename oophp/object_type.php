<?php  


class Produk {
	public $judul,
		   $penulis,
		   $penerbit,
		   $harga;


    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0 ) {
    	   $this->judul = $judul;
    	   $this->penulis = $penulis;
    	   $this->penerbit = $penerbit;
    	   $this->harga = $harga;
    }

	public function GetLabel() {
		return "$this->penulis, $this->penerbit";
	}

} 


class CetakInfoProduk {
		public function cetak( Produk $produk ) {
			$str = "{$produk->judul} | {$produk->GetLabel()} (Rp. {$produk->harga})";
			return $str;
		}
	}


$produk1 = new Produk ("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);

$produk2 = new Produk ("Uncharted", "Neil Druckman", "Sony Computer", 250000);


echo "Komik : " . $produk1->GetLabel();
echo "<br>";
echo "Game : " . $produk2->GetLabel();
echo "<br>";

$InfoProduk1 = new CetakInfoProduk();
echo $InfoProduk1->cetak($produk1);