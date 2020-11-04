<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fonksiyonlarda_parametrelere_varsayilan_deger_atama .... .... </title>
</head>
<body>
	<?php
		
	function Islem($Isim,$Soyisim,$Yas){
		$GelenIsim = $Isim;
		$GelenSoyIsim = $Soyisim;
		$GelenYas = $Yas;

		echo "Gelen İsim Bilgisi : " . $GelenIsim . "</br>";
		echo "Gelen SoyIsim Bilgisi : " . $GelenSoyIsim . "</br>";
		echo "Gelen Yas Bilgisi : " . $GelenYas;
	}


	Islem("Banu","Alkan",30);

	//
	echo "</br>";

	function Islem_($Isim,$Soyisim,$Yas=45){
		$GelenIsim = $Isim;
		$GelenSoyIsim = $Soyisim;
		$GelenYas = $Yas;

		echo "Gelen İsim Bilgisi : " . $GelenIsim . "</br>";
		echo "Gelen SoyIsim Bilgisi : " . $GelenSoyIsim . "</br>";
		echo "Gelen Yas Bilgisi : " . $GelenYas;
	}


	Islem_("Hande","Alkan");

	//
	echo "</br>";

	function Islem__($Isim,$Soyisim,$Yas=45){
		$GelenIsim = $Isim;
		$GelenSoyIsim = $Soyisim;
		$GelenYas = $Yas;

		echo "Gelen İsim Bilgisi : " . $GelenIsim . "</br>";
		echo "Gelen SoyIsim Bilgisi : " . $GelenSoyIsim . "</br>";
		echo "Gelen Yas Bilgisi : " . $GelenYas;
	}


	Islem__("Buse","Alkan",65);

	//
	echo "</br>";

	$anonyfunction  = function($a=10,$b=20,$c=30){
		$aa = $a;
		$bb = $b;
		$cc = $c;
		echo "A : " . $aa . "</br>";
		echo "B : " . $bb . "</br>";
		echo "C : " . $cc;
	};

	$anonyfunction();

	?>
</body>
</html>
