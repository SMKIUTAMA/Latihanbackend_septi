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


	public function getinfoproduk() {
		// Komik : Naruto | Mashashi Kishimoto, Shonen Jump (Rp. 30000) - 100 Halaman.
		$str = "{$this->judul} | {$this->GetLabel()} (Rp. {$this->harga})";

		return $str;
	}
}


class Komik extends Produk {
	public $jmlhalaman;

	public function __construct(  $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlhalaman = 0 ) {


		parent::__construct( $judul, $penulis, $penerbit, $harga );

		$this->jmlhalaman = $jmlhalaman;

	}

	public function getinfoproduk() {
		$str = "Komik : " . parent::getinfoproduk() . " - {$this->jmlhalaman} Halaman.";
	return $str;
	}
}

class Game extends Produk {
	public $waktumain;

	public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktumain = 0 ) {

		parent::__construct( $judul, $penulis, $penerbit, $harga );

		$this->waktumain = $waktumain;

	}

	public function getinfoproduk() {
		$str = "Game : " . parent::getinfoproduk() . " ~ {$this->waktumain} Jam.";
	return $str;
	}
}

class CetakInfoProduk {
		public function cetak( Produk $produk ) {
			$str = "{$produk->judul} | {$produk->GetLabel()} (Rp. {$produk->harga})";
			return $str;
		}
	}


$produk1 = new Komik ("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);

$produk2 = new Game ("Uncharted", "Neil Druckman", "Sony Computer", 250000, 50);

echo $produk1->getinfoproduk();
echo "<br>";
echo $produk2->getinfoproduk();