<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fonksiyonlarda_parametre_kullanimi_ve_cagirma .... .... </title>
</head>
<body>
	<?php

	function users($isim,$soyisim,$yas,$boy,$sehir){
		$userisim    = $isim;
		$usersoyisim = $soyisim;
		$useryas     = $yas;
		$userboy 	 = $boy;
		$usersehir   = $sehir;

		echo "İsim : " . $userisim . " " . "Soyİsim : " . $usersoyisim . " " . "Yas : " . $useryas . " " . "Boy : " . $userboy . " " . "Sehir : " . $usersehir . "</br>";
	}


	users("Hande","güclü",28,1.90,"Istanbul");
		

	//


	function user_($isim,$soyisim,$yas,$boy,$sehir){
		$userisim    = $isim;
		$usersoyisim = $soyisim;
		$useryas     = $yas;
		$userboy 	 = $boy;
		$usersehir   = $sehir;

		return "İsim : " . $userisim . " " . "Soyİsim : " . $usersoyisim . " " . "Yas : " . $useryas . " " . "Boy : " . $userboy . " " . "Sehir : " . $usersehir;
	}


	$result = user_("Banu","Zorlu",22,1.65,"İzmir");

	echo $result;

	echo "</br>";


	//
 
	function deneme($x,$y,$z){
		return "Deger1 : " . $x . " " ."Deger2 : " . " " . $y . " " . "Deger3 : " . $z;
	}


	$rr = deneme(10,20,30);
	echo $rr;


	?>
</body>
</html>
