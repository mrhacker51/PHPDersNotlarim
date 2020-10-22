<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ternay kullaımı .... ? : </title>
</head>
<body>
    <?php

    $Deger      = 1;
    $Mesaj      = "Merhaba Nasılsın ? ";
    $Mesaj2     = "Merhaba Napıyorsun ?";

    $Result     = ($Deger == 1) ? $Mesaj : $Mesaj2;

    echo $Result . "</br>";




    $Website = "www.google.com";
    $Webserver = "flask";
    $Webserver_version = "2020";


    echo ($Website != "www.google.com") ? $Webserver : $Webserver_version;

    ?>
</body>
</html>
