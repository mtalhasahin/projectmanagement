<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Substr_count Fonksiyonu</title>
</head>
<body>
	<!-- String ifadenin içerisinde kaç defa geçtiğini döndürür. -->
	<?php
          
            $adsoyad="Muhammet Talha Şahin";
            $parca=substr_count($adsoyad, "a",5);
            echo $parca;

         
	?>
</body>
</html>