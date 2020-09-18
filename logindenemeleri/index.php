<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Start</title>
</head>
<body>
    <?php
        echo "PHP Started\n";
 
        $user = "root";
        $pass = "root";
 
        if ($user == "root" && $pass == "root"){
            echo "Giris Basarili ", "Deger : ",$user;
        }
 
        else{
            echo "Giris Basarisiz !!!";
        }
    ?>
</body>
</html>
