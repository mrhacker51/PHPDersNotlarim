<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>end()</title>
</head>
<body>
     <?php
        // end() == Dizi göstericisinin son konumundaki elemanı bulmak icin kullanilir .

        $Isimler = array("Volkan","Hakan","Hasan");

        echo "<pre>";
        print_r($Isimler);
        echo "</pre>";



        $Result = end($Isimler);
        echo "Dizinin son konumundaki eleman : " . $Result;


        $Isimler = array("Banu","Emma","Anna",array("James","Tyler","ReyMakkarty"),array("Aslı","Merve","Buse"));

        echo "<pre>";
        print_r($Isimler);
        echo "</pre>";

        $Result = end($Isimler[3]);
        echo $Result . "</br>";


        $Result = end($Isimler[4]);

        echo $Result;
     ?>
</body>
</html>
