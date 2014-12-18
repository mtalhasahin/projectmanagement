<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Count</title>
</head>
<body>
	<!--Count dizinin sayısını verir -->

	<?php
    $kitaplar=array(1=>'PHP',
    	            2=>'Laravel Framework',
    	            3=>'MYSQL');

    echo "Dizinin eleman sayısı: ".count($kitaplar);

	?>
</body>
</html>