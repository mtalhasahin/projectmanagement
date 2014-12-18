<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>is_int</title>
</head>
<body>
<!-- İs_int değerin rakam olup olmadığını kontrol eder..-->
	<?php
      $makaleid=12;
      if(is_int($makaleid))
      {

      	echo "Girilen değer rakamdır";
      }else
      {

        echo "Girilen değer rakam değildir";
      }

	?>
</body>
</html>