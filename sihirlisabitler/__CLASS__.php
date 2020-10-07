<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>__CLASS__</title>
</head>
<body>

    <?php

    /*
    __CLASS__ = Sihirli Sabiti Olusturulan sınıfın adını döndürür . 
    */


    /*  Örnek 1  */

        class Deger{
            function Deneme(){
                echo __CLASS__;
            }
        }

        $Sonuc = new Deger;

        $Sonuc->Deneme();



        /* Örnek 2 */
        class Deger2{
            function Deneme2(){
                $Sn = __CLASS__;
                echo $Sn;
            }
        }


        $Sonc2 = new Deger2;
        $Sonc2->Deneme2();


        /* Örnek 3 */


        class Deger3{
            function Deneme3(){
                $Ss = __CLASS__;
                echo $Ss;
            }
        }


        $Sonc3 = new Deger3;
        $Sonc3->Deneme3();







    ?>
</body>
</html>
