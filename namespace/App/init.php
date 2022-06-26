<?php
  //  require_once 'Product/game.php';
  //  require_once 'Product/produk.php';
  //  require_once 'Product/infoProduct.php';
  //  require_once 'Product/komik.php';
  //  require_once 'Product/CetakInfoProduk.php'; 
  //  require_once 'Product/User.php';
  //  require_once 'Service/User.php';

 spl_autoload_register( function( $class ) {
     $class = explode('\\', $class);
     $class = end($class); 
     require_once __DIR__.'/Product/'.$class.'.php'; 
     require_once __DIR__.'/Service/'.$class.'.php';
 } );
 