<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>fonksiyonlarda_yield_ifadesinin_kullanimi.php</title>
  </head>
  <body>
    <?php

    // yield ifadesi genellikle döngülerde kullanılır ve return ifadesinden farkı işlem sonlanmaz devam eder .
    // byte olarak 40 kat daha az yer kaplar memory_get_usage() ile bakılabiliyor .
    // fonksiyonlarda özellikle döngülerde yield kullanılmalıdır .
    // yield geriye bir dizi döndürür .
    function Islem($Baslangic,$Bitis){
      while ($Baslangic <= $Bitis){
        yield $Baslangic;
        $Baslangic++;
      }
    }

    $Sonuc = Islem(1,1000);

    foreach($Sonuc  as $value){
      echo $value . " " . "</br>";
    }

    $bellek = memory_get_usage();
    echo "Bellekteki Kapladıgı Yer : " . $bellek . "Byte";
    ?>
  </body>
</html>
