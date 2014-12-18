<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Dizi mi?</title>
</head>
<body>
	<!-- Değişken dizi mi değil mi? -->

	<?php
       $kitaplar=array(1=>'PHP',
       	               2=>'Laravel Framework',
       	               3=>'Bootstrap Framework');

       $yazar="Talha ŞAHİN";

       if(is_array($kitaplar)){
         echo '$kitaplar dizi değişkenidir';

       }else{

       	echo '$kitaplar dizi değişkeni değildir';
       }

     echo "<pre>";

     if(is_array($yazar)){

     	echo '$yazar dizi değişkenidir.';
     }else{

     	echo '$yazar dizi değişkeni değildir';
     }


	?>
</body>
</html>