<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dizinin anahtarına ait verilerin degistirilmesi</title>
</head>
<body>
    
    <?php

    $Veri = array("JS" => "Lale","Python" => "Jale","cSharp" => "Funda", "Scala" => "Fulya","C" => "Hulya","PHP" => "Meryem","Natasha","Dalya","Olya","Olga","Serebro","Madonna");
    
    echo "<pre>";
    print_r($Veri);
    echo "</pre>";

     /* Output : 


        Array
    (
        [JS] => Lale
        [Python] => Jale
        [cSharp] => Funda
        [Scala] => Fulya
        [C] => Hulya
        [PHP] => Meryem
        [0] => Natasha
        [1] => Dalya
        [2] => Olya
        [3] => Olga
        [4] => Serebro
        [5] => Madonna
    )

    */
    
    $Veri["JS"] = "Hatice";
    
    
    echo "<pre>";
    print_r($Veri);
    echo "</pre>";

    /*
    output : 

        Array
    (
        [JS] => Hatice
        [Python] => Jale
        [cSharp] => Funda
        [Scala] => Fulya
        [C] => Hulya
        [PHP] => Meryem
        [0] => Natasha
        [1] => Dalya
        [2] => Olya
        [3] => Olga
        [4] => Serebro
        [5] => Madonna
    )

    */
    
    $Veri["Mobil1"] = "Saber";
    $Veri["Mobil2"] = "Layla";
    $Veri["Mobil3"] = "Lancelot";


    echo "<pre>";
    print_r($Veri);
    echo "</pre>";
    
    /*
    Output : 


        Array
    (
        [JS] => Hatice
        [Python] => Jale
        [cSharp] => Funda
        [Scala] => Fulya
        [C] => Hulya
        [PHP] => Meryem
        [0] => Natasha
        [1] => Dalya
        [2] => Olya
        [3] => Olga
        [4] => Serebro
        [5] => Madonna
        [Mobil1] => Saber
        [Mobil2] => Layla
        [Mobil3] => Lancelot
    )

    */

    $Veri["Mobil1"] = "Miya";
    $Veri["Mobil2"] = "Fasha";

    echo "<pre>";
    print_r($Veri);
    echo "</pre>";


    echo "<pre>";
    echo $Veri["Mobil1"] . "</br>" . $Veri["Mobil2"] . "</br>" . $Veri["Mobil3"] . "</br>";
    echo "</pre>";
    ?>
</body>
</html>
