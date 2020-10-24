<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>do while döngüsü</title>
</head>
<body>

    <?php
    // C programlama dilinde oldugu gibi aynı şekilde döngü 1 kere döner sonra kosula bakar ... 
    $Deger = 1;

    do{
        echo "Deger : " . $Deger;
        $Deger++;

    }while($Deger <=10);
    
    
    $Surname = "Temnikova";


    do{
        echo "You surname  : " . $Surname;
        $Surname++;
    }while($Surname === "Temnikova");
    
    
    
    ?>
</body>
</html>
