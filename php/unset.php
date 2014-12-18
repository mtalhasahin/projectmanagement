<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Unset</title>
</head>
<body>
<!-- /*Veri yok etmeye yarar*/ -->
<?php
      $kitap="PHP";
      echo $kitap."<br>";
      unset($kitap);
       echo "Kitap Adı:". $kitap ."<br>";
       if(isset($kitap)){
       	echo "Veri tanımlanmış";
       }else{
       	echo "Veri tanımlanmamış";
       }	
 
?>
</body>
</html>