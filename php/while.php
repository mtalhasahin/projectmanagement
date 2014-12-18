<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>While</title>
</head>
<body>
	<?php

      $kitap=array('PHP',
     	          'Laravel',
     	          'Bootstrap',
     	          'javascript',
     	          'Github');

      $i=0;
      while($i<=count($kitap)-1){
      	echo $kitap[$i]."<br>";
      	$i++;
      }
	?>
</body>
</html>