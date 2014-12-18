<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Substr Fonksiyonu</title>
</head>
<body>
	<!-- substr istediğimiz yerden başlayıp istediğimiz yere kadar kesiyor. -->

	<?php
          $kitap="Laravel Framework";
          $parca=substr($kitap,-3,1);
          echo $parca;


	?>
</body>
</html>