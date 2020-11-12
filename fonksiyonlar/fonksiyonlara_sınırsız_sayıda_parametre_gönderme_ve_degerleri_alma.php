<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fonksiyonlara_sınırsız_sayıda_parametre_gönderme_ve_degerleri_alma</title>
</head>
<body>
    <?php
    function Bilgiler(){
        $GelenParametreSayisi = func_num_args();
        //  func_num_args()  gönderilen parametre sayisini döndürür ...
        echo "Fonksiyona Gönderilen Parametre Sayisi : " . $GelenParametreSayisi . "</br>";
        echo "<hr>" . "</hr>";

        $GelenParametreDegerleriDizi = func_get_args();
        // func_get_args()   gönderilen degerleri dizi'ye cevirir döndürür ...
        echo "Fonksiyona Gelen Parametre Degerleri : " . $GelenParametreDegerleriDizi; // Array ...

        echo "<hr>" . "</hr>";
        echo "<pre>";
        print_r($GelenParametreDegerleriDizi);
        echo "</pre>";

        foreach($GelenParametreDegerleriDizi as $Sonuc){
            echo "\n" .$Sonuc;
        };

        echo "<hr>" . "</hr>";

        $Name = func_get_arg(0);
        // func_get_arg() gönderilen parametrelerin degerlerini alır tek tek .. example func_get_arg(0) index numarasına göre ...
        echo $Name . "</br>";

        echo "<hr>" . "</hr>";
        $Surname = func_get_arg(1);

        echo $Surname . "</br>";
        echo "<hr>" . "</hr>";

        $Age = func_get_arg(2);

        echo $Age . "</br>";
        echo "<hr>" . "</hr>";

        $Country = func_get_arg(3);

        echo $Country;
        echo "<hr>" . "</hr>";
    }


    Bilgiler("Anna","Vissi",38,"Germany");
    ?>
</body>
</html>
