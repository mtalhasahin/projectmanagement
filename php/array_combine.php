<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Array Combine</title>
</head>
<body>
	<!-- array_combine-->
	<?php

      $sirketler=array('Adobe',
      	               'Mysql AB',
      	               'Collectorz.com');
      $programlar=array('Adobe Dreamweaver',
      	                'Mysql',
      	                'Collectorz');
      $birlestirme=array_combine($sirketler,$programlar);
      echo "<pre>";
      print_r($birlestirme);
	?>
</body>
</html>