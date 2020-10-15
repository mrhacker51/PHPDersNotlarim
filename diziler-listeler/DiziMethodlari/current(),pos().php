<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>current(),pos()</title>
</head>
<body>
    
    <?php
    $Isimler = array("Hande","Buse","Mehtap");


    echo "<pre>";
    print_r($Isimler);
    echo "</pre>";

    $Result = current($Isimler);

    echo "Deger : " . $Result; // Hande



    $Isimler_new = array("Buse","Merve","Funda",array("Melisa","Gamze","Hatice",["Mehtap","Büsra","Meryem"]));


    echo "<pre>";
    print_r($Isimler_new);
    echo "</pre>";


    $Result = current($Isimler_new);
    echo "Deger : " . $Result . "</br>";  // Buse


    $Result = current($Isimler_new[3]); 
    echo "Deger : " .  $Result . "</br>"; // Melisa

    $Result = current($Isimler_new[3][3]);


    echo "Deger : " . $Result; // Mehtap


    $Isimler_new_2  = array(array("Olya","Dalya","Anastacia","Seryebkina"),"Hande","Yelda"); // İlk index liste oldugu icin burada print_r() ile yazdıracagım.


    echo "<pre>";
    print_r($Isimler_new_2);
    echo "</pre>";



    $Result = current($Isimler_new_2[0]);
    echo "<pre>";
    print_r($Result);
    echo "</pre>";


    echo "Deger : " . $Result;






    // pos()



    $Isimler = array("Hande","Buse","Mehtap");


    echo "<pre>";
    print_r($Isimler);
    echo "</pre>";

    $Result = pos($Isimler);

    echo "Deger : " . $Result; // Hande



    $Isimler_new = array("Buse","Merve","Funda",array("Melisa","Gamze","Hatice",["Mehtap","Büsra","Meryem"]));


    echo "<pre>";
    print_r($Isimler_new);
    echo "</pre>";


    $Result = pos($Isimler_new);
    echo "Deger : " . $Result . "</br>";  // Buse


    $Result = pos($Isimler_new[3]); 
    echo "Deger : " .  $Result . "</br>"; // Melisa

    $Result = pos($Isimler_new[3][3]);


    echo "Deger : " . $Result; // Mehtap


    $Isimler_new_2  = array(array("Olya","Dalya","Anastacia","Seryebkina"),"Hande","Yelda"); // İlk index liste oldugu icin burada print_r() ile yazdıracagım.


    echo "<pre>";
    print_r($Isimler_new_2);
    echo "</pre>";



    $Result = pos($Isimler_new_2[0]);
    echo "<pre>";
    print_r($Result);
    echo "</pre>";


    echo "Deger : " . $Result;

    ?>
</body>
</html>
