<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Array Pad</title>
</head>
<body>
	<!--Diziyi doldurmaya yarar... -->
	<?php

      $kitap=array(1=>'PHP',
      	           2=>'HTML5',
      	           3=>'javascript');
      echo "<pre>";
      print_r($kitap);

      $kitaplar=array_pad($kitap, 4, "CSS");
      echo "<pre>";
      print_r($kitaplar);

      $kitaplar1=array_pad($kitap, -4, "Bootstrap");
      echo "<pre>";
      print_r($kitaplar1);

	?>
</body>
</html>