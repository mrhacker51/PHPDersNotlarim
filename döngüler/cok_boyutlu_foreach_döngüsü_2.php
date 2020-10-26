<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>foreach döngüsü cok boyutlu kullanimi .... </title>
</head>
<body>
    <?php

    $My_list = array("PHP","Java","Javascript",array("Anna","Julia","Vesla",array("John","James","James",array("Turkey","Holland","Germany"),array("Weevely","Webshells","Nslookup","Whois","Curl","Dirb","Nikto","Gobuster","Dirbuster","BurpSuite","Flask-Rce","Flask-Session-Brute-Force","Jwt-Token"))));


    echo "<pre>";
    print_r($My_list);
    echo "</pre>";



    foreach($My_list as $Icerik){
    	if (is_array($Icerik)){
    		foreach($Icerik as $Deger){
    			echo $Deger;
    			if (is_array($Deger)){
    				foreach($Deger as $Degerler){
    					echo $Degerler;
    					if (is_array($Degerler)){
    						foreach($Degerler as $Code){
    							echo $Code;
    							if (is_array($Code)){
    								foreach($Code as $Coode){
    									echo $Coode;
    								}
    							}

    							else{
    								echo $Code;
    							}
    						}
    					}

    					else{
    						echo $Deger;
    					}
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
