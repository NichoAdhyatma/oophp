<?php
  // require_once 'Product/game.php';
  // require_once 'Product/produk.php';
  // require_once 'Product/infoProduct.php';
  // require_once 'Product/komik.php';
  // require_once 'Product/cetakInfo.php'; 

spl_autoload_register( function( $class ) {
    require_once __DIR__.'/Product/'.$class.'.php'; 
} );