<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ic_ice_fonksiyon_kullanimi.php</title>
  </head>
  <body>
    <?php
    function Bir(){
      echo "[+] Function Bir ...";
      function Iki(){
        echo "[+] Function Iki ...";
        function Uc(){
          echo "[+] Function Uc ...";
          function Dort(){
            echo "[+] Function Dort ...";
            function Bes(){
              echo "[+] Function Bes ...";
              function Alti(){
                echo "[+] Function Altı ...";
                function Yedi(){
                  echo "[+] Function Yedi ...";
                  function Sekiz(){
                    echo "[+] Function Sekiz ...";
                    function Dokuz(){
                      echo "[+] Function Dokuz ...";
                      function On(){
                        echo "[+] Function ON ...";
                      }
                    }
                  }
                }
              }
            }
          }
        }
      }
    }

    Bir();
    echo "</br>";
    Iki();
        echo "</br>";
    Uc();
        echo "</br>";
    Dort();
        echo "</br>";
    Bes();
        echo "</br>";
    Alti();
        echo "</br>";
    Yedi();
        echo "</br>";
    Sekiz();
        echo "</br>";
    Dokuz();
        echo "</br>";
    On();

    /*

    RESULT =

    [+] Function Bir ...
    [+] Function Iki ...
    [+] Function Uc ...
    [+] Function Dort ...
    [+] Function Bes ...
    [+] Function Altı ...
    [+] Function Yedi ...
    [+] Function Sekiz ...
    [+] Function Dokuz ...
    [+] Function ON ...
    */


    ?>
  </body>
</html>
