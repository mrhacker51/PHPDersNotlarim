<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title>İSTİSNALAR ---- HATA DENETİMİ </title>
</head>

<body>
	<?php
	/*
	try 			=	Hata oluşturabilecek kodlar için kullanılır.
	catch			=	Hata oluşursa çalıştırılacak kodlar için kullanılır.
	finally			=	Hata oluşsada oluşmasada çalıştırılacak kodlar için kullanılır.
	throw			=	Hata oluşturabilecek kodlar için istisnai durumlarda kullanılır.
	Exception		=	Tüm istisnalar için önceden tanımlı olan temel sınıfı çağırmak için kullanılır.
	getMessage()	=	Tüm istisnalar için oluşturulacak olan iletilerin atandığı veri tutuculardır.
	
	Yapısı :
	try{
		Kod blokları
		throw new Exception(İleti);
	}catch(Exception İleti Ataması){
		Kod blokları
	}finally{
		Kod blokları
	}
	*/
	
	try{
        $Deger = "Hasan";

        if ($Deger == "Volkan"):
            echo "Merhaba Volkan Nasılsın ? ... ";


        elseif($Deger == "Onur"):
            throw new Exception("Merhaba Onur Nasılsın ? ...");

        elseif($Deger == "Yusuf"):
            throw new Exception("Merhaba Yusuf Nasılsın ? .... ");

        else:
            throw new Exception("Sen Volkan Degilsin ....!");
        endif;

        }
	catch(Exception $Sonuc){
        echo $Sonuc->getMessage();
    }

    finally{
        echo "</br> Herzaman Gösterir ...";
    }
	?>
</body>
</html>
