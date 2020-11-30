<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>php_veri_türleri_icin_deger_islemleri.php</title>
  </head>
  <body>
    <?php
    // Verinin Degerini Kendi İcinde Degistiriyorlar Türü Degismiyor ... Karşılık Gelen Degeri Almamız Gerekirken Kullanıyoruz .
    // boolval($var)
    // floatval($var)
    // intval($var)
    // doubleval($var)
    // strval($var)

    $DegerBir     = "PHP";

    $TypeData     = gettype($DegerBir);

    echo "Veri : " . $DegerBir . "<br/>";
    echo "Veri Tipi : " . $TypeData;

    $TT           = boolval($DegerBir);

    echo "Veri : " . $TT;
    echo "Veri Tipi : " . gettype($DegerBir);

    $DegerIki     = 8.50;
    $Type         = gettype($DegerIki);

    echo "Veri : " . $DegerIki;
    echo "Veri Tipi : " . $Type;


    $TTT          = intval($DegerIki);
    $Type         = gettype($DegerIki);

    echo "Veri : " . $TTT . "<br/>";
    echo "Tip  : " . $Type . "<br/>";

    $STRVAL       = 12;
    $TypeVeri     = gettype($STRVAL);


    echo "Veri : " . $STRVAL . "<br/>";
    echo "Veri Tipi : " . $TypeVeri . "<br/>";

    $TTTT         = strval($STRVAL);
    echo "Veri Tipi : " . gettype($TTTT) . "<br/>";
    echo "Veri Tipi : " . gettype($STRVAL) . "<br/>";
    echo "Veri : " . $TTTT . "<br/>";
    echo "Veri : " . $STRVAL;
    ?>
  </body>
</html>
