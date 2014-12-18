<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Strpos Fonksiyonu</title>
</head>
<body>
	
	<!--String ifade de istediğimiz ifadenin nereden başladığını bulmak için -->
	<?php

        $kitap="Php Dersleri";
        $parca=strpos($kitap, "Php");
        echo $parca;

        echo "<br>";
        $kitap1="Framework Öğreniyorum";
        if(strpos($kitap1,"Laravel")==false){
        	echo "Laravel bulunamadı";
        }

	?>
</body>
</html>