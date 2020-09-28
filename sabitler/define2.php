<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sabitler Define</title>
</head>
<body>
    
    <?php

    function Deneme(){
        define("ISIM","WelcomePHP");
    }


    Deneme();

    echo ISIM;



    function Deneme2(){
        define("ISIM2","PHPWelcome");

    }

    Deneme2();

    echo ISIM2;
    
    ?>
</body>
</html>
