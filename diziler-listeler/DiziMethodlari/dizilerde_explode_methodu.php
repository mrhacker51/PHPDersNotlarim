<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>dizilerde_explode methodu</title>
  </head>
  <body>
    <?php

    $Teams       =  "Fenerbahce,Galatasaray,Besiktas,BursaSpor";

    $Results     = explode(",",$Teams);


    echo "<pre>";
    print_r($Results);
    echo "</pre>";


    /*

    (
    [0] => Fenerbahce
    [1] => Galatasaray
    [2] => Besiktas
    [3] => BursaSpor
    )

    */

    $Teams         =  "Fenerbahce,Galatasaray,Besiktas,BursaSpor";

    $Results       = explode(",",$Teams,-1);  // -1 -2 -3 olabilir ve yazdıgım index'in degerini siler ....

    echo "<pre>";
    print_r($Results);
    echo "</pre>";

    /*
    (
    [0] => Fenerbahce
    [1] => Galatasaray
    [2] => Besiktas
    )

    */



    $Teams     = "Fenerbahce,Galatasaray,Besiktas,BursaSpor";
    $Results   = explode(",",$Teams,3); // Burda 3.elemana kadar olan kısmı böler daha sonra diger elemanları tek bir dizi gibi gösterir .. Fenerbahce,Galatasaray

    echo "<pre>";
    print_r($Results);
    echo "</pre>";

    /*

    (
    [0] => Fenerbahce
    [1] => Galatasaray
    [2] => Besiktas,BursaSpor
    )

    */
    
    ?>
  </body>
</html>
