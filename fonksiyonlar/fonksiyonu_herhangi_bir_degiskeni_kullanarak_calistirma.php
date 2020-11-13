<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fonksiyonu_herhangi_bir_degiskeni_kullanarak_calistirma</title>
</head>
<body>
    <?php
    // degisken = "fonksiyon adı"
    $Test = "Deneme";

    function Deneme(){
        echo "Hello PHP" . "<br/>";
    }

    $Test();

    $Test_2 = "Deneme_2";

    function Deneme_2(){
        echo "Deneme ...";
    }

    $Test_2();

    //


    $Test_3 = "Deneme_3";


    function Deneme_3(){
        echo "Deneme3 ....";
    }


    $Test_3();

    ?>
</body>
</html>
