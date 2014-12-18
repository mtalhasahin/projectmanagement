<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Array Reverse</title>
</head>
<body>
<!-- Diziyi tersten yazdırma --> 
	<?php
       
       $kitap=array(1=>"PHP",
       	            2=>"MySql",
       	            3=>"Oracle",
       	            4=>"javascript");
       echo "<pre>";
       echo "Dizi normal gösterimi";
       print_r($kitap);

       $kitap1=array_reverse($kitap);
       echo "<pre>";
       echo "Dizinin terten sıralaması";
       print_r($kitap1);

	?>
</body>
</html>