<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>switch süslü parantez olmadan kullanımı ... </title>
</head>
<body>
    <?php

    $Deger = "Mart";


    switch($Deger):
        case (($Deger == "Ocak") or ($Deger == "Subat") or ($Deger == "Mart")):    
            echo "{$Deger} Ayıdır ... ";
        break;
            case (($Deger == "Nisan") or ($Deger == "Mayıs") or ($Deger == "Haziran")):
            echo "{$Deger} Ayıdır ... ";
        break;
        default:
        echo "{$Deger} Bir Ay Degildir ...";
    endswitch;
    ?>
</body>
</html>
