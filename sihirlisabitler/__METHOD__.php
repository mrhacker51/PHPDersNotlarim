<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>__METHOD__</title>
</head>
<body>

    <?php
    /* __METHOD__ = Sihirli sabiti sınıfın içerisindeki kullanılan method'un adını döndürür . Ve Döndürdügü gibi sınıfın içerisinde oldugundan hangi sınıfta oldugunuda belirtir.
    */

    class Test{
        function Deneme(){
            echo __METHOD__;
        }

        function Deneme2(){
            echo __METHOD__;
        }
    }

    $Sonuc = new Test;
    $Sonuc->Deneme();
    echo "</br>";
    $Sonuc->Deneme2();


    class Test2{
        function Deneme3(){
            $Snc = __METHOD__;
            echo $Snc;
        }

        function Deneme4(){
            $Snc = __METHOD__;
            echo $Snc;
        }
    }


    $SSsonuc = new Test2;
    echo "</br>";
    $SSsonuc->Deneme3();
    echo "</br>";
    $SSsonuc->Deneme4();









    ?>
</body>
</html>
