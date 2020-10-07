<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diziler - Listeler </title>
</head>
<body>

    <?php
    /* array() veya [] şeklinde tanımlanırlar . */
    /* Diziler yani listeler print_r() fonksiyonu ile ekrana basılır */
    /* Anahtar Tanımlamaz isek 0 - 1 -2 şeklinde Python'da oldugu gibi kendisi gider , Anahtar Tanımlar İsek Örnek $Test = array("ISIM" => "HelloPHP") şeklinde yazdıgımda geriye alırken
     $Test["ISIM"]; şeklinde yazıdırıyorum .  print_r($Test["ISIM"]);*/

     /* <pre> </pre> etiketi daha düzgün çıkartmamızı saglıyor daha iyi ve düzenli bir görüntü ve daha net okuma çıktısı saglıyor .*/

    $Isimler = array("ISIM" => "Extras");

    echo "<pre>";
    print_r($Isimler);
    echo "<pre>";
    print_r($Isimler["ISIM"]);


    $Isimler[0] = "Extra";
    $Isimler[1] = "Egitim";

    echo "<pre>";
    print_r($Isimler);



    $Isimler["Test"] = "Extra2";

    echo $Isimler["Test"];
    echo "<pre>" . "</br>";
    print_r($Isimler);


    echo "Örnek 2" . "</br>";
    $Isimler_new = [];

    $Isimler_new["Anahtar1"] = "PHP";
    $Isimler_new["Anahtar2"] = "Egitimi";


    echo "<pre>";
    print_r($Isimler_new);

    echo "</br>";
    echo $Isimler_new["Anahtar1"] . "</br>" . $Isimler_new["Anahtar2"];


    echo "Örnek3" . "</br>";



    $my_list = array("Kek1" => 100, "Kek2" => 200, "Kek3" => 300, "Kek4" => 400);


    echo "<pre>";

    print_r($my_list);

    echo "</br>";

    /*      print_r($my_list["Kek1"] . "</br>" . $my_list["Kek2"] . "</br>" . $my_list["Kek3"] . "</br>" . $my_list["Kek4"]);   Bu şekilde yazabilirim veya ...                                       */
    print_r($my_list["Kek1"] . "</br>" . $my_list["Kek2"] . "</br>" . $my_list["Kek3"] . "</br>" . $my_list["Kek4"]);
    echo "</br>";
    echo "<pre>";

    /* Bu şekilde . ... veya */
    echo $my_list["Kek1"] . "</br>" . $my_list["Kek2"] . "</br>" . $my_list["Kek3"] . "</br>" . $my_list["Kek4"];


    echo "</br>" . "</pre>";

    /* Bu şekilde veya .... */
    print($my_list["Kek1"] . "</br>" . $my_list["Kek2"] . "</br>" . $my_list["Kek3"] . "</br>" . $my_list["Kek4"]);

    /*  Veya */

    echo $Isimler_new["Kek1"];
    echo $Isimler_new["Kek2"];
    echo $Isimler_new["Kek3"];
    echo $Isimler_new["Kek4"];
    
    ?>
</body>
</html>
