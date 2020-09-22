<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Globals</title>
</head>
<body>
    <?php
    // $GLOBALS 

    function deneme(){
        $GLOBALS["Isim"] = "The Best Hacker";
    }

    deneme();


    echo "$Isim";
    echo "</br>" . $GLOBALS["Isim"];
    ?>



<?php

$GLOBALS["Isim"] = "The Best Hackers";

function deneme2(){
    echo "</br>" . $GLOBALS["Isim"];

}

deneme2();


?>
</body>
</html>
