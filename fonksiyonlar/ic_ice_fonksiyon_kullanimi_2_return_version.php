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
        return "İslem Basariyla Tamamlanmistir ...";

      }

      function HataMesaji(){
        return "Bu Bir Hata Mesajidir ....";
      }

      function UyariMesaji(){
        return "Bu Bir Uyari Mesajidir ....";
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
      $Mesaj = TamamMesaji();
      echo $Mesaj;

    }elseif($Result == "Uyari"){
      Islem();
      $Mesaj = UyariMesaji();
      echo $Mesaj;
    }
    else{
      Islem();
      $Mesaj = HataMesaji();
      echo $Mesaj;
    }

    ?>
  </body>
</html>
