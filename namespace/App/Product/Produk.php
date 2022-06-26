<?php
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