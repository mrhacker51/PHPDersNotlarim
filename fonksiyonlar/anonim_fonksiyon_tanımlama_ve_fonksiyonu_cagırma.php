<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>anonim_fonksiyon_tanımlama_ve_fonksiyonu_cagırma .... .... </title>
</head>
<body>
	<?php


	$result = function(){
		echo "PHP Egitimi";
	};

	$result();



 	//


	$my_list = array("PHP","cSharp",
		array(
			"JavaScript",
			"Assembly"),
		"Ruby","Go");

	echo "<pre>";
	print_r($my_list);
	echo "</pre>";





	//



	$my_list_new = array("PHP","cSharp",
		array(
			"JavaScript",
			"Assembly",
			function(){
				echo "You Winner ....";
			}),
		"Ruby","Go");

	echo "<pre>";
	print_r($my_list);
	echo "</pre>";
	


	$my_list_new[2][2]();


	$my_array = array(
		"İnna",
		"Madonna",
		"Jonas Brothers",
		array(
			"PHP",
			"cSharp",
			"SQL",
			array(
				"F#",
				"Ruby",
				"Golang",
				array(
					"CTF",
					"FLAG",
					"READ",
					"ACCOUNT",
					function(){
						for($i = 1; $i <= 50; $i++){
							if($i % 2 == 0):
								echo "Cift : " . $i . "</br>";
							else:
								echo "Tek  : " . $i . "</br>";
							endif;
						}

					}
				)
			)
		)


	);


	echo "<pre>";
	print_r($my_array);
	echo "</pre>";

	$my_array[3][3][3][4]();


	?>
</body>
</html>
