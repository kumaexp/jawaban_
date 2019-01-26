<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form name="form" action="#" method="get">
	 	<input type="number" name="subject" id="subject" name="quantity" min="1" max="10">
	 	<input type="submit" name="submit">
	</form>
	<?php  
		error_reporting(0);
		$s = $_GET['subject'];
		for($i=0;$i<=$s;$i++){  
			for($j=1;$j<=$i;$j++){  
				echo $j;
				echo " ";
			}  
			echo "<br>";  
		} 
	?>
</body>
</html>
