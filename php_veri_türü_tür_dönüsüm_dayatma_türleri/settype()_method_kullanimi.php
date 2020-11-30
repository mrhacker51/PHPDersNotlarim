<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>php_veri_türleri_settype.php</title>
  </head>
  <body>
    <?php
    // settype() fonksiyonu ile veri türü dönüsümü yapılıyor
    // array yani listeler başka bir veri türüne dönüstürülemiyor
    // Fakat diger türler array türüne dönüştürülebiliyor ..

    $Data         = "PHP";

    $TypeData     = gettype($Data);

    echo "Veri" . $Data . "</br>";
    echo "Verinin Türü : " . $TypeData . "</br>";

    // Dönüsüm

    $DataDonusum  =     settype($Data,"integer");

    // Veya Kısa Tanım Olarak

    // $DataDonusum  =     settype($Data,"int"); // int

    echo "Yeni Veri Tipi : " . $DataDonusum . "<br/>";

    $TypeData     = gettype($Data);

    echo "Donusumden Sonraki Yeni Veri Türü : " . $Data . "</br>";
    echo "Verinin Türü : " . $TypeData . "</br>";

    //


    $Data         = 8.53;

    $TypeData     = gettype($Data);

    echo "Veri : " . $Data . "</br>";
    echo "Verinin Türü : " . $TypeData . "</br>";

    $DataDonusum  = settype($Data,"int");
    $TypeData     = gettype($Data);
    echo "Donusumden Sonraki Yeni Veri Türü : " . $Data . "</br>";
    echo "Yeni Veri Tipi : " . $TypeData;

    //

    $Data         = "HelloPHP";
    $TypeData     = gettype($Data);

    echo "Veri : " . $Data . "</br>";
    echo "Verinin Türü : " . $TypeData . "</br>";

    $DataDonusum  = settype($Data,"array");
    $TypeData     = gettype($Data);
    echo "<pre>";
    print_r($Data);
    echo "</pre>";

    echo "Donusumden Sonraki Yeni Veri Türü : " . $TypeData . "</br>";


    //

    $Data       = 5;
    $VeriType   = gettype($Data);

    echo "Veri : " . $Data . "</br>";
    echo "Veri Türü : " . $VeriType . "</br>";

    $Donusum    = settype($Data,"string");

    $VeriType   = gettype($Data);
    echo "New Data : " . $Data . "</br>";

    echo "Yeni Veri Tipi : " . $VeriType . "</br>";
    ?>
  </body>
</html>
