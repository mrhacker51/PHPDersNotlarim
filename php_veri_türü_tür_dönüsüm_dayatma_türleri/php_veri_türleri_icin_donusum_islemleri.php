<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>php_veri_türleri_icin_donusum_islemleri.php</title>
  </head>
  <body>
    <?php

    // BOOL
    $DegerBir   = "PHP";

    $TypeDeger  = gettype($DegerBir);

    echo "Veri : {$DegerBir}" . "<br/>";
    echo "Veri Tipi : " . $TypeDeger . "<br/>";

    $DegerBir   = (bool)"PHP";

    $TypeDeger  = gettype($DegerBir);

    echo "Veri : {$DegerBir}" . "<br/>";
    echo "Veri Tipi : " . $TypeDeger . "<br/>";

    // İNTEGER

    $DegerBir   =  "8080";

    $TypeDeger  = gettype($DegerBir);


    echo "Veri : " . $DegerBir . "<br/>";
    echo "Veri Tipi : " . $TypeDeger . "<br/>";

    $DegerBir   = (int)$DegerBir;

    echo "Veri : " . $DegerBir . "<br/>";

    echo "Veri Tipi : " . gettype($DegerBir) . "<br/>";


    // OBJECT

    $DegerBir  = "HelloPHP";

    echo "Veri : " . $DegerBir . "<br/>";
    echo "Veri Tipi : " . gettype($DegerBir) . "<br/>";

    $DegerBir  = (object)$DegerBir;
    $TypeVeri  = gettype($DegerBir);

    echo "Veri : " . $DegerBir->scalar . "<br/>";
    echo "Veri Tipi : " . $TypeVeri . "<br/>";

    // STRİNG

    $DegerBir  = 8080;
    $TypeVeri  = gettype($DegerBir);

    echo "Veri : " . $DegerBir . "<br/>";
    echo "Veri Tipi : " . $TypeVeri . "<br/>";

    $DegerBir  = (string)$DegerBir;
    echo "Veri :" . $DegerBir . "<br/>";
    $TypeVeri  = gettype($DegerBir);

    echo "Veri Tipi : " . $TypeVeri . "<br/>";
    // FLOAT

    $DegerBir  = 8080;
    $TypeVeri  = gettype($DegerBir);

    echo "Veri : " . $DegerBir . "<br/>";
    echo "Veri Tipi : " . $TypeVeri . "<br/>";

    $DegerBir  = (float)$DegerBir;
    $TypeVeri  = gettype($DegerBir);

    echo "Veri : " . $DegerBir . "<br/>";
    echo "Veri Tipi : " . $TypeVeri . "<br/>";

    ?>
  </body>
</html>
