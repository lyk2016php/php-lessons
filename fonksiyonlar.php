<meta charset="utf-8">
<?php

// fonksiyonlar belirli bir işlemi yapması için tanımlanan ve ihtiyaç duyulduğunda çağırılan kod blokları olarka tanımlanabilir

// kullanılmadan önce mutlaka tanımlanması gerekmektedir, yorumlayıcıda ise kodda bulunması durumunda tanımlandığı yerden önce de kullanılabilir

// fonksiyonlar, içine gönderilen parametrelere göre çıktı üretebilirler, ancak tanımlanırken alabileceği parametrelerin de tanımlanması gerekmektedir

// fonksiyon parametrelerine öntanımlı veri atanabilir (parametreye veri gönderilmezse, bu öntanımlı veri kullanılır)


echo selamVer();


function selamVer(){
	return "Selam!";
}



echo "<hr><hr><hr>";



// fonksiyon içinde atanan değişkenler, o fonksiyona özeldir. Parametre ile gönderilmediği sürece, dışarıdaki değişken isimlerine erişilemez, içeride tanımlananlar da dışarıdan kullanılamaz

// fonksiyonun içinde kullanmak istediğimiz global değişkenleri, fonksiyon içinde global anahtar kelimesinden sonra aralarında virgülle sıralarsak kendi isimleriyle, fonksiyon içinden erişilebilir hale gelirler

$isim = "Uğur";
$digerDegisken = "Öbürsü";

function isimSoyle(){
	global $digerDegisken;
	$isim = "Hakan";
	$GLOBALS['isim'] = $isim;
	return $digerDegisken;
}

echo isimSoyle();
echo "<br>";
echo $isim;

echo "<hr><hr><hr>";

/**
function hataVar(){
	echo "bunun noktalı virgülü yok"
}

Burası hata verecektir, çünkü noktalı virgülü yok
*/


function onceBu(){
	echo "onceBu() çalıştı<br>";
	if (!function_exists('sonraBu')):
	function sonraBu(){
		echo "sonraBu() çalıştı<br>";
		if (!function_exists('enSonDaBu')):
		function enSonDaBu(){
			echo "enSonDaBu() çalıştı<br>";
		}
		endif;
	}
	endif;
}

onceBu();
sonraBu();
enSonDaBu();

sonraBu();


echo "<hr><hr><hr>";


// recursive fonksiyonlar, kendi içinde kendini çağıran fonksiyonlardır

$dizi = array(
	"elma",
	"armut",
	"kel mahmut",
	['kabaramazsın', 'kel', 'fatma'],
	'annen',
	['güzel', ['sen', 'çirkin']]
	);

function arrayToList($array){
	echo "<ul>";
	foreach ($array as $var) {
		echo "<li>";
		if(is_array($var)):
			arrayToList($var);
		else:
			echo $var;
		endif;
		echo "</li>";
	}
	echo "</ul>";
}

arrayToList($dizi);


echo "<hr><hr><hr>";


// ilk sayıyı veriyoruz, 0 olarak, ikinci sayımızı da 1 olarka veriyoruz, bu iki değeri toplayıp 


function recFib($kacinci){
	if($kacinci==0) return 0;
	if($kacinci==1) return 1;
	return recFib($kacinci-1) + recFib($kacinci-2);
}



for ($i=0; $i < 50; $i++) { 
	echo recFib($i)."<br>";
}







