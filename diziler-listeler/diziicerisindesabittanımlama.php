<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dizi içerisinde degisken ve sabit tanımlama</title>
</head>
<body>
    
    <?php

    /* Örnek */

    $Response = "Mavi";


    define("COLOR","Sari");
    

    const TESTER = "Kirmizi";

    $My_array = array($Response,COLOR,TESTER,"Turuncu");

    echo "<pre>";
    print_r($My_array);
    echo "</pre>";



    /* Örnek */



    $S = "Elma";

    const VERY = "Muz";
    define("GOOD","Armut");


    $Array_ = array("Meyve" => $S,"Meyve2" => VERY,"Meyve3" => GOOD);

    echo "<pre>";
    print_r($Array_);
    echo "</pre>";




    ?>
</body>
</html>
