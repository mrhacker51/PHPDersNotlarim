<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Count Ve Sizeof</title>
</head>
<body>
    <?php
    /* Count() : Dizi içerisindeki eleman sayısını bulmak için kullanılıyor */
    /* SizeOf() : Dizi içerisindeki eleman sayısını bulmak için kullanılıyor */
    /* COUNT_RECURSIVE : Çok boyutlu dizilerde tüm boyutlar içerisindeki elemanlarda sayma işlemine dahil edilir */ /* Boyut ne kadar cok olursa olsun içe içe listede olsa sayar*/
    

    /* Örnek 1 */
    /*
    $Isimler = array("Volkan","Hakan","Onur","Levent","Serkan");


    echo "<pre>";
    print_r($Isimler);
    echo "</pre>";

    
    $Dizicount = count($Isimler);

    echo "Dizinin İcerisindeki Eleman Sayisi : " . $Dizicount;
    */


    /* Örnek 2 */
    /*
    $Isimler = array("Volkan","Hakan","Onur","Levent","Serkan");


    echo "<pre>";
    print_r($Isimler);
    echo "</pre>";

    
    $Dizicount = sizeof($Isimler);

    echo "Dizinin İcerisindeki Eleman Sayisi : " . $Dizicount;
    */



    /* Örnek 3 */
    /*
    $Isimler = array("Volkan","Hakan","Onur",array("Jale","Hale","Funda","Esra"),"Levent","Serkan");


    echo "<pre>";
    print_r($Isimler);
    echo "</pre>";

    
    $Dizicount = count($Isimler,COUNT_RECURSIVE);

    echo "Dizinin İcerisindeki Eleman Sayisi : " . $Dizicount;

    */

    /* Örnek 4 */
    $Isimler = array("Volkan","Hakan","Onur",array("Jale","Hale","Funda","Esra",array("PHP","JavaScript","Go","Python","Assembly","CSharp","SQL","F#")),"Levent","Serkan");
    /*

    echo "<pre>";
    print_r($Isimler);
    echo "</pre>";

    
    $Dizicount = count($Isimler);  // Bu şekilde 6 döndürür //

    echo "Dizinin İcerisindeki Eleman Sayisi : " . $Dizicount; 

    $Dizicount = count($Isimler,COUNT_RECURSIVE);  // Bu Şekilde Tam Hepsinin İçerisindeki Eleman Sayisini Döndürür COUNT_RECURSIVE .

    echo "</br>" . "Dizinin Eleman Sayisi : " . $Dizicount;
    */



    /* Örnek 5 */
    /*
    $Isimler = array("Volkan","Hakan","Onur",array("Jale","Hale","Funda","Esra",array("PHP","JavaScript","Go","Python","Assembly","CSharp","SQL","F#")),"Levent","Serkan");


    echo "<pre>";
    print_r($Isimler[3]);
    echo "</pre>";

    
    $Dizicount = count($Isimler[3]);  

    echo "Dizinin İcerisindeki Eleman Sayisi : " . $Dizicount; 

    $Dizicount = count($Isimler[3],COUNT_RECURSIVE);  

    echo "</br>" . "Dizinin Eleman Sayisi : " . $Dizicount;
    */

    /* Örnek 6 */

    $Isimler = array("Volkan","Hakan","Onur",array("Jale","Hale","Funda","Esra",array("PHP","JavaScript","Go","Python","Assembly","CSharp","SQL","F#")),"Levent","Serkan");


    echo "<pre>";
    print_r($Isimler[3]);
    echo "</pre>";

    
    $Dizicount = sizeof($Isimler[3]);  

    echo "Dizinin İcerisindeki Eleman Sayisi : " . $Dizicount; 

    $Dizicount = sizeof($Isimler[3],COUNT_RECURSIVE);  

    echo "</br>" . "Dizinin Eleman Sayisi : " . $Dizicount;

    ?>
    
</body>
</html>
