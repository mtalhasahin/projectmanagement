<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Array Merge</title>
</head>
<body>
     <!--Dizileri birleştirme işlemi yapar.. -->
	<?php
      $kitap1=array(1=>'PHP',
      	           2=>'Javascript',
      	           3=>'jQuery');

      $kitap2=array(1=>'Oracle',
      	            2=>'MsSQL');
     

      $kitaplar=array_merge($kitap1,$kitap2);
       echo "<pre>";
       print_r($kitaplar);
	?>
</body>
</html>