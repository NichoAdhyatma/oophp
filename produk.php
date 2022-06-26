<?php 

class Produk {
    public $judul,
           $penerbit,
           $harga,
           $jmlHalaman,
           $waktuMain,
           $tipe;

    public function __construct( $judul = "judul", $penerbit = "penerbit", $harga = 0,
     $jmlHalaman = 0, $waktuMain = 0, $tipe) {
        $this->judul = $judul;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
        $this->tipe = $tipe;
    }
    public function sayHello() {
        return "Hello World!";
    }

    public function getLabel() {
        return "{$this->judul} | {$this->penerbit}, (Rp. {$this->harga})";
    }

    public function getInfo() {
        $str = "{$this->tipe} : {$this->getLabel()}";

        if($this->tipe == "Komik") {
            $str .= " - {$this->jmlHalaman} Halaman.";
        } else if($this->tipe == "Game") {
            $str .= " - {$this->waktuMain} Jam.";
        }
        return $str;
    }
}

class CetakInfo {
    public function cetak( Produk $produk) {
        return $str = $produk->getLabel();
    }
}

$buku = new Produk("Naruto Shippuden", "Shonen Jump", 25000, 100, 0, "Komik");

$game = new Produk("Mobile Legend", "Moonton", 100000, 0, 50, "Game"); 

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

echo $buku->getInfo();
echo "<br><br>";
echo $game->getInfo();