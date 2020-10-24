<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While Döngüsü</title>
</head>
<body>
    <?php

    $BaslangicDegeri = 1;

    while (($BaslangicDegeri <= 100)){
        echo "Baslangic Degeri  :" . $BaslangicDegeri . "</br>";
        $BaslangicDegeri++;
        // veya $BaslangicDegeri += 1;
        // veya $BaslangicDegeri = $BaslangicDegeri + 1;
    }


    // Tek ve Cift Sayilar .... 


    while (($BaslangicDegeri <= 100)){
        if (($BaslangicDegeri %2 == 0)):
            echo "Cift Sayilar : " . $BaslangicDegeri . "</br>";
        else:
            echo "Tek Sayilar : "  . $BaslangicDegeri . "</br>";
        endif;
        $BaslangicDegeri++;
    }


    // sonsuz döngü


    while (1){
        echo "Hello World";
    }


    // 

    

    $BaslangicDegeri = 100;
    while (($BaslangicDegeri >= 1)){

        echo  "Döngü Sayisi : ". " " .  $BaslangicDegeri . "Hello While .... " . "</br>";
        $BaslangicDegeri--;

    }
    ?>
</body>
</html>
