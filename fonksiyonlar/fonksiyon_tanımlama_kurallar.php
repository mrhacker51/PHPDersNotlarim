<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fonksiyonlar .... </title>
</head>
<body>
	<?php

	function hello_php(){
		echo "Merhaba PHP" . "</br>";
	}


	hello_php();


	function yaziyaz(){
		$Deger = 1;
		while ($Deger <= 100){
			echo $Deger . "</br>";
			$Deger++;
		}
	}

	yaziyaz();
	yaziyaz();
	yaziyaz();



	function the_best_numbers(){
		for ($i=1; $i <= 100; $i++) { 
			if ($i %2 == 0){
				print("Cift sayilar : " . $i . "</br>");
			}

			else{
				print("Tek sayilar : " . $i . "</br>");
			}
		}
	}


	the_best_numbers();
	the_best_numbers();
	the_best_numbers();



	function name(){
		$names = "Hacker";
		try{
			if ($names == "Hacker"){
				echo "<strong>" . "Nope ...." . "</strong>" . "</br>";
			}

			else{
				throw new Exception("<strong>" ."Error ...." . "</strong>" . "</br>");
			}
		}
		catch(Exception $response){
			echo $response->getMessage();
		}
	}


	name();


	function _test(){
		$new_list = array("PHP","Java","cSharp");
		foreach($new_list as $news){
			echo "<strong>" . $news . "</strong>" . "</br>";
		}
	}

	_test();
	?>
</body>
</html>
