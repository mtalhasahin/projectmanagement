<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>strpbrk fonksiyonu</title>
</head>
<body>
	<!--strpbrk fonksiyonu string ifadenin içerisinde aradığımız ifade ile birlikte geri kalanıda getirir. -->

	<?php
          $adsoyad="Kahverengi kedi";
          echo strpbrk($adsoyad, "K");
          echo "<br>";
          echo strpbrk($adsoyad, "k");

	?>
</body>
</html>