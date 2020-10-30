<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fonksiyonlarda_return_ifadesinin_kullanimi_ve_coklu_deger_dönderme .... .... </title>
</head>
<body>
	<?php

	$Sonuc = function(){
		$isim    = "acelya";
		$soyisim = "duran";
		$yas 	 = 18;
		$boy 	 = 1.94;
		return array($isim,$soyisim,$yas,$boy);  
	};

	$response = $Sonuc();

	echo "Kullanicin Adi : "    . $response[0] . "</br>";
	echo "Kullanicin SoyAdi : " . $response[1] . "</br>";
	echo "Kullanicin Yasi : "   . $response[2] . "</br>";
	echo "Kullanicin Boyu : "   . $response[3];	

	echo "</br>";
	//

	$School = function(){
		$lecture_1 = "PHP";
		$lecture_2 = "C";
		$lecture_3 = "Python";
		$language = array($lecture_1,$lecture_2,$lecture_3);
		return $language;
	};

	$result_lecture = $School();

	echo "<strong>" . "One Day : "   . $result_lecture[0] . "</strong>" ."</br>"; 
	echo "<strong>" . "Two Day : "   . $result_lecture[1] . "</strong>" ."</br>";
	echo "<strong>" . "Three Day :"  . $result_lecture[2] . "</strong>";
	?>
</body>
</html>
