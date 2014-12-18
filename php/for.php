<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>For Döngüsü</title>
</head>
<body>
	<?php

     $kitap=array('PHP',
     	          'Laravel',
     	          'Bootstrap',
     	          'javascript',
     	          'Github');
     for($i=0; $i<=count($kitap)-1;$i++){
     	echo $kitap[$i]."<br>";
     }

	?>
</body>
</html>