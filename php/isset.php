<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
 <!--Veri var mı yok mu onu kontrol eder -->
	<?php
      $do="kaydet";
      if(isset($do)){


      	 echo "verı kaydeildi";
      }else
      {
      	echo "veri kaydedilmedi";
      }
      
	?>
</body>
</html>