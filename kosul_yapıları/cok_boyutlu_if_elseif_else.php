<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cok boyutlu if,elseif,else statement</title>
</head>
<body>

    <?php

    $Web = "www.google.com";
    $Server = 100;
    $Client = "appserver";


    if (($Web != "www.hollandali.com") and ($Server != 200)){
        if ($Client == "appserver"){
            echo "Tebrikler ... ";
        }

        elseif (($Client != "appserver")){
            echo "Not found ! ";
        }

        else{
            echo "404 Error !!";
        }
    }

    elseif (($Web == "www.nice.com") and ($Client == "Xammp")){
        if (($Server == 200)){
            echo "Oh nice ";
        }
        else{
            echo "Server Error ! ";
        }
    }


    else{
        "Try Again .... [ Error ]";
    }






    ?>
    
</body>
</html>
