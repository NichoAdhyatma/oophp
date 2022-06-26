<?php 
require_once 'App/init.php';

// $Naruto = new Komik("Naruto Shippuden", "Shonen Jump", 25000, 100);

// $mobileLegends = new Game("Mobile Legend", "Moonton", 100000, 50);
 
// $freeFire = new Game("Free Fire", "Garena", 75000, 30); 

// $infoProduk = new CetakInfoProduk();

// $infoProduk->tambahProduk( $Naruto );
// $infoProduk->tambahProduk( $mobileLegends );
// $infoProduk->tambahProduk( $freeFire );

// echo $infoProduk->cetak();

use App\Service\User as ServiceUser;
use App\Product\User as ProductUser;

new ServiceUser;
echo "<br>";
new ProductUser;

echo "<br>";

echo date('H:i');;