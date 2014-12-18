<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>wordwrap fonksiyonu</title>
</head>
<body>
	
	<!--wordwrap fonksiyonu belirlenen karakterden sonra belirlenen karakteri ekleme yapıyor. -->
	<?php

      $wwrap="armut kiraz çilek";
      $text=wordwrap($wwrap,5,", ");
      echo $text;
	?>
</body>
</html>