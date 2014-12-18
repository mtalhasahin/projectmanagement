<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Array Flip</title>
</head>
<body>
<!--array_flip anahtarlar ile değerlerin yerini değiştirir. -->
	<?php
       $kitap=array(1=>'PHP',
       	            2=>'Laravel Framework',
       	            3=>'Bootstrap Framework');
       echo "<pre>";
       echo "Dizinin Anahtarlar->Değerler";
       print_r($kitap);
       
       $kitaplar=array_flip($kitap);
       echo "<pre>";
       echo "Dizinin Değerler=>Anahtarlar";
       print_r($kitaplar);


	?>
</body>
</html>