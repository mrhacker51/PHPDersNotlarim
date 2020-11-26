<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ic_ice_fonksiyon_kullanimi_2.php</title>
  </head>
  <body>
    <?php
    function Islem(){
      function TamamMesaji(){
        echo "İslem Basariyla Tamamlanmistir ...";

      }

      function HataMesaji(){
        echo "Bu Bir Hata Mesajidir ....";
      }

      function UyariMesaji(){
        echo "Bu Bir Uyari Mesajidir ....";
      }
    }

    // Islem();
    // TamamMesaji();

    //

    // Islem();
    // HataMesaji();

    // Islem();
    // UyariMesaji();

    // $Result = "Tamam";
    // $Result = "Uyari";
    // $Result = "HelloWorld";
    
    if ($Result == "Tamam"){
      Islem();
      TamamMesaji();
    }elseif($Result == "Uyari"){
      Islem();
      UyariMesaji();
    }
    else{
      Islem();
      HataMesaji();
    }

    ?>
  </body>
</html>
