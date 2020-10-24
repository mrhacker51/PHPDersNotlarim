<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>for döngüsü</title>
</head>
<body>
    <?php

    for ($Deger = 1; $Deger <= 100; $Deger++){
        if (($Deger % 2 == 0)){
            echo "Cift Sayilar : " . $Deger . "</br>";
        }
        else{
            echo "Tek Sayilar : " . $Deger . "</br>";
        }
    }


    for ($sayi = 10; $sayi >= 1; $sayi--){
        echo "Degerler : {$sayi}" . "</br>";
    }
    ?>
</body>
</html>
