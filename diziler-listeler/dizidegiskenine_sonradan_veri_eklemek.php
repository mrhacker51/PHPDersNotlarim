<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dizinin degiskenini önceden tanımlayarak sonradan veri eklemek</title>
</head>
<body>
    
    <?php

    $Degerler = array();


    $Degerler[] = "Extra";
    $Degerler[] = "Egitim";
    $Degerler["Meyve"] = "Elma";
    echo "<pre>";
    print_r($Degerler);
    echo "</pre>";

    echo $Degerler["Meyve"] . "</br>";
    ?>
</body>
</html>
