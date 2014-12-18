<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Unset Array</title>
</head>
<body>
	<!-- Unset dizilerde dizinin elemanını silmek için kullanılır -->
<?php
	$kitap=array(1=>'PHP',
		         2=>'Laravel Framework',
		         3=>'Bootstrap Framework');

   echo "Dizinin silinmemiş hali:";
   echo "<pre>";
	print_r($kitap);
	unset($kitap[3]);
	echo "Dizinin silinmiş hali";
	echo "<pre>";
	print_r($kitap); 

	?>
</body>
</html>