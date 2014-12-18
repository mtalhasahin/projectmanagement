<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php

        $bilgi="Php ilk olarak Rasmus Lerdorf tarafından programlanmıştır.";
        $cumlebilgisi=explode(" ", $bilgi);
        foreach($cumlebilgisi as $kelime){
        	echo $kelime."<br>";
        }


	?>
</body>
</html>