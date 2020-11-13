<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>anonim_fonksiyonlarda_parametre_gönderme_ve_otomatik_calistirma</title>
</head>
<body>
    <?php
    ($IslemYap = function($a,$b){
        echo "Language : " . $a . "<br/> "  . "Language : " . $b;
    })("PHP","Python");

    echo "<br/>";
    //

    ($IslemYap = function($a="",$b="",$c=""){

        if ($a != ""){
            echo "Language : " . $a;
        }
        
        if ($b != ""){
            echo "Language : " . $b;
        }

        if ($c != ""){
            echo "Language : " . $c;
        }
    })();

    //
    echo "<br/>";

    ($IslemYap = function($a="",$b="",$c=""){

        if ($a != ""){
            echo "Language : " . $a . "<br/>";
        }
        
        if ($b != ""){
            echo "Language : " . $b . "<br/>";
        }

        if ($c != ""){
            echo "Language : " . $c;
        }
    })("Ali","Veli","Mehmet");

    ?>
</body>
</html>
