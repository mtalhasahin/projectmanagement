<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Array Slice</title>
</head>
<body>
	<!--array_slice belli bir parçayı çıkartır.. -->

    <?php
      
        $kitap=array(1=>'PHP',
        	         2=>'Javascript',
        	         3=>'Oracle',
        	         4=>'Photoshop',
        	         5=>'Fireworks');
        echo "<pre>";
        print_r($kitap);
        $kitaplar=array_slice($kitap, 2);
        echo "<pre>";
        print_r($kitaplar);
    ?>
</body>
</html>