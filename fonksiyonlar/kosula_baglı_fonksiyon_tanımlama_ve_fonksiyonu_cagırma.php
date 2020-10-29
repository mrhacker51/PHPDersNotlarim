<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kosula_baglı_fonksiyon_tanımlama_ve_fonksiyonu_cagırma .... .... </title>
</head>
<body>
	<?php

	$deger = "PHP";
	switch($deger){
		case ($deger == "volkan"):
		function hello(){
			global $deger;
			echo "Merhaba" . $deger;
		}
		break;

		default:
		function hello(){
			global $deger;
			echo "Merhaba {$deger}";
		}
		break;
	}

	hello();

	echo "</br>";

	$website = "www.google.com";
	$port = 80;

	if($website == "www.google.com"):
		function beautiful(){
			global $website;
			echo "Merhaba {$website}";
		}
	elseif($website == "www.m.google.com"):
		function beautiful(){
			global $website;
			echo "Merhaba {$website}";
		}
	elseif($website == "www.h.google.com"):
		function beautiful(){
			global $website;
			echo "Merhaba {$website}";
		}
	elseif($website == "www.b.google.com"):
		function beautiful(){
			global $website;
			echo "Merhaba {$website}";
		}
	elseif($website == "www.s.google.com"):
		function beautiful(){
			global $website;
			echo "Merhaba {$website}";
		}
	elseif(($website == "www.d.google.com") or ($port == 80)):
		function beautiful(){
			global $website;
			echo "Merhaba {$website}";
		}
	else:
		function beautiful(){
			global $website;
			echo "Merhaba {$website}";
		}
	endif;


	beautiful();

	?>
</body>
</html>
