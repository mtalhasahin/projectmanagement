<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Foreach</title>
</head>
<body>
	<?php
      $kitap=array('PHP',
     	          'Laravel',
     	          'Bootstrap',
     	          'javascript',
     	          'Github');
      foreach($kitap as $kitaplar){
      	echo $kitaplar."<br>";
      }


	?>
</body>
</html>