<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Array Count Values</title>
</head>
<body>
	<!-- Hangi değerden kaç tane var...-->
	<?php
       
        $kitap=array(1=>'PHP',
        	         2=>'Javascript',
        	         3=>'Bootstrap',
        	         4=>'PHP');
        echo "<pre>";
        print_r(array_count_values($kitap));

	?>
</body>
</html>