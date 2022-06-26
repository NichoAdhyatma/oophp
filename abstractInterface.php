<?php 
interface InfoProduk {
   public function getInfoProduk();
}

abstract class Produk {
    protected $judul,
              $penerbit,
              $harga,
              $diskon = 0;

    public function __construct( $judul = "judul", $penerbit = "penerbit", $harga = 0) {
        $this->judul = $judul;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function sayHello() {
        return "Hello World!";
    }

    abstract public function getInfo() ;
       
    public function setDiskon( $diskon ) {
        $this->diskon = $diskon;
    }

    public function getDiskon() {
        return $this->diskon;
    }

    public function setJudul( $judul ) {
        if( !is_string( $judul) ) {
            throw new Exception("Judul harus string");
        }
        $this->judul = $judul;
    }

    public function getJudul() {
        return $this->judul;
    }

    public function setPenerbit( $penerbit) {
        $this->penerbit = $penerbit;
    }

    public function getPenerbit() {
        return $this->penerbit;
    }

    public function setHarga( $harga ) {
        $this->harga = $harga;
    }

    public function getHarga() {
        return $this->harga - ($this->diskon * $this->harga / 100);
    }
}

class Komik extends Produk implements InfoProduk {
    public $jmlHalaman;

    public function __construct( $judul = "judul", $penerbit = "penerbit",
     $harga = 0, $jmlHalaman = 0) {
        parent::__construct( $judul , $penerbit, $harga );
        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfo() {
      return "{$this->judul} | {$this->penerbit} = (Rp. {$this->harga})";
    }

    public function getInfoProduk() {
        $str = "Komik : ".$this->getInfo(). " - {$this->jmlHalaman} Halaman.";
        return $str;
    }
 }

class Game extends Produk implements InfoProduk {
    public $waktuMain;

    public function __construct( $judul = "judul", $penerbit = "penerbit",
     $harga = 0, $waktuMain = 0) {
        parent::__construct( $judul , $penerbit, $harga );
        $this->waktuMain = $waktuMain;
    }
    
    public function getInfo() {
      return "{$this->judul} | {$this->penerbit} = (Rp. {$this->harga})";
    }

    public function getInfoProduk() {
        $str = "Game : " .$this->getInfo(). " ~ {$this->waktuMain} Jam.";
        return $str;
    }
 }

/* Object Type*/
class CetakInfoProduk {
   public $daftarProduk = array();

   public function tambahProduk( Produk $produk) {
        $this->daftarProduk[] = $produk;
   }
  
    /* Parameter yang di gunakan harus memiliki  object class Produk*/ 
    public function cetak() {
        $str = "DAFTAR PRODUK : <br>";
        
        foreach( $this->daftarProduk as $p ) {
           $str .= " - {$p->getInfoProduk()} <br>";
        }

        return $str;
    }
}


$Naruto = new Komik("Naruto Shippuden", "Shonen Jump", 25000, 100);

$mobileLegends = new Game("Mobile Legend", "Moonton", 100000, 50);
 
$freeFire = new Game("Free Fire", "Garena", 75000, 30); 

$infoProduk = new CetakInfoProduk();

$infoProduk->tambahProduk( $Naruto );
$infoProduk->tambahProduk( $mobileLegends );
$infoProduk->tambahProduk( $freeFire );

echo $infoProduk->cetak();



/* menjalankan method dari class Produk
echo "Komik : " .$buku->getLabel();
echo "<br><br>";
echo "Game  : " .$game->getLabel();


Object type
echo "Komik : " .$infoProduk->cetak($buku);
echo "<br><br>";
echo "Novel : " .$infoProduk->cetak($novel);
echo "<br><br>";
echo "Game : " .$infoProduk->cetak($game);
*/
/*
echo $buku->getInfoProduk();
echo "<br><br>";
echo $game->getInfoProduk();
echo "<hr>";

$game->setDiskon(15);
echo $game->getHarga();

echo "<hr>";

$game->setPenerbit("Garena");
echo $game->getPenerbit();*/