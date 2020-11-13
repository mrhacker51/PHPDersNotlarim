<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>anonim_fonksiyonlari_otomatik_calistirma</title>
</head>
<body>
    <?php
    // normal anonim function .
    $Result = function(){
        echo "Hello PHP";
    };


    $Result();

    //
    ($Result = function(){
        echo "Hello PHP";
    })();

    // Return tarzı 

    echo($Result = function(){
        return "Hello PHP";
    })();



    //

    ($Vulns = function(){
        echo "Hello Vuln ... ";
    })();

    //

    echo ($Vulns = function(){
        return "Hello Vuln ... ";
    })();
    
    ?>
</body>
</html>

