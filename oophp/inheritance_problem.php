<?php  


class Produk {
	public $judul,
		   $penulis,
		   $penerbit,
		   $harga,
		   $jmlhalaman,
		   $waktumain,
		   $tipe;


    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlhalaman = 0, $waktumain = 0, $tipe ) {
    	   $this->judul = $judul;
    	   $this->penulis = $penulis;
    	   $this->penerbit = $penerbit;
    	   $this->harga = $harga;
    	   $this->jmlhalaman = $jmlhalaman;
    	   $this->waktumain	= $waktumain;
    	   $this->tipe = $tipe;
    }

	public function GetLabel() {
		return "$this->penulis, $this->penerbit";
	}


	public function getinfolengkap() {
		// Komik : Naruto | Mashashi Kishimoto, Shonen Jump (Rp. 30000) - 100 Halaman.
		$str = "{$this->tipe} : {$this->judul} | {$this->GetLabel()} (Rp. {$this->harga})";
		if ( $this->tipe == "Komik" ) {
			$str .= " - {$this->jmlhalaman} Halaman. "; 
		} else if ( $this->tipe == "Game" ) {
			$str .= " - {$this->waktumain} Jam. ";
		}

		return $str;
	}
}

class CetakInfoProduk {
		public function cetak( Produk $produk ) {
			$str = "{$produk->judul} | {$produk->GetLabel()} (Rp. {$produk->harga})";
			return $str;
		}
	}


$produk1 = new Produk ("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100, 0, "Komik");

$produk2 = new Produk ("Uncharted", "Neil Druckman", "Sony Computer", 250000, 0, 50, "Game");

echo $produk1->getinfolengkap();
echo "<br>";
echo $produk2->getinfolengkap();