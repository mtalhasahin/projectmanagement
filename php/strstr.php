<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Strstr Fonksiyonu</title>
</head>
<body>

    <!--strstr() fonksiyonu istediğimiz bir parçadan itibaren bölmeye yarar. -->
	<?php
       
       $kitap="PHP Dersi öğreniyorum";
       $parca=strstr($kitap, "Dersi");

       echo $parca;

       echo "<br>";

       $parca1=strstr($kitap, "Dersi",true);

       echo $parca1;

	?>
</body>
</html>