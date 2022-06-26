<?php 
/*
class ContohStatic {
    public static $angka = 1;

    public static function halo() {
        return "Halo " .self::$angka++. " kali.";
    }
}
*/

class Contoh {
    public static $angka = 1;

    public static function halo() {
        return "Halo " .self::$angka++. " kali. <br>";
    }
}

/*
$obj = new Contoh;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();

echo "<hr>";

$obj2 = new Contoh;
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();
*/

echo Contoh::halo();



 //echo ContohStatic::$angka;
 //echo "<hr>";
 //echo ContohStatic::halo();