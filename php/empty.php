<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<!--Verinin dolu olup olmadığını kontrol eder-->
	<?php
         
         $do="kayitli";
         if(empty($do)){
         	echo "veri boş";
         }else{
         	echo "veri dolu";
         }

	?>
</body>
</html>