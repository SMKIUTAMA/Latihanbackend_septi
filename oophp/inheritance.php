<?php  


class Produk {
	public $judul,
		   $penulis,
		   $penerbit,
		   $harga,
		   $jmlhalaman,
		   $waktumain;


    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlhalaman = 0, $waktumain = 0 ) {
    	   $this->judul = $judul;
    	   $this->penulis = $penulis;
    	   $this->penerbit = $penerbit;
    	   $this->harga = $harga;
    	   $this->jmlhalaman = $jmlhalaman;
    	   $this->waktumain	= $waktumain;
    }

	public function GetLabel() {
		return "$this->penulis, $this->penerbit";
	}


	public function getinfoproduk() {
		// Komik : Naruto | Mashashi Kishimoto, Shonen Jump (Rp. 30000) - 100 Halaman.
		$str = "{$this->judul} | {$this->GetLabel()} (Rp. {$this->harga})";

		return $str;
	}
}


class Komik extends Produk {
	public function getinfoproduk() {
		$str = "Komik : {$this->judul} | {$this->GetLabel()} (Rp. {$this->harga}) - {$this->jmlhalaman} Halaman.";
	return $str;
	}
}

class Game extends Produk {
	public function getinfoproduk() {
		$str = "Game : {$this->judul} | {$this->GetLabel()} (Rp. {$this->harga}) ~ {$this->waktumain} Jam.";
	return $str;
	}
}

class CetakInfoProduk {
		public function cetak( Produk $produk ) {
			$str = "{$produk->judul} | {$produk->GetLabel()} (Rp. {$produk->harga})";
			return $str;
		}
	}


$produk1 = new Komik ("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100, 0);

$produk2 = new Game ("Uncharted", "Neil Druckman", "Sony Computer", 250000, 0, 50);

echo $produk1->getinfoproduk();
echo "<br>";
echo $produk2->getinfoproduk();