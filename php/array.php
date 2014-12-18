<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Dizi</title>
</head>
<body>
	<?php

      $kitap = array(1=>"php",
      	             2=>"web",
      	             3=>"laravel"
       );
      foreach ($kitap as $kitaplar) {
      	echo "Kitapların listesi:"."<b>".$kitaplar."</b>"."<br>";
      }

      
	?>
</body>
</html>