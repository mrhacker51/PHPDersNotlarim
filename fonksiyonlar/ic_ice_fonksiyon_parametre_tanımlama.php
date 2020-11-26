<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ic_ice_fonksiyon_parametre_tanımlama.php</title>
  </head>
  <body>
    <?php
    function Bir($Name,$Surname){
      function Iki($Country,$Age){
        echo "<strong>" ."User İnformation : " . $Country . " " . $Age . "<strong>" ."</br>";
      }
      echo "<strong>" . "User Register : " . $Name . " " . $Surname ."</strong>" ."</br>";
    }

    Bir("Anna","Debbie");
    Iki("Russia",28);

    // RETURN VERSİON


    function NewBir($Name,$Surname){
      function NewIki($Country,$Age){
        return "<strong>" ."User İnformation : " . $Country . " " . $Age . "<strong>" ."</br>";
      }
      return "<strong>" . "User Register : " . $Name . " " . $Surname ."</strong>" ."</br>";
    }

    $Sonuc = NewBir("Anna","Debbie");
    $Sonuc_ = NewIki("Russia",28);

    echo $Sonuc;
    echo $Sonuc_;

    ?>
  </body>
</html>
