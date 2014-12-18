<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>str_replace fonksiyonu</title>
</head>
<body>
	<!-- str_replace fonksiyonu istediğimiz kelime ile istediğimiz kelimeyi yer değiştiriyor -->

	<?php

      $film="The Fast and The Furios";
      $parca=substr_replace("The", "Two", $film);
      echo $film;
	?>
</body>
</html>