<meta charset="utf-8">
<?php

/*

	Arka arkaya tekrar etmesi gereken işlemler için PHP'de döngüleri kullanabiliriz

	for
	foreach
	while
	do while

	Listedeki gibi 4 temel döngümüz vardır

	for döngüsünü, atanmış bir sayının kontrolü, ve her döngüde bu sayı üzerinden yapılacak işlem ile tanımlarız

	foreach döngüsünü, bir dizi içindeki her bir eleman için bir temsilci değişken atamasını ve bunun üzerinden işlem yapmasını sağlamak adına kullanırız

	while döngüsü, içine true ya da false çıktısı veren bir boolean parametre alır, bu şart sağlandığı (true olduğu) sürece çalışır. Bu şartın, bu döngü çalışırken aksine döneceği garantisini vermeliyiz, aksi halde döngü sonsuz tekrara girer ve sistem kilitlenebilir

	do while döngüsü, while ile aynı şartlarda çalışır, ancak while belirtilmeden önce do kod bloğu içine yazılan alan her ne olursa olsun en az 1 defa çalışır, sonrasında ise while şartı karşılandığı sürece tekrar eder
*
*/

for ($i=0; $i < 10; $i++) { 
	echo $i . "<br>";
}

// for içinde tanımlanan integer (bu örnek için $i) global bir değişken olarak atanır, ve sonradan kullanılabilir.

// unset($i);
echo "<hr>";

echo $i;

echo "<hr><hr><hr>";

$yazAylari = ["Haziran", "Temmuz", "Ağustos"];

echo "<h1>Yaz Ayları</h1>";
foreach($yazAylari as $yazAyi){
	echo $yazAyi . "<br>";
}

echo "<hr>";
echo $yazAyi;
echo "<hr>";

$notlar = array(
	"Uğur" => 99,
	"Sedanur" => 83,
	"Ahmet" => 12
	);

echo "<h1>Notlar</h1>";

foreach($notlar as $ogrenci => $not){
	echo $ogrenci . " - " . $not . "<br>";
}

echo "<hr>";

$ogrenciNotlari = array(
	"Uğur" => ["not" => 90],
	"Seda" => ["not" => 83],
	"Ahmet" => ["not" => 12],
	);

echo "<pre>";
	var_dump($ogrenciNotlari);
echo "</pre>";

foreach ($ogrenciNotlari as $ogrenciAdi => $notBilgisi) {
	if($notBilgisi['not']>45):
		$ogrenciNotlari[$ogrenciAdi]['basariliMi'] = true;
		echo $ogrenciAdi . " - " . $ogrenciNotlari[$ogrenciAdi]['basariliMi'] . "<br>";
	endif;
}

echo "<hr>";
echo "<pre>";
	var_dump($ogrenciNotlari);
echo "</pre>";


echo "<hr>";
echo "<hr>";
echo "<hr>";

$i = 0;
while($i<10){
	echo ++$i . "<br>";
}

echo "<hr>";
echo "<hr>";
echo "<hr>";

do{
	$r = rand(0, 1000);
	echo $r . "<br>";
}while( $r%12 != 0);



echo "<hr>";
echo "<hr>";
echo "<hr>";


// döngü içinde "break" kullanacak olursak döngünün çalıştırılması tamamen durdurulur. Örneğin foreach içinde bir dizinin elemanlarını tek tek inceleyip bir sonuca ulaşmak istiyorsak, istediğimiz sonuca (ilgili elemana) ulaştıktan sonra döngünün geri kalanını çalıştırmak istemeyiz. Belli bir şartı sağladığımızda "break" diyerek, döngünün kalan kısmını komple kırmış oluruz, şimdiye kadar olanı bize yetti cnm sağol demiş oluruz


for ($i=1; $i < 5000; $i++) { 
	echo $i . "<br>";
	if( $i%13 == 0) break;
}

echo "<hr>";

// döngü içinde "continue" kullandığımızda, döngünün içinde bulunduğu tekrarını atlayıp, bir sonraki tekrara geçeriz

for ($i=1; $i<10; $i++) { 
	if( $i%2 == 0) continue;
	echo $i . "<br>";
}








?>