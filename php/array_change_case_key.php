<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Array Change Case Key</title>
</head>
<body>
<!-- Dizide ki anahtarları büyük küçük yapma-->
	<?php
      $kitap=array(pusula1=>"PHP",
        	         pusula2=>"Javascript",
        	         pusula3=>"Bootstrap");
      $kitaplar=array_change_key_case($kitap,CASE_UPPER);
      echo "<pre>";
      print_r(array_keys($kitaplar));
	?>
</body>
</html>