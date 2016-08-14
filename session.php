<?php

/**
	Oturum verisini saklamak için SESSION'ı kullanırız

	SESSION verilerine $_SESSION global değişkeni üzerinden erişilir

	Bu global değişkenin aktif olması ve erişilebilmesi için, kullanılacağı sayfada session_start() fonksiyonu ile aktif edilmelidir

	SESSION içine yeni bir eleman eklemek için, dizi tipindeki $_SESSION global değişkenine yeni bir eleman eklemek yeterlidir
	$_SESSION['yenieleman'] = "deger";

	SESSION içine eklenen herhangi bir değeri, bir değişkeni kaldırır gibi unset() fonksiyonu ile kaldırabiliriz
	unset($_SESSION['yenideger']);

	Oturum işlemlerini sonlandırıp oturumu tamamen silmek için session_destroy() fonksiyonunu kullanabiliriz
	session_destroy()

	Oturuma eklenen veri, oturumun aktif edildiği tüm sayfalardan erişilebilir hale gelir. Haliyle oturuma bir kere tanımlanan $_SESSION['yeniveri'] değişkeni tüm sayfalar için tanımlanmış olur. Oturum sonlandırılmadığı, bilgi silinmediği sürece tüm sayfalardan erişilebilir

	SESSION içinde oturumu aktif olan kullanıcıya ait bilgilerin ayrıştırılması için, COOKIE içinde PHPSESSID değişkeni kullanılır. Kullanıcının tarayıcısına PHP tarafından otomatik olarak yerleştirilen bu 32 karakterlik anahtar ile gelen talep sayesinde PHP, SESSION içindeki hangi alanı o kullanıcı için okuyacağını anlar. Bunlar için bizim bir şey yapmamıza gerek yok, PHP hallediyor. Nasıl çalıştığını bilelim diye yazdım :)
*/

session_start();
$_SESSION['username'] = "Uğur ARICI";

// session_destroy();

echo $_SESSION['username'];

echo "<hr><pre>";

var_dump($_COOKIE);
echo "<hr><pre>";

var_dump($_SESSION);