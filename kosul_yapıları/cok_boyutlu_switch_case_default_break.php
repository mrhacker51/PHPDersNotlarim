<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>coklu switch statement kullanımı</title>
</head>
<body>
    <?php

    $Saat = 10;

    switch($Saat){
        case (($Saat > 0 ) && ($Saat <= 10)):

            switch($Saat){
                case (($Saat == 0)):
                    echo "İyi Geceler Saat ( {$Saat} ) ";
                break;

                case (($Saat == 1)):
                    echo "İyi Geceler Saat ( {$Saat} ) ";
                break;

                case (($Saat == 2)):
                    echo "İyi Geceler Saat ( {$Saat} ) ";
                break;

                case (($Saat == 3)):
                    echo "İyi Geceler Saat ( {$Saat} ) ";
                break;

                case (($Saat == 4)):
                    echo "İyi Geceler Saat ( {$Saat} ) ";
                break;

                case (($Saat == 5)):
                    echo "İyi Geceler Saat ( {$Saat} ) ";
                break;

                case (($Saat == 6)):
                    echo "İyi Geceler Saat ( {$Saat} ) ";
                break;                

                case (($Saat == 7)):
                    echo "İyi Geceler Saat ( {$Saat} ) ";
                break;

                case (($Saat == 8)):
                    echo "İyi Geceler Saat ( {$Saat} ) ";
                break;

                case (($Saat == 9)):
                    echo "İyi Geceler Saat ( {$Saat} ) ";
                break;
            
                case (($Saat == 10)):
                    echo "İyi Geceler Saat ( {$Saat} ) ";
                break;            
                
                default:
                echo "Bilinmeyen Bir Hata Olustu ! ";
            
            }
        break;

        case (($Saat >=11) && ($Saat <=19)):

            switch($Saat){

                case (($Saat == 11)):
                    echo "İyi Günler Saat ( {$Saat})";
                break;

                case (($Saat == 12)):
                    echo "İyi Günler Saat ( {$Saat})";
                break;

                case (($Saat == 13)):
                    echo "İyi Günler Saat ( {$Saat})";
                break;

                case (($Saat == 14)):
                    echo "İyi Günler Saat ( {$Saat})";
                break;

                case (($Saat == 15)):
                    echo "İyi Günler Saat ( {$Saat})";
                break;

                case (($Saat == 16)):
                    echo "İyi Günler Saat ( {$Saat})";
                break;
                
                case (($Saat == 17)):
                    echo "İyi Günler Saat ( {$Saat})";
                break;

                case (($Saat == 18)):
                    echo "İyi Günler Saat ( {$Saat})";
                break;                

                case (($Saat == 19)):
                    echo "İyi Günler Saat ( {$Saat})";
                break;

                default:
                echo "Bilinmeyen Bir Hata Olustu !!";
            }
        break;

        default:
        echo "Bilinmeyen Saat Dilimi Hatası ! ";
        break;
    }

    ?>
</body>
</html>
