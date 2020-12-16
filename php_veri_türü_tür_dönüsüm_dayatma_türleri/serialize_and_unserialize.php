<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>serialize_and_unserialize_kullanimi.php</title>
  </head>
  <body>
    <?php

    // Veritabanına bir veri aktarmak istedigimizde serialize kullanılır ...
    // serialize = dönüştürür ...
    // unserialize = eski haline döndürür ..

    $Test       = array("F" => 100, "F2" => 200, "F3" => 300, "F4" => 400);

    echo "<pre>";
    print_r($Test);
    echo "</pre>";

    $Serial     = serialize($Test);

    echo $Serial;

    // a:4:{s:1:"F";i:100;s:2:"F2";i:200;s:2:"F3";i:300;s:2:"F4";i:400;}


    $Unserial   = unserialize($Serial);

    echo "<pre>";
    print_r($Unserial);
    echo "<pre/>";

    /*
      Array
    (
        [F] => 100
        [F2] => 200
        [F3] => 300
        [F4] => 400
    )
    */

    ?>
  </body>
</html>
