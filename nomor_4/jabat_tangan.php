<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form name="form" action="#" method="get">
	 	<input type="number" name="subject" id="subject" min="3">
	 	<input type="submit" name="submit">
	</form>
	<br>
	<?php  
		error_reporting(0);
		$s = $_GET['subject'];
		$t = $s-2;
		$u = ($t*$t + $t*3 + 2)/2;
		echo $u."&nbsp;kali jabat tangan";
	?>
</body>
</html>
