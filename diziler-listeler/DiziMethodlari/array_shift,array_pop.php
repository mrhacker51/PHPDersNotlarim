<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title>array_shift,array_pop</title>
</head>

<body>
	<?php
	/*
	array_shift()	:	Dizi içerisinde bulunan ilk elemanı silmek için kullanılır. Aynı zamanda dizi içeriğinden sildiği elemanın değerini geriye döndürür.
	array_pop()		:	Dizi içerisinde bulunan son elemanı silmek için kullanılır. Aynı zamanda dizi içeriğinden sildiği elemanın değerini geriye döndürür.
    */
    
    /* Örnek 1 */

    $Isimler = array("Volkan","Ahmet","Hakan","Hasan","Mehmet");
    
    echo "<pre>";
    print_r($Isimler);
    echo "</pre>";


    array_shift($Isimler);
    echo "<pre>";
    print_r($Isimler);
    echo "</pre>";




    /* Örnek 2 */

    $Isimler = array("Volkan","Ahmet","Hakan","Hasan","Mehmet");
    
    echo "<pre>";
    print_r($Isimler);
    echo "</pre>";

    $Result = array_shift($Isimler);

    echo "Silinen Deger : " . $Result;
    echo "<pre>";
    print_r($Isimler);
    echo "</pre>";



    /* Örnek 3 */

    $Isimler = array("Lig1" => "Türkiye","Lig2" => "Fransa", "Lig3" => "Hollanda");

    echo "<pre>";
    print_r($Isimler);
    echo "</pre>";

    $Result = array_shift($Isimler);

    echo "Silinen Deger : " . $Result;


    echo "<pre>";
    print_r($Isimler);
    echo "</pre>";




    /* Örnek 4 */

    $Isimler = array("Vodafone","Turkcell","Mobile",
                        array("Call","Me","Mapper","Hopper","Disassembly",
                                            array("Tel1","Tel2","Tel3","Tel4",
                                                                         array("PHP" => 200, "C" => 300, "Lua" => 400))));

    echo "<pre>";
    print_r($Isimler);
    echo "</pre>";


    $Result = array_shift($Isimler[3][5][4]);

    echo "Silinen Deger : " . $Result . "<hr>" . "</br>" . "</hr>";

    $Result = array_shift($Isimler[3]);


    echo "Silinen Deger : " . $Result;

    echo "<pre>";
    print_r($Isimler);
    echo "</pre>";






    /* array_pop() */


    /* Örnek 1 */


    $Isimler = array("Takı1","Takı2","Takı3");

    echo "<pre>";
    print_r($Isimler);
    echo "</pre>";

    array_pop($Isimler);

    echo "<pre>";
    print_r($Isimler);
    echo "</pre>";



    /* Örnek 2 */

    $Isimler = array("Takı1","Takı2","Takı3");

    echo "<pre>";
    print_r($Isimler);
    echo "</pre>";

    array_pop($Isimler);
    array_pop($Isimler);

    echo "<pre>";
    print_r($Isimler);
    echo "</pre>";



    /* Örnek 3 */


    $Isimler = array("Takı1","Takı2","Takı3");

    echo "<pre>";
    print_r($Isimler);
    echo "</pre>";

    $Result = array_pop($Isimler);

    echo "Silinen Deger : " .  $Result ."</br>";
    $Result = array_pop($Isimler);

    echo "Silinen Deger Yeni : " . $Result;
    
    echo "<pre>";
    print_r($Isimler);
    echo "</pre>";


    /* Örnek 4 */


    $Isimler = array("Altın","Dolar","Euro","Mark","Sterlin","Frank","Young",array("S1","S2","S3","S4","S5","S6",array("T1","T2","T3","T4","T5","T6")));

    echo "<pre>";
    print_r($Isimler);
    echo "</pre>";

    $Result = array_pop($Isimler[7][6]);

    echo "Silinen Deger : " . $Result;


    echo "<pre>";
    print_r($Isimler);
    echo "</pre>";


    ?>
</body>
</html>
