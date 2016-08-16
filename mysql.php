<meta charset="UTF-8">
<?php

// PHP'de MySQL ile bağlantı sağlayıp veritabanı işlemlerini yapabiliriz

// Bunun için mysql_ fonksiyonlarını kullanırız

// her şeyden önce bağlantı yapacağımız mysql sunucusunun bilgilerine ihtiyacımız vardır
// sunucu adresi, mysql kullanıcı adı, bu kullanıcının şifresi

// bağlandığımız sunucuda hangi veritabanı üzerinde işlem yapacağımızı seçeriz

// gerekiyorsa karakter setimizi belirtiriz

// SQL sorgularımızı MySQL'e gönderebiliriz

// aldığımız sonuçları PHP içinde kullanabiliriz

$con = mysql_connect("localhost", "root", "root");

mysql_select_db("phponline", $con);

mysql_set_charset("utf8", $con);

$sql = mysql_query("SELECT * FROM students");

while($row = mysql_fetch_array($sql, MYSQL_ASSOC)){
    var_dump($row);
}

// ekleme sorgusu örneği
//$add = mysql_query("INSERT INTO students (name, surname, birth_year, gender) VALUES ('Uğur', 'ARICI', 1993, 2)");

//var_dump($add);
