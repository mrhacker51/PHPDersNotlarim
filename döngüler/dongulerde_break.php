<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>döngülerde break kullanimi.... </title>
</head>
<body>
    <?php


    for ($i=0; $i <=100 ; $i++){
    	if ($i == 25){
    		break;
    	} 
    	echo $i . "</br>";

    }
	


    $Deger = 100;
    while ($Deger <= 1000){
    	if ($Deger == 200){
    		break;
    	}
    	echo $Deger . "</br>";
    	$Deger++;
    }



    $Degerler = 200;
    do{
    	if ($Degerler == 300){
    		break;
    	}
    	echo $Degerler . "</br>";
    	$Degerler++;
    }while($Degerler <= 350);




	$My_list = array("Dolap","Masa","Yatak","Baza","Sandalye");

	foreach($My_list as $Sonuc){
		if ($Sonuc == "Yatak"){
			break;
		}
		echo $Sonuc;
	}


    ?>
</body>
</html>
