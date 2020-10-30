<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fonksiyonlarda_return_ifadesinin_kullanimi .... .... </title>
</head>
<body>
	<?php

	function islem(){
		$islemiyap = "Merhaba PHP";
		return $islemiyap;
	}



	$result = islem();


	if($result == "Merhaba PHP"){
		echo "True ...";
	}
	else{
		echo "False ...";
	}

	//


	function news(){
		$name = "James";
		$surname = "Bond";

		return $name . $surname;
	}

	$response = news();

	if($response == "JamesBond"):
		echo "You {$response}";
	else:
		echo "No ...";
	endif;

	?>
</body>
</html>
