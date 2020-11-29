<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>php_veri_türleri_gettype.php</title>
  </head>
  <body>
    <?php
    // gettype() verinin türünü gösterir ...

    $Name = "PHP";
    $Sonuc = gettype($Name);

    echo $Sonuc . "</br>";

    //

    $Result = "8";
    $Sonuc = gettype($Result);
    echo $Sonuc . "</br>";

    //

    $Result = 12;
    $Sonuc = gettype($Result);

    echo $Sonuc . "</br>";

    //

    $Result = 10.5;
    $Sonuc = gettype($Result);
    echo $Sonuc . "</br>";

    //

    $Result = true;
    $Sonuc = gettype($Result);

    echo $Sonuc . "</br>";

    //

    $Result = array("1","2","3");
    $Sonuc = gettype($Result);

    echo $Sonuc . "</br>"; // ARRAY

    echo "<pre>";
    print_r(gettype($Result));
    echo "</pre>";

    // CLASS GETTYPE KULLANMAK

    class Islem {
      public $Isim = "Hello PHP";
    }

    $Sonuc = new Islem;
    $GetTypeUsageClass = gettype($Sonuc);
    echo $Sonuc->Isim . "</br>";
    echo $GetTypeUsageClass . "</br>";

    // FUNCTION

    $Result = function(){
        echo "Hello Python" . "</br>";
    };
    $Result();
    $Sonuc = gettype($Result);

    echo $Sonuc . "</br>";

    // NULL Belirsiz ... YOKKK

    $Result = null;

    $Sonuc = gettype($Result);

    echo $Sonuc;


    ?>
  </body>
</html>
