<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dizinin degiskenini önceden tanımlayarak sonradan veri eklemek part 2</title>
</head>
<body>
    
    <?php

    /* Örnek */
    $Degerler = array("Volkan","Hasan","Hakan");

    $Degerler[] = "Hack";
    $Degerler[] = "The";
    $Degerler[] = "Box";


    echo "<pre>";
    print_r($Degerler);
    echo "</pre>";
    


    /* Örnek */

    $Degerlerr = array("Ali","Veli","Meryem");

    $Degerlerr["Meyve1"] = "Elma";
    $Degerlerr["Meyve2"] = "Cilek";
    $Degerlerr[] = "Karpuz";

    echo "<pre>";
    print_r($Degerlerr);
    echo "</pre>";

    /* Örnek */

    $Response = array("Meyve" => "Armut","Borc" => 200, "Hack" => 500);
    $Response[] = "Dolge";
    $Response[] = "Gabbana";
    $Response[] = "Yummy";
    $Response[] = "Yuppy";

    echo "<pre>";
    print_r($Response);
    echo "</pre>";



    echo $Response[0] . "</br>";

    echo $Response["Borc"] . "</br>";

    echo $Response["Hack"] . "</br>";

    ?>
</body>
</html>
