<?php  
class Game extends Produk implements infoproduk {
	public $waktumain;

	public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktumain = 0 ) {

		parent::__construct( $judul, $penulis, $penerbit, $harga );

		$this->waktumain = $waktumain;

	}

	public function getinfo() {
		// Komik : Naruto | Mashashi Kishimoto, Shonen Jump (Rp. 30000) - 100 Halaman.
		$str = "{$this->judul} | {$this->GetLabel()} (Rp. {$this->harga})";

		return $str;
	}


	public function getinfoproduk() {
		$str = "Game : " . $this->getinfo() . " ~ {$this->waktumain} Jam.";
	return $str;
	}
}