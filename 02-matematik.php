<meta charset="utf-8">
<?php

/*
	PHP'de standart matematik işlemlerini yapabiliriz
	Bu derste yalnızca bunları göreceğiz
	Bazı ileri matematik işlemleri için PHP içinde dahili fonksiyonlar bulunabiliyor
*/

/*
	+ -> TOPLAMA
	- -> ÇIKARMA
	* -> ÇARPMA
	/ -> BÖLME
	% -> MOD

	Matematikteki işlem önceliği ile çalışıyor
*/
echo gettype($_GET['ilksayi']);

echo "<hr>";

echo "Toplama ". ($_GET['ilksayi']+$_GET['ikincisayi']);

echo "<hr>";

echo "Çıkarma ". ($_GET['ilksayi']-$_GET['ikincisayi']);

echo "<hr>";

echo "Çarpma ". ($_GET['ilksayi']*$_GET['ikincisayi']);

echo "<hr>";

echo "Bölme ". ($_GET['ilksayi']/$_GET['ikincisayi']);

echo "<hr>";

echo "Mod ".$_GET['ilksayi']%$_GET['ikincisayi'];
