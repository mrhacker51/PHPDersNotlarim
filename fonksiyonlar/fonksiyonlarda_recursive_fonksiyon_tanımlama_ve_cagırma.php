<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fonksiyonlarda_recursive_fonksiyon_tanımlama_ve_cagırma</title>
</head>
<body>
    <?php

    function Deneme($Sayi){
        echo $Sayi . "</br>";
    }

    for($i = 1; $i <= 25; $i++){
        Deneme($i);
    }


    // Recursive function ... 

    function Test($Sayi_){
        if ($Sayi_ <= 25){
            echo $Sayi_ . "<br/>";
            Test($Sayi_+1);
        }
    }

    Test(1);
    ?>
</body>
</html>
