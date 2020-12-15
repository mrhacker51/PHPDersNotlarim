<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>dizilerde_list_kullanımı.php</title>
  </head>
  <body>
    <?php

    $MyArray                            =  array("Ali","Veli","Hasan","Mehmet","Banu","Hülya","Mehtap");

    echo "<pre>";
    print_r($MyArray);
    echo "</pre>";

    list($A1,$A2,$A3,$A4,$A5,$A6,$A7)   = $MyArray;

    echo "Birinci  : " . $A1 . "<br/>";
    echo "Ikinci   : " . $A2 . "<br/>";
    echo "Ucuncu   : " . $A3 . "<br/>";
    echo "Dorduncu : " . $A4 . "<br/>";
    echo "Besinci  : " . $A5 . "<br/>";
    echo "Altinci  : " . $A6 . "<br/>";
    echo "Yedinci  : " . $A7;



    // Cok Boyutlu Dizi İse ...


    $MyArray                            =  array("Ali","Veli",array("Banu","Meryem",array("Anjeli","Kushi")),"Hülya","Mehtap");

    echo "<pre>";
    print_r($MyArray);
    echo "</pre>";


    list($G1,$G2,list($G3,$G4,list($G5,$G6)),$G7,$G8) = $MyArray;

    echo "Birinci  : " . $G1 . "<br/>";
    echo "Ikinci   : " . $G2 . "<br/>";
    echo "Ucuncu   : " . $G3 . "<br/>";
    echo "Dorduncu : " . $G4 . "<br/>";
    echo "Besinci  : " . $G5 . "<br/>";
    echo "Altinci  : " . $G6 . "<br/>";
    echo "Yedinci  : " . $G7 . "<br/>";
    echo "Sekizinci : " . $G8 . "<br/>";




    ?>
  </body>
</html>
