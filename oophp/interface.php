<?php  
interface infoproduk {
	public function getinfoproduk();
}

abstract class Produk {
	protected $judul,
		    $penulis,
		    $penerbit,
		    $harga,
		    $diskon = 0;

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0 ) {
    	   $this->judul = $judul;
    	   $this->penulis = $penulis;
    	   $this->penerbit = $penerbit;
    	   $this->harga = $harga;
    }

    public function setjudul( $judul ) {
    	$this->judul = $judul;	
    }

    public function getjudul() {
    	return $this->judul;
    }

    public function setpenulis( $penulis ) {
        $this->penulis = $penulis;
    }

    public function getpenulis() {
    	return $this->penulis;
    }

    public function setpenerbit( $penerbit ) {
    	$this->penerbit = $penerbit;
    }

    public function getpenerbit() {
    	return $this->penerbit;
    }

    public function setdiskon( $diskon ) {
    	$this->diskon = $diskon;
    } 

    public function getdiskon() {
    	return $this->diskon;
    }

    public function setharga( $harga ) {
    	$this->harga = $harga;
    }

    public function getharga() {
    	return $this->harga = ( $this->harga * $this->diskon / 100 );
    }

	public function GetLabel() {
		return "$this->penulis, $this->penerbit";
	}

	abstract public function getinfo();

}


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

class CetakInfoProduk {
		public $daftarproduk = array();

		public function tambahproduk( Produk $produk ) {
			$this->daftarproduk[] = $produk;
		}

		public function cetak() {
			$str = "DAFTAR PRODUK : <br>";

			foreach( $this->daftarproduk  as $p ) {
				$str .= "- {$p->getinfoproduk()} <br>";
			}

			return $str;
		}
	}


$produk1 = new Komik ("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);

$produk2 = new Game ("Uncharted", "Neil Druckman", "Sony Computer", 250000, 50);

$cetakproduk = new CetakInfoProduk();
$cetakproduk->tambahproduk( $produk1 );
$cetakproduk->tambahproduk( $produk2 );
echo $cetakproduk->cetak();

// $tes = new Produk();





