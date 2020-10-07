<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>__TRAIT__</title>
</head>
<body>

    <?php

            /**
             * 
             */
            trait OzellikBir
            {
                function SonucBir(){
                    echo __TRAIT__;
                }
            }

            /**
             * 
             */
            trait OzellikIki
            {
                function SonucIki(){
                    echo __TRAIT__;
                }
            }


            class Test{
                use OzellikBir;
                use OzellikIki;
            }



            $Sonuc = new Test;
            $Sonuc->SonucBir();
            echo "</br>";
            $Sonuc->SonucIki();






            /**
             * 
             */
            trait OzellikUc
            {
                function SonucUc(){
                    $S1 = __TRAIT__;
                    echo $S1;
                }
            }


            /**
             * 
             */
            trait OzellikDort
            {
                function SonucDort(){
                    $S2 = __TRAIT__;
                    echo $S2;
                }
            }


            class Test2{
                use OzellikUc;
                use OzellikDort;
            }



            $Response = new Test2;
            echo "</br>";
            $Response->SonucUc();
            echo "</br>";
            $Response->SonucDort();
            
            


    ?>
</body>
</html>
