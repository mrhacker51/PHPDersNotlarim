<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Degisken</title>
</head>
<body>
    <?php

    $Deger = "Hacker";
    $$Deger = "TheBest";

    echo "$Deger";
    echo "</br>";
    echo "Deger : {$$Deger}";
    
    ?>
    </body>
</html>
