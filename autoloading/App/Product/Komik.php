<?php
require_once 'Produk.php';
require_once 'InfoProduct.php';

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