<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fonksiyonda_belirli_bir_yerde_durdurma_ve_devam_ettirme_for_loop</title>
</head>
<body>
    <?php
    function bankataksit($MaximumTaksitSiniri){
        echo "KrediKartı İle Tek Çekimli Sepet Ücreti : 1000 TL" . "</br>";
        if ($MaximumTaksitSiniri == 1){
            return;
        }
        echo "KrediKartı İle 2 Çekimli Sepet Ücreti : 1010 TL" . "</br>";
        if ($MaximumTaksitSiniri == 2){
            return;
        }
        echo "KrediKartı İle 3 Çekimli Sepet Ücreti : 1020 TL" . "</br>";
        if ($MaximumTaksitSiniri == 3){
            return;
        }
        echo "KrediKartı İle 4 Çekimli Sepet Ücreti : 1030 TL" . "</br>";
        if ($MaximumTaksitSiniri == 4){
            return;
        }
        echo "KrediKartı İle 5 Çekimli Sepet Ücreti : 1040 TL" . "</br>";
        if ($MaximumTaksitSiniri == 5){
            return;
        }
        echo "KrediKartı İle 6 Çekimli Sepet Ücreti : 1050 TL" . "</br>";
        if ($MaximumTaksitSiniri == 6){
            return;
        }
        echo "KrediKartı İle 7 Çekimli Sepet Ücreti : 1060 TL" . "</br>";
        if ($MaximumTaksitSiniri == 7){
            return;
        }
        echo "KrediKartı İle 8 Çekimli Sepet Ücreti : 1070 TL" . "</br>";
        if ($MaximumTaksitSiniri == 8){
            return;
        }
        echo "KrediKartı İle 9 Çekimli Sepet Ücreti : 1080 TL" . "</br>";
        if ($MaximumTaksitSiniri == 9){
            return;
        }
        echo "KrediKartı İle 10 Çekimli Sepet Ücreti : 1090 TL" . "</br>";
        if ($MaximumTaksitSiniri == 10){
            return;
        }
        echo "KrediKartı İle 11 Çekimli Sepet Ücreti : 1100 TL" . "</br>";
        if ($MaximumTaksitSiniri == 11){
            return;
        }
        echo "KrediKartı İle 12 Çekimli Sepet Ücreti : 1110 TL" . "</br>";
        if ($MaximumTaksitSiniri == 12){
            return;
        }
    }
    
    for($i = 0; $i <= 12; $i++){
        bankataksit($i);
    }

    ?>
</body>
</html>
