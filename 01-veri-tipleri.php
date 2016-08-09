<meta charset="utf-8">
<?php

// PHP içinde kullanabileceğimiz temel veri tipleri

/*
boolean
integer
float (double)
string
array
object
resource
*/


// boolean
// ikili değer saklar, doğru ya da yanlış, evet ya da hayır, var ya da yok

$ogrenciMi = true;


echo "<pre>";
var_dump($ogrenciMi);
echo "</pre>";

echo "<hr>";


// integer -> Tam sayı veri tipi
$katilimcininYasi = 22;

echo "<pre>";
var_dump($katilimcininYasi);
echo "</pre>";

echo "<hr>";


// float (double) -> ondalık sayı veri tipi
// DİKKAT: Ondalık bölümü nokta (.) ile ayrılır, virgül değil
$iphoneFiyati = 3999.99;
$kucukCocugunYasi = 6.5;

echo "<pre>";
var_dump($kucukCocugunYasi);
echo "</pre>";

echo "<hr>";

// string -> metin veri tipi, yazılarımızın tamamı string olarak tutulur
// dış kaynaktan okuduğumuz verilerin neredeyse tamamı (özellikle form alanları) string olarak gelir

$sinifinAdi = "#LYK2016 PHP Sınıfı";

echo "<pre>";
var_dump($sinifinAdi);
echo "</pre>";

echo "<hr>";

// array -> dizi veri tipi
// 

$katilimcininHobileri = array("konuşmak", "yemek yemek");

echo "<pre>";
var_dump($katilimcininHobileri);
echo "</pre>";

echo "<hr>";

$katilimcininOkuduguOkullar = [
"ilkokul" => array(
	"isim"=>"Zehra Ülker İ.Ö.O.", 
	"sehir"=>"İstanbul",
	"mezuniyetYili" => 2011,
	"diplomaNotu" => 84.5
	),
"lise" => "Nevzat Ayaz A.L.",
"universite" => "KTÜ"
];



echo "<pre>";
var_dump($katilimcininOkuduguOkullar);
echo "</pre>";

echo "<hr>";

// object

// objeler, dizilerin object tipine çevrilmesi ile oluşturulabilir
$objeTipindeKatilimcininOkuduguOkullar = (object)$katilimcininOkuduguOkullar;

echo "<pre>";
var_dump($objeTipindeKatilimcininOkuduguOkullar);
echo "</pre>";

echo "<hr>";


// ama aslında objeler, tanımlanan bir sınıftan örnek alınarak oluşturulur


class Katilimci{
	private $isim;
	var $dogumTarihi;
	var $okuduguOkullar;

	public function setIsim($isim){
		$this->isim = $isim;
	}
}

$birKatilimci = new Katilimci;
$birKatilimci->setIsim("Gülsüm Akyıldız");

echo "<pre>";
var_dump($birKatilimci);
echo "</pre>";

echo "<hr>";


class Garson{
	var $isim;
	var $yasi;
	var $iseBaslamaSaati;
	var $istenAyrilmaSaati;
	var $calismaGunleri;

	function menuVer(){
		echo "Buyrun efendim, menümüz.<br>";
	}

	function siparisAl($urun){
		echo $urun." ürününüz için siparişinizi aldım efendim.";
	}

	function teslimEt($urun){
		echo $urun. " ürününüz teslim edildi efendim";
	}
}


$ahmet = new Garson;
$ahmet->isim = "Ahmet";
$ahmet->yasi = 27;
$ahmet->iseBaslamaSaati = 8;
$ahmet->istenAyrilmaSaati = 22;
$ahmet->calismaGunleri = [0,1,2,3,4,5,6];

echo "<pre>";
var_dump($ahmet);
echo "</pre>";

echo "<hr>";

$musteriGeldiMi = true;

if($musteriGeldiMi){
	$ahmet->menuVer();
}
echo "<hr>";


// --- tip anlama ve tip değiştirme


$ogrencininYasi = 20;
echo gettype($ogrencininYasi);

settype($ogrencininYasi, "string");

echo "<hr>";

echo gettype($ogrencininYasi);

echo "<hr>";
$lololololo = (int)"1aa23asdasdasd";
echo $lololololo;

echo "<hr>";
//---------
// Değişik değişik değişken atamaları

$araba = "Mercedes";
$ev = "Villa";
echo "Araba Önce: ". $araba;
echo "<br>Ev Önce: ". $ev;

$yeniVeri = ["degisecek" => "ev", "icerik" => "Gecekondu"];

$$yeniVeri['degisecek'] = $yeniVeri['icerik'];
echo "<br>Araba Sonra: ". $araba;
echo "<br>Ev Sonra: ". $ev;

echo "<hr>";

$a = "b";
$$a = "c";
echo $b;

echo "<hr>";


echo "beni de gör ;))) kıps";

echo "<hr>";




 




