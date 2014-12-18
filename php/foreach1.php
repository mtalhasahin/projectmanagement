<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Foreach</title>
</head>
<body>
	<?php
        
        $filmler=array('Keanu Reeves'=>'Matrix',
        	           'Russel Crowe'=>'Gladiator',
        	           'Matt Damon'=>'Bourne Triology',
        	           'James McAvoy'=>'Wanted',
        	           'Jonny Deep'=>'Pirates of the Caribbean',
        	           'Hugh Jackman'=>'X Men',
        	           'Leigh Whannell'=>'Saw');
        foreach($filmler as $aktor=>$filmadi){
        	echo $filmadi."<br>";
        }

	?>
</body>
</html>