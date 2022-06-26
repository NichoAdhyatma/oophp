<?php
require_once 'produk.php';
require_once 'infoProduct.php';
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