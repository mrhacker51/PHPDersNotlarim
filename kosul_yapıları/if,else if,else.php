<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>if,elseif,else statement</title>
</head>
<body>
    <?php

    if (5<10){
        echo "5 - 10 dan kücüktür" .  "</br>";
    }
    else{
        echo "5 - 10 dan kücük degildir";
    }



    $Saat = 20;



    if (($Saat >=0) and ($Saat <=20)){
        echo "Nice" .  "</br>";
    }
    elseif (($Saat >=30) and ($Saat <=50)){
        echo "NiceTwo" .  "</br>";
    }
    else{
        echo "Error !" .  "</br>";
    }


    $Hour = 10;
    $Hour_ = 20;
    $Hour__ = 30;

    if (($Hour == 10) and ($Hour_ == 25)){
        echo ">3";
    }

    elseif (($Hour_ == 25) and ($Hour__ == 30)){
        echo "very good";
    }

    elseif (($Hour = 10) and ($Hour_ == 20) and ($Hour__ ==  35)){
        echo "Very Very Nice ";    
    }

    else{
        echo "Great";
    }

?>
</body>
</html>
