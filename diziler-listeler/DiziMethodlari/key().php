<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>key()</title>
</head>
<body>
    <?php

    // key() = Dizilerde anahtar degerini döndürür .. 
    $Isimler = array("A1","A2","A3","A4");

    echo "<pre>";
    print_r($Isimler);
    echo "</pre>";


    $Result  = key($Isimler);

    echo "Anahtar Degeri : " . $Result;



    $New_Isimler = ["PHP" => "B1","PHP3" => "B2","PHP4" => "B3","PHP5" => "B4"];


    echo "<pre>";
    print_r($New_Isimler);
    echo "</pre>";

    $Result = key($New_Isimler);

    echo "AnahtarDegeri : " . $Result;



    $New_example = array("G1" => "TT" , "G2" => "TS" , array("A1" => "Dallas","Panama","NewYork",array("LasVegas","LosAngelas","Vietnam","Paris")));


    echo "<pre>";
    print_r($New_example);
    echo "</pre>";

    $Result = key($New_example);


    echo "Deger : " . $Result . "</br>";

    $Result = key($New_example[0]);

    echo "Deger : " . $Result . "</br>";


    $Result = key($New_example[0][2]);

    echo "Deger : " . $Result;

?>
</body>
</html>
