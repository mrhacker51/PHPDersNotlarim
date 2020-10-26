<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>döngülerde continue kullanimi .... </title>
</head>
<body>
    <?php
    // döngülerde arttırma islemi continue kullanırken en üstte yazılır ...

    for($Deger = 0; $Deger <=100; $Deger++){
    	if (($Deger >= 50) && ($Deger <= 70)){
    		continue;
    	}
    	echo $Deger . "</br>";
    }



    $Deger = 100;
    while ($Deger <= 250){
    	$Deger++;
    	if (($Deger >= 130) and ($Deger <= 180)){
    		continue;
    	}
    	echo $Deger . "</br>";
    }




    $Newdeger = 15;
    do{
    	$Newdeger++;
    	if(($Newdeger >= 50) and ($Newdeger <= 80)){
    		continue;
    	}
    	echo $Newdeger . "</br>";
    }while($Newdeger <= 200);



	$My_list = array("PHP","cSharp","NodeJs","Python","BashScript","SQL","JavaScript","Assembly","C","C++","Dart","Kotlin");

	foreach($My_list as $Degers){
		if (($Degers == "NodeJs") or ($Degers == "Assembly")){
			continue;
		}
		echo "<strong>" . $Degers . "</strong>" . "</br>";
	}

    ?>
</body>
</html>
