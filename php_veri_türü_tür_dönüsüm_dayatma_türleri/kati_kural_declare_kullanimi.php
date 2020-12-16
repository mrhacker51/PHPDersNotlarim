<?php
declare(strict_types=1) // Burada declare ile katı kural koyuyoruz .

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>declare_kullanimi.php</title>
  </head>
  <body>
    <?php

    function Deneme(string $Name,string $Surname, int $Yas): array{
      // $Degerler = $Name . " " . $Surname ." ". $Yas;
      // $Degerler = explode(" ",$Degerler);
      // return $Degerler;

      // Veya

      $Degerler = array($Name,$Surname,$Yas);

      return $Degerler;
    }

    // $Sonuc = Deneme("Lily","Debbie","38");  // HATA integer deger yerine string deger göndermek FATAL ERROR sebebidir ...
    $Sonuc = Deneme("Lily","Debbie",38); // Dogrusu ...

    echo "<pre>";
    print_r($Sonuc);
    echo "</pre>";   // Bir dize dönecegi için print_r ile daha düzgün okuyoruz ..



    // Example 2


    function Deneme2(array $Degerler):string{
      $Impl = implode("<br/>",$Degerler);
      return $Impl;
    }


    $Dizi = array("Ali","Veli","John","Hakan");

    $Sonucs = Deneme2($Dizi);

    echo $Sonucs;

    ?>
  </body>
</html>
