<?php  
class Komik extends Produk implements infoproduk {
	public $jmlhalaman;

	public function __construct(  $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlhalaman = 0 ) {


		parent::__construct( $judul, $penulis, $penerbit, $harga );

		$this->jmlhalaman = $jmlhalaman;

	}

	public function getinfo() {
		// Komik : Naruto | Mashashi Kishimoto, Shonen Jump (Rp. 30000) - 100 Halaman.
		$str = "{$this->judul} | {$this->GetLabel()} (Rp. {$this->harga})";

		return $str;
	}

	public function getinfoproduk() {
		$str = "Komik : " . $this->getinfo() . " - {$this->jmlhalaman} Halaman.";
	return $str;
	}
}
