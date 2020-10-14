<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array_unshift,array_push</title>
</head>
<body>
    <?php
    // array_unshift() : Dizinin veya dizilerin en başına ekleme yapar ve hem eleman ekleme yaptıgı gibi degiskene esitlendiginde ise icerisindeki eleman sayısını döndürür .
    // array_push() : Dizinin veya dizilerin en sonuna ekleme yapar ve hem eleman ekleme yaptıgı gibi degiskene esitlendiginde ise icerisindeki eleman sayısını döndürür .
    
    /*

    $Isimler = array("Hakan","Merve","Hasan",array("Walison","Barbaros","Esra","Ayyüce"),"Büsra","Yummy");

    echo "<pre>";
    print_r($Isimler);
    echo "</pre>";

    */

    /* örnek 1 */
    /*
    array_unshift($Isimler,"Levent","Funda");

    echo "<pre>";
    print_r($Isimler);
    echo "</pre>";
    */

    /* örnek 2 */
    /*
    array_unshift($Isimler[3],"Eray","Serhat");
    echo "<pre>";
    print_r($Isimler[3]);
    echo "</pre>";
    */

    // degiskene esitledigimde ise uzunlugunu bana döndürür .. 
    /*

    $Response = array_unshift($Isimler[3]);

    echo "Uzunlugu : " . $Response;
    // Uzunlugu : 4

    $Response = array_unshift($Isimler[3],"Eray","Serhat");
    echo "</br>";
    echo "Uzunlugu : " . $Response;
    // Uzunlugu : 6


    echo "<pre>";
    print_r($Isimler);
    echo "</pre>";

    */

    // Output : 

            /*
            Array
        (
            [0] => Hakan
            [1] => Merve
            [2] => Hasan
            [3] => Array
                (
                    [0] => Eray
                    [1] => Serhat
                    [2] => Walison
                    [3] => Barbaros
                    [4] => Esra
                    [5] => Ayyüce
                )

            [4] => Büsra
            [5] => Yummy
        )
            */





         ///                        array_push()
         
        $Isimler = array("Hakan","Merve","Hasan",array("Walison","Barbaros","Esra","Ayyüce"),"Büsra","Yummy");

        echo "<pre>";
        print_r($Isimler);
        echo "</pre>";
        
        
        array_push($Isimler,"Volkan","Mehtap");

        echo "<pre>";
        print_r($Isimler);
        echo "</pre>";


        array_push($Isimler[3],"Gamze","Buse");

        echo "<pre>";
        print_r($Isimler[3]);
        echo "</pre>";

        $Result = array_push($Isimler[3]);

        echo  "Uzunluk : " . $Result;



    ?>
</body>
</html>
