<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sabitler Const</title>
</head>
<body>
    

    <?php

    const ISIM = "PHP Dersleri";


    function Deneme(){
        echo ISIM . "</br>";
    }


    Deneme();


    const ISIM2 = "PHP Dersleri --";

    function Deneme2(){
        echo ISIM2;
    }

    Deneme2();

?>
</body>
</html>
