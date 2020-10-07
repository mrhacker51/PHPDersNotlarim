<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>__FUNCTION__</title>
</head>
<body>

<?php

/*
Sihirli Sabitlerde __FUNCTION__
__FUNCTION__ = Fonksiyonun adını döndürür.
*/

function Deneme(){
    $Sonuc = __FUNCTION__;
    echo $Sonuc . "</br>";
}

Deneme();


function Deneme2(){
    echo __FUNCTION__;
}

Deneme2();



?>
</body>
</html>
