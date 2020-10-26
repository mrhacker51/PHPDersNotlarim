<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>foreach döngüsü cok boyutlu kullanimi .... </title>
</head>
<body>
    <?php

    $My_list = array("PHP","Java","Javascript",array("Anna","Julia","Vesla",array("John","James","James")));


    echo "<pre>";
    print_r($My_list);
    echo "</pre>";


  // veya foreach($My_list[3] as $Icerik)
  
    foreach($My_list as $Icerik){
    	if (is_array($Icerik)){
    		foreach($Icerik as $Deger){
    			echo $Deger;
    			if (is_array($Deger)){
    				foreach($Deger as $Degerler){
    					echo $Degerler;
    				}
    			}

    			else{
    				echo $Deger;
    			}
    		}
    	}

    	else{
    		echo $Icerik;
    	}
    }



    ?>
</body>
</html>
