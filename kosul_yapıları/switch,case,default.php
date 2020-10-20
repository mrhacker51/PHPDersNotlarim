<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>switch,case,break,default</title>
</head>
<body>
    <?php

    $Saat = 10;


    switch($Saat){
    case (($Saat <= 10) and ($Saat >=20));
        echo "Saat Suanda : {$Saat} ";
    break;


    case  (($Saat == 20) and ($Saat < 20));
        echo "Saat Suanda : {$Saat}";
    break;


    case (($Saat == 10) and ($Saat < 20));
        echo "Saat Suanda : {$Saat}";
    break;

    default:
        echo "Saat Calismiyor ! ";
    break;

    }



    ?>
</body>
</html>
