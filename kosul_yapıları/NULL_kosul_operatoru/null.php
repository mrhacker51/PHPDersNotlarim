<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /*
    // _GET süper globali ile kullanımı
    $KullaniciAdi = $_GET["name"];
    $Surname = $_GET["surname"];


    echo "Forum Kullanici Adi : {$KullaniciAdi}" . "</br>";
    echo "Forum Kullanici SoyAdi : {$Surname}";
    //

    // _POST süper globali ile kullanımı
    $KullaniciAdi = $_POST["name"];
    $Surname = $_POST["surname"];


    echo "Forum Kullanici Adi : {$KullaniciAdi}" . "</br>";
    echo "Forum Kullanici SoyAdi : {$Surname}";
    //

    // _REQUEST süper globali ile kullanimi
    $KullaniciAdi = $_REQUEST["name"];
    $Surname = $_REQUEST["surname"];


    echo "Forum Kullanici Adi : {$KullaniciAdi}" . "</br>";
    echo "Forum Kullanici SoyAdi : {$Surname}";
    //
    */



    // NULL ifadesinin faydası asagıda ... Örnegin inspect element'te delete element yaparak sildigimizde hata cıkıyor o hatayı düzgün hale getirmek için NULL kullanıyoruz ve kötü niyetli kişilere karşı :)))


    // _GET süper globali ile kullanımı
    $KullaniciAdi = $_GET["name"] ?? "Error 404";
    $Surname = $_GET["surname"] ?? "Error 404";


    echo "Forum Kullanici Adi : {$KullaniciAdi}" . "</br>";
    echo "Forum Kullanici SoyAdi : {$Surname}";
    //

    // _POST süper globali ile kullanımı
    $KullaniciAdi = $_POST["name"] ?? "Error 404";
    $Surname = $_POST["surname"] ?? "Error 404";


    echo "Forum Kullanici Adi : {$KullaniciAdi}" . "</br>";
    echo "Forum Kullanici SoyAdi : {$Surname}";
    //

    // _REQUEST süper globali ile kullanimi
    $KullaniciAdi = $_REQUEST["name"] ?? "Error 404";
    $Surname = $_REQUEST["surname"] ?? "Error 404";


    echo "Forum Kullanici Adi : {$KullaniciAdi}" . "</br>";
    echo "Forum Kullanici SoyAdi : {$Surname}";
    //



    ?>
</body>
</html>
