<meta charset="utf-8">
<?php

// if ile tek bir değişkenin farklı değerlere eşitliğini kontrol ettiğimiz yapılarda, if yerine switch-case kullanabiliriz

$yetkiler = array(
	"okuyabilir" => false,
	"duzenleyebilir" => false,
	"yaratabilir" => false,
	"silebilir" => false,
	);

// roller: yonetici, editor, kullanıcı, ziyaretci
$rol = "yonetici";


if($rol=="yonetici"){
	$yetkiler["okuyabilir"] = true;
	$yetkiler["duzenleyebilir"] = true;
	$yetkiler["yaratabilir"] = true;
	$yetkiler["silebilir"] = true;
}
elseif($rol=="editor"){
	$yetkiler["okuyabilir"] = true;
	$yetkiler["duzenleyebilir"] = true;
}
elseif($rol=="kullanici"){
	$yetkiler["okuyabilir"] = true;
}
elseif($rol=="ziyaretci"){
	$yetkiler["okuyabilir"] = true;
}
else{
	die("Sen de rol müsün? Böyle bir rol yok.");
}

echo "Rol: ".$rol;

echo "<br>Yetkiler: <br><pre>";
var_dump($yetkiler);
echo "</pre>";

echo "<hr>";

switch ($rol) {
	case 'yonetici':
		$yetkiler["okuyabilir"] = true;
		$yetkiler["duzenleyebilir"] = true;
		$yetkiler["yaratabilir"] = true;
		$yetkiler["silebilir"] = true;
		break;

	case 'editor':
		$yetkiler["okuyabilir"] = true;
		$yetkiler["duzenleyebilir"] = true;
		break;

	case 'kullanici':
		$yetkiler["okuyabilir"] = true;
		break;

	case 'ziyaretci':
		$yetkiler["okuyabilir"] = true;
		break;
	
	default:
		die("Sen de rol müsün? Böyle bir rol yok.");
	break;
}


echo "Rol: ".$rol;

echo "<br>Yetkiler: <br><pre>";
var_dump($yetkiler);
echo "</pre>";