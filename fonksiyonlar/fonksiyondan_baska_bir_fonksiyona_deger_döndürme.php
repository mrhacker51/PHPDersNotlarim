<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fonksiyondan_baska_bir_fonksiyona_deger_döndürme</title>
</head>
<body>
    <?php
    function ParaBirimi($Birim,$Tutar){
        if ($Birim == "Türk Lirası"){
            $kur = 1;
        }
        elseif ($Birim == "Amerikan Doları"){
            $kur = 8;
        }
        elseif ($Birim == "Euro"){
            $kur = 10;
        }
        else{
            $kur = 0;
        }

        return Hesapla($kur,$Tutar);
    }

    function Hesapla($KurBilgisi,$TutarBilgisi){
        $Sonuc = $KurBilgisi * $TutarBilgisi;
        echo $Sonuc;
    }


    ParaBirimi("Amerikan Doları",2000);
    ?>
</body>
</html>
