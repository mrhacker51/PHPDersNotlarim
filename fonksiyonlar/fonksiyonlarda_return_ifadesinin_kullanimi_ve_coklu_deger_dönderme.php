<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fonksiyonlarda_return_ifadesinin_kullanimi_ve_coklu_deger_dönderme .... .... </title>
</head>
<body>
	<?php

	function yaz(){
		$isim    = "acelya";
		$soyisim = "duran";
		$yas 	 = 18;
		$boy 	 = 1.94;
		return array($isim,$soyisim,$yas,$boy);  
	}

	$result = yaz();

	echo "<pre>";
	print_r($result);
	echo "</pre>";


	echo "Kullanicinin Adi = " 	  . $result[0] . "</br>";
	echo "Kullanicinin SoyAdi = " . $result[1] . "</br>";
	echo "Kullanicinin Yasi = "   . $result[2] . "</br>";
	echo "Kullanicinin Boyu = "   . $result[3];
	?>
</body>
</html>
