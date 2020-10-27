<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fonksiyonlarda global ifadesi .... .... </title>
</head>
<body>
	<?php

	function deger(){
		global $Isim;
		$Isim = "FoxTV";
		echo $Isim;
	}


	deger();


	$Degers = "ShowTV";

	function new_deger(){
		global $Degers;
		echo "</br>";
		echo $Degers;
	}

	new_deger();



	$GLOBALS["Isimm"] = "Tv8";

	function hello(){
		echo "</br>" .$GLOBALS["Isimm"];
	}

	hello();



	$my_array = array("PHP","cSharp","JavaScript","Python");

	function my_arrays(){
		global $my_array;
		echo "</br>";
		print_r($my_array);
	}

	my_arrays();



	define("LOL","YouWinner....");

	function winner(){
		echo "<br>" . LOL . "</br>";
	}

	winner();



	?>
</body>
</html>
