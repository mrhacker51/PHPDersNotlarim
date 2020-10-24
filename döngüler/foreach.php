<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>foreach döngüsü .... </title>
</head>
<body>
    <?php

    $My_list = array("cSharp","Assembly","Python","Julia");


    foreach($My_list as $Language){
        echo $Language . "</br>";
    }

    echo "<hr>";

    $Degerler = array(1,2,3,4,5,6,7,8,9,10);
    foreach($Degerler as $Numbers){
        if ($Numbers % 2 == 0){
            echo "Number : " . $Numbers . "</br>";
        }
        else{
            echo "No Mod " . "</br>";
        }
    }


    echo "<hr>";
    $My_list_2 = array("Payitaht","Baraj","MasterChef","YasakElma");

    $My_new_list = [];

    foreach($My_list_2 as $My_lister){
        $My_new_list = $My_lister;
        echo "Films : {$My_new_list}" . "</br>";
    }




    ?>
</body>
</html>
