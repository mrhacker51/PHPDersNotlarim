<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GOTO Kullanımı ...</title>
</head>
<body>
    <?php
    // GOTO IN :
    $Deger = 2;


    if (($Deger == 1)):
        goto Egitici;
    elseif($Deger == 2):
        goto Ogretici;
    else:
        goto error;
    endif;


    Egitici:

    echo "Hakan Celebi";
    echo "</br>";
    echo "Ümit Karan";
    echo "</br>";
    echo "Ümit Davala";
    
    Ogretici:
    echo "Hasan Sas";
    echo "</br>";
    echo "Selcuk inan";



    if (($Deger != 1) and ($Deger != 2)){
        goto error;
        error:
        echo "Kisi Bulunamadı ...";
    }
    ?>
</body>
</html>
