<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sabitlerde Dizi Tanımlama</title>
</head>
<body>
    
    <?php


    /* Örnek */

    define("TEST",["Ali","Veli"]);

    echo "<pre>";
    print_r(TEST);
    echo "</pre>";



    /* Örnek */

    const TEST2 = array("Ali" => 200, "Veli" => 300);

    echo "<pre>";
    print_r(TEST2);
    echo "</pre>";



    /* Örnek */

    define("TESTER",array("Hakan" => 300,"Volkan" => 400,"Hasan" => 500));

    echo "<pre>";
    print_r(TESTER);
    echo "</pre>";


    /* Örnek */
    const TEST4 = ["Yusuf" => 200];

    echo "<pre>";
    print_r(TEST4);
    echo "</pre>";




    /*  Örnek */

    $Response = array("Proxy" => 100,"Proxy2" => 200, "Proxy3" => 300, "Proxy4" => 400);

    define("PROXY",$Response);

    const PROXIES = PROXY;

    echo "<pre>";
    print_r(PROXIES);
    echo "</pre>";


    ?>
</body>
</html>
