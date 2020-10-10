<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dizileri Birlestirmek</title>
</head>
<body>
    <?php
    /* Eger dizilerin index'i aynı ise ilk olan gecerli olur ve cakısacagı icin diger dizi elemanı ekrana yazılmaz!! dogru kullanımı her birine farklı index numarası anahtar koymaktır.. birlestirirken*/
    $Dizi = array("PHP" => 100, "CSharp" => 200, "Assembly" => 300);
    $Dizi_new = array("F#" => 400 , "Python" => 500);


    echo "<pre>";
    print_r($Dizi+$Dizi_new);
    echo "</pre>";



    $Degerler = $Dizi + $Dizi_new;

    echo "<pre>";
    print_r($Degerler);
    echo "</pre>";
?>
</body>
</html>
