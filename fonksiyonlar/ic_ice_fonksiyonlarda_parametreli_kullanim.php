<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ic_ice_fonksiyonlarda_parametreli_deger_dondurme.php</title>
  </head>
  <body>
    <?php
    function Bir($Name="Hacker"){

      function Iki($Yas=51){
        echo $Yas;

        function Uc($Country="Germany"){
          echo $Country;
        }

        // Uc("Turkey");
        Uc();
      }
      echo $Name;

       // Iki(18);
       Iki();
    }

    // Bir("Hacker");
    Bir();
    ?>
  </body>
</html>
