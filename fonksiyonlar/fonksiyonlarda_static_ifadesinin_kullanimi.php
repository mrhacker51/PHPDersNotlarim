<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>fonksiyonlarda_static_ifadesinin_kullanimi.php</title>
  </head>
  <body>
    <?php
    function Bir(){
      $sayi = 0;
      $sayi = $sayi + 1;
      echo "Deger :" . $sayi . "</br>";
    }

    Bir();
    Bir();
    Bir();
    Bir();
    Bir();

    /*
    RESULT =

    Deger :1
    Deger :1
    Deger :1
    Deger :1
    Deger :1
    */

    function Iki(){
      static $sayi = 0;
      $sayi = $sayi + 1;
      echo "Deger : " . $sayi . "</br>";
    }

    Iki();
    Iki();
    Iki();
    Iki();
    Iki();
    Iki();
    Iki();
    Iki();
    Iki();
    Iki();

    /*
    RESULT : 
    Deger : 1
    Deger : 2
    Deger : 3
    Deger : 4
    Deger : 5
    Deger : 6
    Deger : 7
    Deger : 8
    Deger : 9
    Deger : 10


    */
    ?>
  </body>
</html>
