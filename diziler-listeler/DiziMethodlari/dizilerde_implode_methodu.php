<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>dizilerde_implode_methodu.php</title>
  </head>
  <body>
    <?php


    $Arrays        = array("Ahmet","Mehmet","Hasan","Buse","Derya","Mina");

    echo "<pre>";
    print_r($Arrays);
    echo "</pre><br/>";

    $ResultImplode = implode(" ",$Arrays);


    echo " | " . $ResultImplode . "<br/>";


    $ExampleNew    = implode(" Güzel,",$Arrays);

    echo $ExampleNew . "<br/>";

    // Ahmet Güzel,Mehmet Güzel,Hasan Güzel,Buse Güzel,Derya Güzel,Mina  | Sondakine ekleme yapmaz ancak "" boşluk bırakılırsa ekleme yapar.



    $Arrays        = array("Ahmet","Mehmet","Hasan","Buse","Derya","Mina","");

    $Ex            = implode(" Güzel,",$Arrays);


    echo "NameAndSurname : {$Ex}";

    // NameAndSurname : Ahmet Güzel,Mehmet Güzel,Hasan Güzel,Buse Güzel,Derya Güzel,Mina Güzel,


    
    ?>
  </body>
</html>
