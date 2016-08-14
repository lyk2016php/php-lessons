<?php

// Cookie
// Kullanıcının ziyareti sırasında bu ziyarete ilişkin kimi verileri, kullacının tarayıcısı tarafında kaydetmemizi ve ihtiyaç duyduğumuzda değişken şeklinde erişebilmemizi sağlayan yapıdır

// PHP üzerinden cookielere erişebiliriz, yeni cookie tanımlayabiliriz ve var olanları kaldırabiliriz

// cookie içine sadece string atayabiliriz, dizi, obje gibi veri tiplerini asla desteklemez

/**
	Cookie'de neler saklanabilir?
	-	Siteye ilk girdiği zamanı
	-	Varsa sayfadaki kimi özelleştirmeler (sayfa geçişlerinden saklanan başlık rengi gibi)
	-	Sayfaları dolaşırken kullanmak adına ziyaretçinin adı (Sayfa üstünde her zaman "Merhaba UĞUR" yazabiliriz)
	-	İncelenen ürünler

	Özetle, ziyaret sırasında kullanılacak, o ziyarete özel atanan çerez bilgiler
.
*/

// PHP'de cookie atamak için setcookie() fonksiyonu kullanılır, ilk parametreye cookienin adı (örn: username), ikini parametreye cookienin değeri (örn:ugurarici) verilmelidir, opsiyonel olarak gönderilebilecek üçüncü parametreye ise, cookie'nin ömrünün ne zaman tamamlanacağını unix timestamp olarak (time() fonksiyonu üzerinden) saniye cinsinde gönderebiliriz

// ziyaretçi adını atayalım, diğer sayfalarda da kullanabilelim
// ne zaman sonlanacağı bilgisi verilmezse, cookie tarayıcı kapatılana değin saklanır
setcookie("name", "Uğur");


// şimdiden 5 saniye sonrasına kadar saklanacak bir cookie atayalım, zamanı geldiğinde otomatik olarak kaldırılır ve erişilemez
// setcookie("name", "Uğur ARICI", time()+5);

// süresiz ya da uzun zaman sonrasına atanmış bir cookieyi temizlemek için ömrünün dolacağı zamanı şimdiden öncesine veririz
// setcookie("name", "Uğur ARICI", time()-1000);

echo "<pre>";
var_dump($_COOKIE);
// echo date("Y-m-d H:i:s", time()-(60*60));









