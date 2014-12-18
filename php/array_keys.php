<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Array Keys</title>
</head>
<body>
	<!--array_keys dizinin sadece anahtarlarını yazdırır. -->

	<?php

      $kitap=array(1=>'PHP',
      	           2=>'Laravel Framework',
      	           3=>'Bootstrap Framework' );
      echo "<pre>";
      print_r(array_keys($kitap));

	?>
</body>
</html>