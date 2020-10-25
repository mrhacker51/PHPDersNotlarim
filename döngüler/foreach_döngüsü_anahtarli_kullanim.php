<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>foreach döngüsü anahtarlı kullanımı .... </title>
</head>
<body>
    <?php

    $My_list = array("Lang1" => "PHP" , "Lang2" => "C", "Lang3" => "Python" , "Lang4" => "BashScript" , "Lang5" => "JavaScript");
    
    foreach($My_list as $Deger){
        echo "Degerler : " . $Deger . "</br>";
    }

    /*
    Degerler : PHP
    Degerler : C
    Degerler : Python
    Degerler : BashScript
    Degerler : JavaScript
    */


    foreach($My_list as $AnahtarDegeri => $ElemanDegeri){
        echo "Anahtar Degeri : " . "<strong>" . $AnahtarDegeri . "\t" . "</strong>" ."Eleman Degeri : " . $ElemanDegeri . "</br>";
    }

    /*
    Anahtar Degeri : Lang1 Eleman Degeri : PHP
    Anahtar Degeri : Lang2 Eleman Degeri : C
    Anahtar Degeri : Lang3 Eleman Degeri : Python
    Anahtar Degeri : Lang4 Eleman Degeri : BashScript
    Anahtar Degeri : Lang5 Eleman Degeri : JavaScript
    */

    ?>
</body>
</html>
