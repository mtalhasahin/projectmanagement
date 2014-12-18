<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Array Random</title>
</head>
<body>
	<?php
		
		$kitap=array(1=>"PHP",
			         2=>"Oracle",
			         3=>"Web Tasarım",
			         4=>"Flash");

		echo "<pre>";
		echo $kitap[array_rand($kitap,1)];
       

	?>
</body>
</html>