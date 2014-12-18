<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Array Values</title>
</head>
<body>
	<!--array_values dizinin değerlerini getirir.. -->
<?php
      
      $ders=array(1=>'Web Programlama',
      	          2=>'Algoritma',
      	          3=>'Veri Yapıları');
         echo "<pre>";
      	 print_r(array_values($ders));          

?>

</body>
</html>