<meta charset="utf-8">
<?php

/*
	PHP'de verilen verilerin birbiri ile karşılaştırılması ve dönen yanıtlara göre karar mekanizmalarının kurulmasına aracılık eden operatörlerdir

	>	-> Büyükse
	<	-> Küçükse
	==	-> Eşitse
	===	-> Denkse
	>= 	-> Büyük ya da eşitse
	<=	-> Küçük ya da eşitse
	!	-> Başa geldiğinde zıtlık kazandırır
	!=	-> Eşit değilse
	!==	-> Denk değilse

	// Birlikte kontrol operatörleri
	// Birden fazla karşılaştırmayı aynı alanda yapmak için, karşılaştırmaların arasında kullanılır, öncelik parantezlerle belirtilebilir

	ikisini de karşılıyorsa =>			AND		veya	&&
	herhangi birini karşılıyorsa => 	OR		veya	||

*/


if(10>8 OR 0>10){
	echo "10, 8'den büyükmüş";
}

if(3=="3"){
	echo "<br>burası çalışır";
}

if(3==="3"){
	echo "<br>burası çalışmaz";
}







