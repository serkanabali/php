<?php

//var_dump ve gettype farkı
/*$sayi=30;
$ad="Çisem Yaşar";

#var_dump etiket almaz, hem adı hem türü görüntüler
var_dump($sayi,$ad);
echo "<br>";

//gettype aynı satırda 1 parametre açar
echo gettype($sayi)."<br>".gettype($ad);*/



//Gettype Uygulama
/*$degisken = true; 
$degisken2 = 3; 
$degisken3 = 5.6; 
$degisken4 = "Çisem"; 
$degisken5 = array("red", "blue", "yellow"); 
$degisken6 = new stdClass;
$degisken7 = NULL; 
$degisken8= "30";
  
echo gettype($degisken)."<br>".
     gettype($degisken2)."<br>".
     gettype($degisken3)."<br>".
     gettype($degisken4)."<br>".
     gettype($degisken5)."<br>".
     gettype($degisken6)."<br>".
     gettype($degisken7)."<br>".
     gettype($degisken8)."<br>";*/





//Gettype Ekran Görüntüsü
/*zz$sayi = 55;
echo "<b>Birinci değişkenin adı: \$sayi</b>"."<br>".        "Değeri : ".$sayi."<br>".
 "Türü : ".gettype( $sayi )."<br>"."<br>" ;

$adi = "Çisem";
echo "<b>İkinci değişkenin adı: \$adi</b>"."<br>".          "Değeri : ".$adi."<br>".
 "Türü : ".gettype( $adi )."<br>"."<br>" ; 
  
$ondalik = 5.1234;
echo "<b>Üçüncü değişkenin adı: \$ondalik</b>"."            <br>"."Değeri : ". $ondalik."<br>".
 "Türü : ".gettype( $ondalik ) ."<br>"."<br>"; 

$mantiksal = true;
echo "<b>Dördüncü değişkenin adı: \$mantiksal</b>"."        <br>"."Değeri : ".$mantiksal."<br>".
 "Türü : ".gettype( $mantiksal )."<br>"."<br>" ;*/




//Settype

$a = "32";
settype($a, "integer"); 
var_dump($a);
echo gettype($a)."<br>";

$b = 32;
settype($b, "string"); 
var_dump($b);
echo gettype($b)."<br>";


$c = true;
settype($c, "integer");
var_dump($c);
echo gettype($c)."<br>";


//Sabit örnekleri

echo "<h3><u>Sabit örnekleri</u></h3>";
define("Pi", 3.14);

echo "Oluşturulan sabit <b>Pi</b> değeri: ".Pi."<br>"."<br>";

define("ders_adi", "İnternet Programcılığı I ", false);

echo "<u>Dersimizin Adı:</u> ".ders_adi;




//PHP SABİTLERİ 
echo "<h2>PHP SABİTLERİ</h2>"."<br>".
     "Kodun Bulunduğu Yer: ". (__LINE__)."<br>".
     "Dosyanın Bulunduğu Yer: ".(__FILE__)."<br>".
     "Sunucudaki PHP versiyonu: ". phpversion()."<br>".
     "Sunucu İşletim Sistemi: ".(PHP_OS)."<br>".
     "Dosyanın Bulunduğu Dizin: ". (__DIR__);





//Çevresel Değişkenler
echo "<h2>Çevresel Değişkenler</h2>"."<br>".
     "<b>Sitenin dosya yolu:  </b>". $_SERVER ['DOCUMENT_ROOT']."<br>".
     "<b>Tarayıcı türü ve versiyonu:  </b>".  $_SERVER['HTTP_USER_AGENT']."<br>".
     "<b>DNS adı:  </b>". $_SERVER['SERVER_NAME']."<br>".
     "<b>Sitenin Port adresi: </b>". $_SERVER['SERVER_PORT']."<br>".
     "<b>Host Adresi: </b>".$_SERVER['HTTP_HOST'];

?>


