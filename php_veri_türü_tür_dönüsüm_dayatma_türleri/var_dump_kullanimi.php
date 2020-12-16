<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>var_dump_kullanimi.php</title>
  </head>
  <body>
    <?php


    // var_dump  = herhangi bir verinin tüm yapısına erişmeyi saglar ....
    $Deger  = 101010;
    var_dump($Deger);
    $Deger  = "101010";
    var_dump($Deger);


    // Array
    $Deger = array("Hakan","Veli","Mehmet",array("Hasan","Hüseyin","Ahmet"));

    var_dump($Deger);


    // Class

    class Test{
      public $Surname = "Mrhacker51";  // public kullanmamızın sebebi her yerden erişilebilir olmasıdır .
    }

    $Sonuc = new Test;
    var_dump($Sonuc);

    /*

    int(101010)
    string(6) "101010"
    array(4) { [0]=> string(5) "Hakan" [1]=> string(4) "Veli" [2]=> string(6) "Mehmet" [3]=> array(3) { [0]=> string(5) "Hasan" [1]=> string(8) "Hüseyin" [2]=> string(5) "Ahmet" } }
    object(Test)#1 (1) { ["Surname"]=> string(10) "Mrhacker51" }

    */
    ?>
  </body>
</html>
