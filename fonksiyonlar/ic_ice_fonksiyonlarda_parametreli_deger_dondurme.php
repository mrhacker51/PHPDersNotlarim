<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ic_ice_fonksiyonlarda_parametreli_deger_dondurme.php</title>
  </head>
  <body>
    <?php
    function Bir($Isim){
      function Iki($Soyisim){
        return $Soyisim;
      }
      $SoyIsim = Iki("Hacker51");
      return $Isim . " " . $SoyIsim;
    }

    $Result = Bir("Bay");

    echo $Result;


    //


    function NewFunc($Country){
      function NewBir($Age){
        return $Age;
      }

      $Age_ = NewBir(11);
      return $Country . " " . $Age_;
    }

    $Result = NewFunc("France");

    echo $Result;
    ?>
  </body>
</html>
