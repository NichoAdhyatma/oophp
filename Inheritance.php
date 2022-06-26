<?php 
class Produk {
    public $judul,
           $penerbit,
           $harga;

    public function __construct( $judul = "judul", $penerbit = "penerbit", $harga = 0) {
        $this->judul = $judul;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function sayHello() {
        return "Hello World!";
    }

    public function getInfoProduk() {
        return "{$this->judul} | {$this->penerbit} = (Rp. {$this->harga})";
    }
}

class Komik extends Produk {
    public $jmlHalaman;

    public function __construct( $judul = "judul", $penerbit = "penerbit",
     $harga = 0, $jmlHalaman = 0) {
        parent::__construct( $judul , $penerbit, $harga );
        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfoProduk() {
        $str = "Komik : ".parent::getInfoProduk(). " - {$this->jmlHalaman} Halaman.";
        return $str;
    }
 }

 class Game extends Produk {
    public $waktuMain;

    public function __construct( $judul = "judul", $penerbit = "penerbit",
     $harga = 0, $waktuMain = 0) {
        parent::__construct( $judul , $penerbit, $harga );
        $this->waktuMain = $waktuMain;
    }

    public function getInfoProduk() {
        $str = "Game :" .parent::getInfoProduk(). " ~ {$this->waktuMain} Jam.";
        return $str;
    }
 }

/* Object Type*/
class CetakInfo {
    /* Parameter yang di gunakan harus memiliki  object class Produk*/ 
    public function cetak( Produk $produk) {
        return $str = "{$produk->judul} | {$produk->penerbit}";
    }
}

$buku = new Komik("Naruto Shippuden", "Shonen Jump", 25000, 100);

$game = new Game("Mobile Legend", "Moonton", 100000, 50); 

/* menjalankan method dari class Produk
echo "Komik : " .$buku->getLabel();
echo "<br><br>";
echo "Game  : " .$game->getLabel();


Object dari class CetakInfo
$infoProduk = new CetakInfo();

Object type
echo "Komik : " .$infoProduk->cetak($buku);
echo "<br><br>";
echo "Novel : " .$infoProduk->cetak($novel);
echo "<br><br>";
echo "Game : " .$infoProduk->cetak($game);
*/

echo $buku->getInfoProduk();
echo "<br><br>";
echo $game->getInfoProduk();
